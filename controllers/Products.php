<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	
	public function index() {
		
		if($this->input->get('limit')) {
			$limit = $this->input->get('limit');
		} else {
			$limit = 12;
		}
		
		//Get products	
		$data['limitValues'] = array(12, 50, 100);
		$data['products'] = $this->Product_model->display_products($limit);
		$data['title'] = 'ΑΝΤΑΛΛΑΚΤΙΚΑ';
		$data['url'] = 'products';
		
		//Load View
		$data['main_content'] = 'products';
		$this->load->view('layouts/main',$data);
	}
	
	public function details($id) {
		
		//Get products
		$data['product'] = $this->Product_model->display_product_by_id($id);
		
		//Load View
		$data['main_content'] = 'details';
		$this->load->view('layouts/main',$data);
	}
	
	public function category($subcategory_id) {
		
		if($this->input->get('limit')) {
			$limit = $this->input->get('limit');
		} else {
			$limit = 12;
		}
		
		//Get products
		$data['limitValues'] = array(12, 50, 100);
		$data['products'] = $this->Product_model->display_products_by_category($subcategory_id, $limit);
		$data['title'] = $this->Product_model->get_category_title($subcategory_id)->name;
		$data['url'] = 'products/category/' . $subcategory_id;
		
		//Load View
		$data['main_content'] = 'products';
		$this->load->view('layouts/main',$data);
	}
	
}