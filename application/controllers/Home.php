<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Home_model");
	}
	public function index()
	{
		$data['judul'] = 'Home';
		$data['item'] = $this->Home_model->getItemLimit();
		$data['perempuan'] = $this->Home_model->getItemPerempuan();
		$data['pria'] = $this->Home_model->getItemPria();
		$this->load->view('user/home', $data);
	}
}
