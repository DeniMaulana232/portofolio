<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('tamplate/header');
		$this->load->view('home');
		$this->load->view('tamplate/footer');
	}
	public function about()
	{
		$this->load->view('tamplate/header');
		$this->load->view('about');
		$this->load->view('tamplate/footer');

	}
	public function service()
	{
		$this->load->view('tamplate/header');
		$this->load->view('services');
		$this->load->view('tamplate/footer');
	}
	public function collection()
	{
		$this->load->view('tamplate/header');
		$this->load->view('collection');
		$this->load->view('tamplate/footer');
	
	}

}