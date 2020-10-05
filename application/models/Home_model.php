<?php
	class Home_model extends CI_model{
	public function getItemLimit()
	{
	
		 $this->db->limit(3);
		 $query = $this->db->order_by('id','DESC')->get('item');
		return $query->result_array();
	}
	public function getItemPerempuan()
	{

		$this->db->limit(3);
		$query = $this->db->where(['gender' => 'perempuan'])->order_by('id', 'DESC')->get('item');
		return $query->result_array();
	}

	public function getItemPria()
	{

		$this->db->limit(3);
		$query = $this->db->where(['gender' => 'laki-laki'])->order_by('id','DESC')->get('item');
		return $query->result_array();
	}	
}
