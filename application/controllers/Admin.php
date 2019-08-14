<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
			$this->load->model('m_admin');
    		$this->load->database();
	}
	function json(){
		$data = $this->db->get("tbl_konsumens")->result();
	    echo json_encode($data);
	}
	function index(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('dashboard');
		$this->load->view('layouts/footer');
	}
	function konsumen(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('konsumen');
		
		$this->load->view('layouts/footer');
	}
	function konsumen_store(){
		$dis = $this->input->post('konsumen_telepon');
		$sql = $this->db->query("SELECT * FROM tbl_konsumens WHERE konsumen_telepon='$dis'");
	      $count = $sql->num_rows();
	      if ($count > 0) {
	      	$this->session->set_flashdata('pg-1', 'This is test message');
	      	redirect('admin/konsumen');
	      }else{
	      	$nama = $this->input->post('konsumen_nama');
	      	$telepon = $this->input->post('konsumen_telepon');
	      	$alamat = $this->input->post('konsumen_alamat');
	      	$reg = date('Y-m-d H:i:s');
	      	$data = array(
	      		'konsumen_nama' => $nama , 
	      		'konsumen_telepon' => $telepon , 
	      		'konsumen_reg' => $reg , 
	      		'konsumen_alamat' => $alamat 
	      	);
	      	$this->m_admin->konsumen_store($data,'tbl_konsumens');
        	redirect(base_url('admin/konsumen'));
	      }
		//
	}
	function konsumen_edit($id){
		$where = array('konsumen_id' => $id);
		$data['konsumen'] = $this->m_admin->konsumen_edit($where,'tbl_konsumens')->result();
	}
}