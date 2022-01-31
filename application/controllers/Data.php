<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model', 'data');
	}
	

	public function index()
	{
		$model = $this->data->data();
		echo $model;
	}


	public function blood() {
		$model = $this->data->blood();
		echo $model;
	}

}

/* End of file Data.php */



?>
