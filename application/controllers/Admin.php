<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Manajemen Member';
        $data['member'] = $this->Admin_model->tampilkanUser();


        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/manajemenmember', $data);
        $this->load->view('templates/admin/footer');
    }

    public function hapusUser($id)
    {
        $this->Admin_model->hapusDataUser($id);
        $this->session->set_flashdata('pesan', 'User Dihapus');
        redirect('admin');
    }

    public function aktif($id)
    {
        $this->Admin_model->aktifUser($id);
        $this->session->set_flashdata('pesan', 'User Diaktifkan');
        redirect('admin');
    }
    public function NonAktif($id)
    {
        $this->Admin_model->nonAktifUser($id);
        $this->session->set_flashdata('pesan', 'User DiNonAktifkan');
        redirect('admin');
    }

    public function profile()
    {
        $data['judul'] = 'Profile Saya';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/admin/footer');
    }

    public function editProfile()
    {
        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('admin/editprofile', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/admin/';

                $this->load->library('upload', $config);

                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/img/admin/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('foto')) {
                        $old_image = $data['user']['foto'];
                        if ($old_image != 'default.jpg') {
                            unlink(FCPATH . 'assets/img/admin/' . $old_image);
                        }

                        $new_image = $this->upload->data('file_name');
                        $this->db->set('foto', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }
            }
            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
               Profile telah diupdate </div>');
            redirect('admin/profile');
        }
    }
}
