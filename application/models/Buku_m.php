<?php 
	
	class Buku_m extends CI_Model
	{
		
		public function get()
		{
			$query = $this->db->query("SELECT * FROM tb_buku");
			$this->db->select('*');
			$this->db->from('tb_buku');
			$query = $this->db->get();
			return $query;
		}
	}

 ?>