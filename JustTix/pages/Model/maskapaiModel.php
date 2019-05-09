<?php
	include_once('../Controller/connect.php');
	class maskapaiModel extends connect{
		private $con;
		public function __construct(){
			$this->con = $this->connect();
		}

		public function selectTabelRekap(){
			$sql = "SELECT * FROM customer_memesan_tiket 
					JOIN tiket USING (kode_tiket)
					JOIN maskapai ON (customer_memesan_tiket.kode_maskapai = maskapai.kode_maskapai)";
			$result = mysqli_query($this->con,$sql);
			#$data = mysqli_fetch_array($result);
			return $result;
		}
		
		public function inputPesawat($data){
			$sql = "INSERT INTO pesawat VALUES('".$data['kode_pesawat']."','".$data['nama_pesawat']."','".$data['jenis_pesawat']."')";
			$result = mysqli_query($this->con,$sql);
			return $result;
		}
	}
?>