<?php 
class Pavacar extends CI_Controller {
	
	public function index()	{
		
		$data['main_content'] = 'index';
		$this->load->view('layouts/main',$data);
	}
	
	public function company() {
		
		//Load View
		$data['main_content'] = 'company';
		$this->load->view('layouts/main',$data);
	}
	
	public function contact() {
		
		//Load View
		$data['main_content'] = 'contact';
		$this->load->view('layouts/main',$data);
	}
	
}