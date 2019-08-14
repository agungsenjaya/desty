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
}