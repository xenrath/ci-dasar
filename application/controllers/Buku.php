<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
		$this->load->model('buku_m');
		$query = $this->buku_m->get();
		$data['buku'] = $query->result();
		$this->load->view('buku_tampil', $data);
	}
}
