<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$nama barang = $this->input->post('nama_barang');
		$jumlah barang = $this->input->post('jumlah_barang');
		$jumlah pesanan = $this->input->post('jumlah_pesanan');
 
		$data = array(
			('nama_barang') => $nama
            ('jumlah_barang') => $jumlah barang
            ('jumlah_pesanan') =>$jumlah pesanan
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
 
}