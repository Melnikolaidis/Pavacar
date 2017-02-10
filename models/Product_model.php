<?php 
class Product_model extends CI_Model {
	
	public function get_categories() {
		
		$this->db->select('*');
		$this->db->from('categories');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_subcategories($category_id) {
		
		$this->db->select('*');
		$this->db->from('subcategories');
		$this->db->where('category_id',$category_id);
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function display_products($limit) {
		$this->db->select('*');
		$this->db->from('products');
		$this->db->order_by('title','ASC');
		$this->db->order_by('description1', 'ASC');
		$this->db->limit($limit);
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function display_product_by_id($id) {
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('brands', 'brands.brand_id = products.brand_id');
		$this->db->where('products.product_id',$id);
		
		$query = $this->db->get();
		return $query->row();
	}
	
	public function display_products_by_category($subcategory_id, $limit) {
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('subcategory_id',$subcategory_id);
		$this->db->limit($limit);
		$this->db->order_by('title','ASC');
		$this->db->order_by('description1', 'ASC');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_category_title($subcategory_id) {
		$this->db->select('*');
		$this->db->from('subcategories');
		$this->db->where('id',$subcategory_id);
		
		$query = $this->db->get();
		return $query->row();
	}
}