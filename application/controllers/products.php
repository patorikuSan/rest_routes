<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->Model("product");
	}

	public function index()
	{
		$data["result"] = $this->product->get_all_products();
		$this->load->view('products', $data);
		
	}

	public function new()
	{
		$this->load->view('new');
	}

	public function edit($id)
	{
		$data["row"] = $this->product->get_data_by_id($id);
		$this->load->view('edit', $data);
	}

	public function show($id)
	{
		$data["row"] = $this->product->get_data_by_id($id);
		$this->load->view('show', $data);
	}

	public function create()
	{
		$data = array(
			"name" => $this->input->post("name"),
			"description" => $this->input->post("description"),
			"price" => $this->input->post("price")
		);
		$this->product->add_product($data);
		redirect('/products');
	}

	public function destroy($id)
	{
		$this->product->delete($id);
		redirect('/products');
	}

	public function update($id)
	{
		$this->product->update_product($id);
		redirect('/products');
	}
}
