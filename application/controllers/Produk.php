<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Produk_model");
        $this->load->model('Invoice_model');
        if (!$this->session->userdata('role_id')) {
            redirect('auth');
        }
    }
    public function index()
    {
        //is_logged_in();

        $data['judul'] = 'Home';
        $data['item'] = $this->Produk_model->getItemLimit();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/produk', $data);
    }

    public function detailItem($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['judul'] = 'Detail Item';
        $data['item'] = $this->Produk_model->getItemById($id);

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar');
        $this->load->view('user/detailitem', $data);
        $this->load->view('templates/user/footer');
    }

    public function profile()
    {
        $data['judul'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar');
        $this->load->view('user/profile', $data);
        $this->load->view('templates/user/footer');
    }

    public function men()
    {
        $data['judul'] = 'Men';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->getItemPria();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar');
        $this->load->view('user/men', $data);
        $this->load->view('templates/user/footer');
    }

    public function women()
    {
        $data['judul'] = 'Women';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->getItemWanita();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar');
        $this->load->view('user/women', $data);
        $this->load->view('templates/user/footer');
    }

    public function tambahKeKeranjang($id)
    {
        $barang = $this->Produk_model->find($id);

        $data = array(
            'id'      => $barang['id'],
            'qty'     => 1,
            'price'   => $barang['harga'],
            'name'    => $barang['nama'],

        );
        $this->cart->insert($data);
        redirect('home/tampilkanitem');
    }

    public function detailkeranjang()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Detail Keranjang';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar');
        $this->load->view('user/detailkeranjang', $data);
        $this->load->view('templates/user/footer');
    }

    public function hapuskeranjang()
    {
        $this->cart->destroy();
        redirect('home/tampilkanitem');
    }

    public function deletecart($rowid)
    {
        $this->cart->remove($rowid);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Cart Dihapus </div>');
        redirect('produk/detailkeranjang');
    }

    private function _sendmail($user_otp, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'fahmiaga780@gmail.com',
            'smtp_pass' => 'Fahmi12345*',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('fahmiaga780@gmail.com', 'Bajuku Clothing');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Nomor OTP');
            $this->email->message($user_otp);
        }
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function pembayaran()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Pembayaran';

        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noHp', 'No HandPhone', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user/header', $data);
            $this->load->view('templates/user/navbar');
            $this->load->view('user/pembayaran', $data);
            $this->load->view('templates/user/footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $user_otp = rand();
                $otp = [
                    'email' => $email,
                    'user_otp' => $user_otp,
                    'date_created' => time()
                ];

                $this->db->insert('otp', $otp);
                $this->_sendmail($user_otp, 'verify');

                $this->Invoice_model->index();
                $this->cart->destroy();
                redirect('produk/pembelianConfirm');

                // $is_processed = $this->Invoice_model->index();

                // if ($is_processed) {
                //     $this->cart->destroy();
                //     redirect('produk/pembelianConfirm');
                // } else {
                //     echo 'Pesanan Anda Gagal Diproses';
                // }
            }
        }
    }

    public function pembelianConfirm()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pembayaran';
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar');
        $this->load->view('user/pembelianConfirm', $data);
        $this->load->view('templates/user/footer');

        $user_otp = $this->input->post('otp');
        //$email = $this->input->post('email');

        $otp = $this->db->get_where('otp', ['user_otp' => $user_otp])->row_array();
        if ($otp) {
            if (time() - $otp['date_created'] < (120)) {
                $this->db->delete('otp', ['user_otp' => $user_otp]);
                redirect('produk/proses_bayar');
            } else {

                $this->db->delete('otp', ['user_otp' => $user_otp]);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> token expired!</div>');
                redirect('produk/pembelianConfirm');
            }
        }
    }


    public function proses_bayar()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pembayaran';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/user/navbar');
        $this->load->view('user/proses_bayar', $data);
        $this->load->view('templates/user/footer');
    }
}
