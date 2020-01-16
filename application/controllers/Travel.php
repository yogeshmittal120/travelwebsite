<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/index');
		$this->load->view('travels/layout/footer');
	}
	public function about()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/about');
		$this->load->view('travels/layout/footer');
	}
	public function contact()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/contact');
		$this->load->view('travels/layout/footer');
	}
	public function blog()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/blog');
		$this->load->view('travels/layout/footer');
	}
	public function tours()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/tours');
		$this->load->view('travels/layout/footer');
	}
	public function hotels()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/hotels');
		$this->load->view('travels/layout/footer');
	}
	public function services()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/services');
		$this->load->view('travels/layout/footer');
	}

	public function card()
	{
		// $this->load->view('travels/layout/header');
		$this->load->view('travels/activity/card');
		// $this->load->view('travels/layout/footer');
	}
}
