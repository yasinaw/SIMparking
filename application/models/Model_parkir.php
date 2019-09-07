<?php
	Class Model_parkir extends CI_Model{

		function getData($table) {
 			$query = $this->db->get($table);
 			return $query->result();
 		}

 		function getDataWhere($table, $column, $where) {
 			$this->db->where($column, $where);
 			$query = $this->db->get($table);
 			return $query->result();
 		}
        
        function getBerdasarkanWarna() {
            $this->db->select("plat_no, warna");
            $this->db->from("data_mobil");
            $this->db->join('data_warna', 'data_mobil.warna_mobil = data_warna.id_warna');
            $this->db->group_by("plat_no");
 			$query = $this->db->get();
 			return $query->result();
 		}
        
        function getDataMobil($table, $column, $where) {
 			$this->db->where($column, $where);
            $this->db->where('status', 0);
 			$query = $this->db->get($table);
 			return $query->result();
 		}
        
        function getDataWhere2($table, $column, $where, $column2, $type) {
 			$this->db->where($column, $where);
            $this->db->order_by($column2, $type);
 			$query = $this->db->get($table);
 			return $query->result();
 		}

 		function addData($table, $data) {
 			$this->db->insert($table, $data);  
 		}

 		function deleteData($table, $column, $where){
			 $this->db->where_in($column, $where);
			 $this->db->delete($table);
		}

		function updateData($table, $column, $where, $data){
		    $this->db->where($column, $where);
		    return $this->db->update($table, $data);
		}
        
		function cek_login($table,$where){		
			return $this->db->get_where($table,$where);
		}
        
        public function total_jam($plat){

		$hasil = $this->db->query("SELECT tipe_mobil, parking_lot, jam_masuk, jam_keluar, TIME_FORMAT(TIMEDIFF(jam_keluar, jam_masuk), '%H') AS TotalJam FROM data_mobil WHERE id=$plat");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		  }
		else {
			return array();
		  }
	    }
        
        public function statistik_tipe($status){

		$hasil = $this->db->query("SELECT b.tipe AS kategori, COUNT(a.id) AS jumlah FROM data_mobil a JOIN data_tipe b ON a.tipe_mobil = b.id_tipe WHERE a.status = $status GROUP BY a.tipe_mobil");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		  }
		else {
			return array();
		  }
	    }
        
	}
?>

