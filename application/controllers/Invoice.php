<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Invoice_model');
        if (!$this->session->userdata('role_id')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->Invoice_model->tampilData();
        $data['judul'] = 'Invoice';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/admin/footer');
    }
    public function detail($id_invoice)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->Invoice_model->getIdInvoice($id_invoice);
        $data['pesanan'] = $this->Invoice_model->getIdPesanan($id_invoice);
        $data['judul'] = 'Detail Invoice';

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/detailInvoice', $data);
        $this->load->view('templates/admin/footer');
    }
}
