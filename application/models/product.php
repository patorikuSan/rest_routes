<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function add_product($data){
		$this->db->insert("products", $data);
	}

	public function get_all_products(){
		$query = $this->db->query('SELECT * FROM products');
		return $query->result();
	}

	public function get_data_by_id($id){
		$query = $this->db->query('SELECT * FROM products WHERE `id` =' .$id);
		return $query->row();
	}

	public function update_product($id){
		$data = array(
			"name" => $this->input->post("name"),
			"description" => $this->input->post("desc"),
			"price" => $this->input->post("price")
		);
		$this->db->where('id', $id);
		$this->db->update("products", $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete("products");
	}
}