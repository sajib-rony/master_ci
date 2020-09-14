<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['abc'] = '';
		$data['content'] = $this->load->view('index', $data, TRUE);
		$this->load->view('template/header', $data);
		$this->load->view('template/template_js');
	}

//form start
	public function general()
	{
		$data['abc'] = '';
		$data['content'] = $this->load->view('form/general', $data, TRUE);
		$this->load->view('template/header', $data);
		$this->load->view('template/template_js');
	}

	public function advanced()
	{
		$data['abc'] = '';
		$data['content'] = $this->load->view('form/advanced', $data, TRUE);
		$this->load->view('template/header', $data);
		$this->load->view('template/template_js');
	}

	public function editors()
	{
		$data['abc'] = '';
		$data['content'] = $this->load->view('form/editors', $data, TRUE);
		$this->load->view('template/header', $data);
		$this->load->view('template/template_js');
	}

	public function validation()
	{
		$data['abc'] = '';
		$data['content'] = $this->load->view('form/validation', $data, TRUE);
		$this->load->view('template/header', $data);
		$this->load->view('template/template_js');
	}
//form end
//table start
	public function table_simple()
	{
		$data['abc'] = '';
		$data['content'] = $this->load->view('table/simple', $data, TRUE);
		$this->load->view('template/header', $data);
		$this->load->view('template/template_js');
	}

	public function table_datatable()
	{
		$data['abc'] = '';
		$data['content'] = $this->load->view('table/datatable', $data, TRUE);
		$this->load->view('template/header', $data);
		$this->load->view('template/js_link_datatable');
	}
//	table end
}
