<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Calculator extends CI_Controller
{

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model', 'data');
	}
	

	public function index() {
		$data['title'] = 'Hitung kalori';
		$data['script'] = 'inCalculator.js';
		$this->load->view('templates/_header', $data);
		$this->load->view('pages/calculator_index');
		$this->load->view('templates/_footer');
	}


}



?>
