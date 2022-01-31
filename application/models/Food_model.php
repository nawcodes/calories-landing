<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Food_model extends CI_Model
{
	public function data() {
		$data = [
			[
				'nama' => 'Jagung rebus',
				'berat ' => 63,
				'kalori' => 90.2,
				'unit' => 1,
			],
			[
				'nama' => 'Kentang rebus',
				'berat ' => 200,
				'kalori' => 166,
				'unit' => 2,
			],
		];

		return json_encode($data);
	}

}
?>
