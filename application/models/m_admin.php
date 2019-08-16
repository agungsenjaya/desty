<?php
/**
 * 
 */
class M_admin extends CI_Model
{
	function konsumen_store($data,$table){
		$this->db->insert($table,$data);
	}
	function konsumen_edit($where, $table){
		return $this->db->get_where($table,$where);
	}
	function konsumen_update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function konsumen_delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	// Produk
	function produk_store($data,$table){
		$this->db->insert($table,$data);
	}
	function produk_edit($where, $table){
		return $this->db->get_where($table,$where);
	}
	function produk_update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function produk_delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	// Order
	function order_store($data,$table){
		$this->db->insert($table,$data);
	}
	function order_edit($where, $table){
		return $this->db->get_where($table,$where);
	}
}