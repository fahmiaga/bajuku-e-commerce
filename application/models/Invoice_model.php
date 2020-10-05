<?php

class Invoice_model extends CI_Model
{

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $email = $this->input->post('email');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $invoice = [
            'email' => $email,
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        ];
        $this->db->insert('invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = [
                'id_invoice' => $id_invoice,
                'id_brg' => $item['id'],
                'nama_brg' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            ];
            

            $this->db->insert('pesanan', $data);
        }
        return TRUE;
    }

    public function tampilData()
    {
        return $this->db->get('invoice')->result_array();
    }

    public function getIdInvoice($id_invoice)
    {
        return $this->db->get_where('invoice', ['id' => $id_invoice])->row_array();
    }
    public function getIdPesanan($id_invoice)
    {
        return $this->db->get_where('pesanan', ['id_invoice' => $id_invoice])->result_array();
    }
}
