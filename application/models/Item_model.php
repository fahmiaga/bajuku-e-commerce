<?php

class Item_model extends CI_model{
	public function getAllItem()
	{
		return $this->db->get('item')->result_array();
	}
	public function tambahDataItem()
	{
			$nama = $this->input->post('nama', true);
			$jenis = $this->input->post('jenis');
			$gender = $this->input->post('gender', true);
			$stock = $this->input->post('stock', true);
			$ukuran = $this->input->post('ukuran', true);
			$harga = $this->input->post('harga', true);
			$gambar = $_FILES['gambar']['name'];
			$gambar2 = $_FILES['gambar2']['name'];
	
			$data =[
				'nama' => $nama,
				'jenis' => $jenis,
				'gender' => $gender,
				'stock' => $stock,
				'ukuran' => $ukuran,
				'harga' => $harga,
				'gambar' => $gambar,
				'gambar2' => $gambar2
			];
		$this->db->insert('item', $data);
	}

	public function hapusDataItem($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('item');
	}

	public function getItemById($id)
	{
		return $this->db->get_where('item', ['id' => $id])->row_array();
	}
	// public function ubahDataItem()
	// {
	// 	$nama = $this->input->post('nama', true);
	// 	$jenis = $this->input->post('jenis');
	// 	$gender = $this->input->post('gender', true);
	// 	$stock = $this->input->post('stock', true);
	// 	$ukuran = $this->input->post('ukuran', true);
	// 	$harga = $this->input->post('harga', true);
	// 	$gambar = $_FILES['gambar']['name'];
	// 	$gambar2 = $_FILES['gambar2']['name'];

	// 	$data = [
	// 		'nama' => $nama,
	// 		'jenis' => $jenis,
	// 		'gender' => $gender,
	// 		'stock' => $stock,
	// 		'ukuran' => $ukuran,
	// 		'harga' => $harga,
	// 		'gambar' => $gambar,
	// 		'gambar2' => $gambar2
	// 	];

	// 	// if($gambar = NULL){
	// 	// 	$old_gambar = $this->input->post('old');
	// 	// 	$this->db->set('gambar', $old_gambar);
	// 	// }

	// 	$this->db->where('id', $this->input->post('id'));
	// 	$this->db->update('item', $data);
	// }
}
