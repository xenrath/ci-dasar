<?php 
	
	class Buku_m extends CI_Model
	{
		
		public function get($id = null)
		{
			// $query = $this->db->query("SELECT * FROM tb_buku");
			$this->db->select('*');
			$this->db->from('tb_buku');
			if ($id != null) {
				$this->db->where('id_buku', $id);
			}
			$query = $this->db->get();
			return $query;
		}

		public function add($data)
		{
			$param = array(
				'judul' => $data['judul'],
				'pengarang' => $data['pengarang'],
				'tahun_terbit' => $data['tahun'],
			);
			$this->db->insert('tb_buku', $param);
		}

	}

 ?>