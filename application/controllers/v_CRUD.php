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
		$KODE_BARANG = $this->input->post('KODE_BARANG');
		$NAMA_BARANG = $this->input->post('NAMA_BARANG');
		$JUMLAH_PESANAN = $this->input->post('JUMLAH_PESANAN');
 
		$data = array(
			'KODE_BARANG' => $KODE_BARANG,
			'NAMA_BARANG' => $NAMA_BARANG,
			'JUMLAH_PESANAN' => $JUMLAH_PESANAN
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
 
}
}
