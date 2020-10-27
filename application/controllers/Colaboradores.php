<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {
	public function index()
	{
		$param = array(
			'view' => 'colaboradores/index.php'
		);
		$this->load->view('themes/TemaPadrao/index.php', $param);
	}
}
