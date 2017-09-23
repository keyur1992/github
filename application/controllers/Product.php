<?php
class Product extends  CI_Controller{
	public function index(){
		$this->load->model('product_model');
		$data['product_list'] = $this->product_model->list_product()->result();
		$data['title'] = "Product";
		$this->load->view('product_list',$data);
	}

	public function add()
	{
		$this->load->view('index.php/product_form');
	}
	public function save()
	{
		$array_item = array(
			'id_item' => $this->input->post('item_id'),
			'item_name' => $this->input->post('item_name'),
			'note' => $this->input->post('item_note'),
			'stock' => $this->input->post('item_stock'),
			'price' => $this->input->post('item_price'),
			'unit' => $this->input->post('item_unit')
			);
		$this->load->model('product_model');
		$this->product_model->save($array_item);
		redirect('index.php/product');
	}

	public function save_edit()
	{
		parent::__save_edit();
		$this->db = $this->load->database('default', true);
        $this->load->model('product_model','',TRUE);
		$id = $this->input->post('item_id');
		$array_item = array(
			'item_name' => $this->input->post('item_name'),
			'note' => $this->input->post('item_note'),
			'stock' => $this->input->post('item_stock'),
			'price' => $this->input->post('item_price'),
			'unit' => $this->input->post('item_unit')
			);
		$this->load->model('product_model');
		$this->product_model->update($id,$array_item);
		redirect('index.php/product');
	}
	public function edit(){
		$this->db = $this->load->database('default', true);
		$this->load->model('product_model');
		$data['product'] = $this->product_model->product($this->uri->segment(3))->row_array();
		$this->load->view('index.php/product_edit',$data);
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->load->model('product_model');
		$this->product_model->delete($id);
		redirect('index.php/product');
	}
}