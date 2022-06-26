<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Notes extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model', 'data');
	}

	public function index() {
		$data['title'] = 'Daftar Kalori Makanan';
		$data['food'] = $this->data->data();
		$data['script'] = 'inNotes.js';
		$this->load->view('templates/_header', $data);
		$this->load->view('pages/calories_index');
		$this->load->view('templates/_footer');
	}

	

}
