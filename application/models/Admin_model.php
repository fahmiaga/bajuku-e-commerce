<?php

class Admin_model extends CI_model
{
    public function tampilkanUser()
    {
        return $this->db->get_where('user', ['role_id' => 2])->result_array();
    }

    public function hapusDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function aktifUser($id)
    {
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        $this->db->update('user');
    }

    public function nonAktifUser($id)
    {
        $this->db->set('is_active', 0);
        $this->db->where('id', $id);
        $this->db->update('user');
    }
}
