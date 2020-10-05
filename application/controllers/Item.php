<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Item_model");

	}


	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/index');
		$this->load->view('templates/admin/footer');
	}

	public function DaftarBarang()
	{
		$data['judul'] = 'Daftar Barang';
		$data['item'] = $this->Item_model->getAllItem();
		$this->load->view('templates/admin/header',$data);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/daftarBarang',$data);
		$this->load->view('templates/admin/footer');
	}

	public function tambahdata()
	{
		$data['judul'] = 'Halaman Tambah Data Barang';


		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/admin/header', $data);
			$this->load->view('templates/admin/sidebar');
			$this->load->view('admin/tambahDataBarang');
			$this->load->view('templates/admin/footer');
		} else {

			if(isset($_FILES['gambar']['name'])){
				$config['upload_path']='./assets/img';
				$config['allowed_types']='jpg|png|gif';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload('gambar')){
					echo $this->upload->display_errors();
				 }else{
					$data = $this->upload->data();
				}
			}
			if (isset($_FILES['gambar2']['name'])) {
				$config['upload_path'] = './assets/img';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar2')) {
					echo $this->upload->display_errors();
				} else {
					$data = $this->upload->data();

					$config['image_library'] = 'gd2';
					$config['source_image'] = './assets/img/' . $data['file_name'];
				}
			}
			$this->Item_model->tambahDataItem();
			$this->session->set_flashdata('pesan', 'Ditambahkan');
			redirect('item/daftarBarang');
				}
			}

			public function hapusData($id)
			{
				$this->Item_model->hapusDataItem($id);
				$this->session->set_flashdata('pesan','Dihapus');
				redirect('item/daftarBarang');
			}

	public function ubahData($id)
	{
		$data['judul'] = 'Halaman Ubah Data Barang';
		$data['item'] = $this->Item_model->getItemById($id);
		$data['jenis']=['Kaos','Kemeja','Jaket'];
		$data['gender']=['Laki-Laki','Perempuan'];
		$data['ukuran']=['S','M','L','XL'];


		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/admin/header', $data);
			$this->load->view('templates/admin/sidebar');
			$this->load->view('admin/UbahDataBarang', $data);
			$this->load->view('templates/admin/footer');
		} else {

			// if (isset($_FILES['gambar']['name'])) {
			// 	$config['upload_path'] = './assets/img';
			// 	$config['allowed_types'] = 'jpg|png|gif';

			// 	$this->load->library('upload', $config);

			// 	if (!$this->upload->do_upload('gambar')) {
			// 		echo $this->upload->display_errors();
			// 	} else {
					// $data= $this->upload->data('file_name');

					// $config['image_library'] = 'gd2';
					// $config['source_image'] = './assets/img/' . $data['file_name'];
					// $config['width'] = '250';
					// $config['height'] = '250';
					// $config['maintain_ratio'] = FALSE;
					// $config['new_image'] = './assets/img/thumb/' . $data['file_name'];

					// $this->load->library('image_lib', $config);
					// $this->image_lib->resize();

					// echo $data['file_name'];
			// 	}
			// }



			// if (isset($_FILES['gambar2']['name'])) {
			// 	$config['upload_path'] = './assets/img';
			// 	$config['allowed_types'] = 'jpg|png|gif';

			// 	$this->load->library('upload', $config);

			// 	if (!$this->upload->do_upload('gambar2')) {
			// 		echo $this->upload->display_errors();
			// 	} else {
			// 		$data = $this->upload->data();

			// 		$config['image_library'] = 'gd2';
			// 		$config['source_image'] = './assets/img/' . $data['file_name'];
			// 	}
			//}

				$nama = $this->input->post('nama');
				$stock = $this->input->post('stock');
				$harga = $this->input->post('harga');
				$jenis = $this->input->post('jenis');
				$gender = $this->input->post('gender');
				$ukuran = $this->input->post('ukuran');

				$upload_image = $_FILES['gambar']['name'];
				$upload_image2 = $_FILES['gambar2']['name'];

				if($upload_image){

					$config['upload_path'] = './assets/img';
					$config['allowed_types'] = 'jpg|png|gif';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')){

						$old_gambar = $data['item']['gambar'];

						if($old_gambar != 'default.jpg'){
							unlink(FCPATH . 'assets/img/' . $old_gambar);
						}

						$new_gambar = $this->upload->data('file_name');
						
						$this->db->set('gambar', $new_gambar);
					}else{
						echo $this->upload->display_errors();
					}
				}
				if ($upload_image2) {
					$config['upload_path'] = './assets/img';
					$config['allowed_types'] = 'jpg|png|gif';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('gambar2')) {

						$old_gambar2 = $data['item']['gambar2'];

						if ($old_gambar2 != 'default.jpg') {
							unlink(FCPATH . 'assets/img/' . $old_gambar2);
						}

						$new_gambar = $this->upload->data('file_name');
						$this->db->set('gambar2', $new_gambar);
					} else {
						echo $this->upload->display_errors();
					}
				}

			$this->db->set('nama', $nama);
			$this->db->set('stock', $stock);
			$this->db->set('harga', $harga);
			$this->db->set('jenis', $jenis);
			$this->db->set('gender',$gender);
			$this->db->set('ukuran',$ukuran);
			$this->db->where('id',$id);
			$this->db->update('item');
			$this->session->set_flashdata('pesan', 'Diubah');
			redirect('item/daftarBarang');
		}
	}

}
