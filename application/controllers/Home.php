<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{

		$this->db->select('data_pengirim.nama_pengirim, data_barang.nama_penerima, data_barang.nama_barang, data_barang.alamat');
		$this->db->from('data_barang');
		$this->db->join('data_pengirim', 'data_barang.id_barang = data_pengirim.id_jasapengiriman', 'inner');
		$query = $this->db->get();

		$data["databarang"] = $query->result_array();


		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}