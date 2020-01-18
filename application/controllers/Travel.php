<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {
// public function __construct()
// {
// 	$this->load->model('CustomModel');
// }
	
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
		$data['tour'] = $this->CustomModel->get('tour', 'name');
		$data['place'] = $this->CustomModel->get('place');
		$data['testimonial'] = $this->CustomModel->get('testimonial');
		$data['activity'] = $this->CustomModel->selecLimit('tour',8);
		// print_r($data);die;
		$this->load->view('travels/layout/header');
		$this->load->view('travels/index',$data);
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
