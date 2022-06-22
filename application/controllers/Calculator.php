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



		$this->load->library('form_validation');

		$this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required');
		$this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
		$this->form_validation->set_rules('tinggi', 'Tinggi Badan', 'required');
		$this->form_validation->set_rules('berat', 'Berat Badan', 'required');
		$this->form_validation->set_rules('tingkatAktivitas', 'Berat Badan', 'required');
		$this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required');


		if(!$this->form_validation->run()) {
			$data['title'] = 'Hitung kalori';
			// $data['script'] = 'inCalculator.js';
			$this->load->view('templates/_header', $data);
			$this->load->view('pages/calculator_index');
			$this->load->view('templates/_footer');
			return;
		}

		$golDarah = $this->data->getWhereBlood($this->input->post('gol_darah'));

	
		$berat = $this->input->post('berat');
		$tinggi = $this->input->post('tinggi');
		$umur = $this->input->post('umur');
		$bmr = 0;


		if($umur == 0 || $berat == 0 || $tinggi == 0) {
			$this->session->set_flashdata('error', 'Mohon periksa inputan umur, berat badan, tinggi badan agar tidak bernilai 0');
			redirect(base_url('calculator'),'refresh');
		}

		if($this->input->post('jenis_kelamin') == 'laki_laki') {
			$bmr = 66 + (13.7 * $berat) + (5 * $tinggi) - (6.8 * $umur);
		} else {
			$bmr = 655 + (9.6 * $berat) + (1.8 * $tinggi) - (4.7 * $umur);
		}


		$result = $bmr * floatval($this->input->post('tingkatAktivitas'));
		
		$calc_sess = [
			'gender' => $this->input->post('jenis_kelamin'),
			'gol_darah_type' => $golDarah['type'],
			'gol_darah_note' => $golDarah['note'],
			'gol_darah_image' => $golDarah['image'],
			'umur' => $umur,
			'tinggi' => $tinggi,
			'berat' => $berat,
			'kalori' =>  $result,
		];


		$this->session->set_userdata('result_calc', $calc_sess);

		redirect(base_url('calculator/hasil'));

	}

	public function hasil() {
		if(!$this->session->userdata('result_calc')) {
			redirect(base_url('calculator'));
		}

		$data['title'] = 'Hasil Perhitungan';
		$data['script'] = 'inCalculator.js';
		$this->load->view('templates/_header', $data);
		$this->load->view('pages/calculator_hasil');
		$this->load->view('templates/_footer');
	}


}



?>
