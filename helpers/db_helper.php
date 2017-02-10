<?php 
	/*
	 *	Get Categories
	*/
	function get_categories_h() {
		$CI = get_instance();
		$categories = $CI->Product_model->get_categories();
		return $categories;
	}
	
	/*
	 *	Get Subcategories
	*/
	function get_subcategories_h($category_id) {
		$CI = get_instance();
		$subcategories = $CI->Product_model->get_subcategories($category_id);
		return $subcategories;
	}
