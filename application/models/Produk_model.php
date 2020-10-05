<?php
class Produk_model extends CI_model
{
    public function getItemLimit()
    {

        $this->db->limit(4);
        $query = $this->db->order_by('id', 'DESC')->get('item');
        return $query->result_array();
    }
    public function getItemWanita()
    {

        $query = $this->db->where(['gender' => 'perempuan'])->order_by('id', 'DESC')->get('item');
        return $query->result_array();
    }

    public function getItemPria()
    {

        $query = $this->db->where(['gender' => 'laki-laki'])->order_by('id', 'DESC')->get('item');
        return $query->result_array();
    }
    public function getAllItem()
    {
        $query = $this->db->order_by('id', 'DESC')->get('item');
        return $query->result_array();
    }
    public function getItem($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('jenis', $keyword);
        }
        return $this->db->order_by('id', 'DESC')->get('item', $limit, $start)->result_array();
    }
    public function getItemById($id)
    {
        return $this->db->get_where('item', ['id' => $id])->row_array();
    }

    public function find($id)
    {
        return $this->db->get_where('item', ['id' => $id])->row_array();
    }
}
