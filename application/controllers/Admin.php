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
			$this->load->library('pdf');
    		$this->load->database();
	}
	function laporan(){
		$this->pdf->setPaper('A4', 'landscape');
	    $this->pdf->filename = "laporan-orders.pdf";
	    $this->pdf->load_view('table_report');
	}
	function json_konsumen(){
		$data = $this->db->get("tbl_konsumens")->result();
	    echo json_encode($data);
	}
	function json_produk(){
		$data = $this->db->get("tbl_produks")->result();
	    echo json_encode($data);
	}
	function index(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('dashboard');
		$this->load->view('layouts/footer');
	}
	// Konsumen
	function konsumen(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('flash');
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
	}
	function konsumen_edit($id){
		$where = array('konsumen_id' => $id);
		$data['konsumen'] = $this->m_admin->konsumen_edit($where,'tbl_konsumens')->result();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('konsumen_edit', $data);
		$this->load->view('layouts/footer');
	}
	function konsumen_update(){
		$id = $this->input->post('konsumen_id');
		$nama = $this->input->post('konsumen_nama');
		$telepon = $this->input->post('konsumen_telepon');
		$alamat = $this->input->post('konsumen_alamat');
		$data = array(
	      'konsumen_nama' => $nama,
	      'konsumen_telepon' => $telepon,
	      'konsumen_alamat' => $alamat,
	    );
	    $where = array(
	        'konsumen_id' => $id
	      );
	    $this->m_admin->konsumen_update($where,$data,'tbl_konsumens');
	    redirect(base_url('admin/konsumen'));
	}
	function konsumen_delete($id){
		$where = array('konsumen_id' => $id);
		$this->m_admin->konsumen_delete($where,'tbl_konsumens');
		$this->session->set_flashdata('pg-3', 'This is test message');
		redirect(base_url('admin/konsumen'));
	}
	// Produk
	function produk(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('flash');
		$this->load->view('produk');
		$this->load->view('layouts/footer');
	}
	function produk_store(){
		$dis = $this->input->post('produk_nama');
		$sql = $this->db->query("SELECT * FROM tbl_produks WHERE produk_nama='$dis'");
	      $count = $sql->num_rows();
	      if ($count > 0) {
	      	$this->session->set_flashdata('pg-4', 'This is test message');
	      	redirect('admin/produk');
	      }else{
	      	$nama = $this->input->post('produk_nama');
	      	$uk = $this->input->post('produk_uk');
	      	$ds = $this->input->post('produk_ds');
	      	$wr = $this->input->post('produk_wr');
	      	$data = array(
	      		'produk_nama' => $nama , 
	      		'produk_uk' => $uk , 
	      		'produk_ds' => $ds , 
	      		'produk_wr' => $wr , 
	      	);
	      	$this->m_admin->produk_store($data,'tbl_produks');
        	redirect(base_url('admin/produk'));
	      }
	}
	function produk_edit($id){
		$where = array('produk_id' => $id);
		$data['produk'] = $this->m_admin->produk_edit($where,'tbl_produks')->result();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('produk_edit', $data);
		$this->load->view('layouts/footer');
	}
	function produk_update(){
		$id = $this->input->post('produk_id');
		$nama = $this->input->post('produk_nama');
		$uk = $this->input->post('produk_uk');
		$ds = $this->input->post('produk_ds');
		$wr = $this->input->post('produk_wr');
		$data = array(
	      'produk_nama' => $nama,
	      'produk_ds' => $ds,
	      'produk_wr' => $wr,
	      'produk_uk' => $uk
	    );
	    $where = array(
	        'produk_id' => $id
	      );
	    $this->m_admin->produk_update($where,$data,'tbl_produks');
	    redirect(base_url('admin/produk'));
	}
	function produk_delete($id){
		$where = array('produk_id' => $id);
		$this->m_admin->produk_delete($where,'tbl_produks');
		$this->session->set_flashdata('pg-5', 'This is test message');
		redirect(base_url('admin/produk'));
	}
	// Orders
	function orders(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('flash');
		$this->load->view('orders');
		$this->load->view('layouts/footer');
	}
	function orders_store(){
	  	$ksm = $this->input->post('konsumen_id');
	  	$prd = $this->input->post('produk_id');
	  	$hsl = $this->input->post('order_hasil');
	  	$reg = date('Y-m-d H:i:s');
	  	$uk = $this->input->post('order_uk');
	  	$ds = $this->input->post('order_ds');
	  	$wr = $this->input->post('order_wr');
	  	$or_wr = $this->input->post('or_wr');
	  	$or_uk = $this->input->post('or_uk');
	  	$or_ds = $this->input->post('or_ds');
	  	$data = array(
	  		'konsumen_id' => $ksm, 
	  		'produk_id' => $prd, 
	  		'order_reg' => $reg, 
	  		'order_hasil' => $hsl , 
	  		'order_uk' => $uk , 
	  		'order_ds' => $ds , 
	  		'order_wr' => $wr , 
	  		'or_wr' => $or_wr, 
	  		'or_uk' => $or_uk, 
	  		'or_ds' => $or_ds, 
	  	);
	  	$this->m_admin->order_store($data,'tbl_orders');
		redirect(base_url('admin/orders'));
	}
	function orders_edit($id){
		$where = array('order_id' => $id);
		$data['orders'] = $this->m_admin->order_edit($where,'tbl_orders')->result();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('orders_edit', $data);
		$this->load->view('layouts/footer');
	}
	// Hasil
	function hasil(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('hasil');
		$this->load->view('layouts/footer');
	}
}