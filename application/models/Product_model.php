<?php 
class Product_model extends CI_Model {
	function list_product(){
		$product = $this->db->query('select * from m_item');
		return $product;
	}

	function save($array)
	{
		$this->db->insert('m_item',$array);
	}
	function update($id,$array_item)
	{
		$this->db->where('id_item',$id);
		$this->db->update('m_item',$array_item);
	}
	function delete($id)
	{
		$this->db->where('id_item',$id);
		$this->db->delete('m_item');
	}
}
?>