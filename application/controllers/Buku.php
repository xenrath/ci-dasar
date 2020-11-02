<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('buku_m', 'buku'); 
	}

	public function index()
	{
		$query = $this->buku->get();
		$data = array(
				'header' => 'Tampil Data Buku',
				'buku' => $query->result(),
			);
		$this->load->view('header', $data);
		$this->load->view('buku_tampil');
		$this->load->view('footer');
	}

	function add()
	{
		$data = array(
				'header' => 'Tambah Data Buku'
			);
		$this->load->view('header', $data);
		$this->load->view('buku_tambah');
		$this->load->view('footer');
	}

	function edit($id = null)
	{
		$query = $this->buku->get($id);
		$data = array(
				'header' => 'Edit Data Buku',
				'buku' => $query->row()
			);
		$this->load->view('header', $data);
		$this->load->view('buku_edit');
		$this->load->view('footer');
	}

	function proses()
	{
		if (isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->buku->add($inputan);
		}else if (isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->buku->edit($inputan);
		}
		redirect('buku');
	}

	function del($id)
	{
		$this->buku->del($id);
		redirect('buku');
	}
}
