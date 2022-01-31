<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Notes extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('food');
	}

	public function index() {
		$data['title'] = 'Daftar Kalori Makanan';
		// $data['script'] = 'inCalculator.js';
		$this->load->view('templates/_header', $data);
		$this->load->view('pages/calories_index');
		$this->load->view('templates/_footer');
	}
	

}
