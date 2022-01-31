<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Food_model', 'food');
	}
	

	public function index()
	{
		$model = $this->food->data();
		echo $model;
	}

}

/* End of file Data.php */



?>
