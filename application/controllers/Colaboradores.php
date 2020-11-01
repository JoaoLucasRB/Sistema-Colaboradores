<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Colaboradores extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ColaboradoresModel');
	}

	public function index()
	{
		$param = array(
			'view' => 'colaboradores/index.php',
			'js' => 'colaboradores/js/index.php',
			'css' => 'colaboradores/css/index.php'
		);
		$this->load->view('themes/TemaPadrao/index.php', $param);
	}

	public function getColaboradores($filters = array(), $array = false)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST' && empty($filters))
			$filters = $this->input->post();
		$result = $this->ColaboradoresModel->getColaboradores($filters);
		if ($array)
			return $result;
		$this->load->view('json', array('dataSource' => $result));
	}

	public function remove($id, $array = false)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST' && empty($filters))
			$filters = $this->input->post();
		$result = $this->ColaboradoresModel->remove($id);
		if ($array)
			return $result;
		$this->load->view('json', array('dataSource' => $result));
	}

	public function save($data = array(), $array = false)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST' && empty($data))
			$data = $this->input->post();
		$result = $this->ColaboradoresModel->save($data);
		if ($array)
			return $result;
		$this->load->view('json', array('dataSource' => $result));
	}

	public function importCSV($data = array(), $array = false)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST' && empty($data))
			$data = $this->input->post();
		$result = $this->ColaboradoresModel->importCSV($data);
	}
}
