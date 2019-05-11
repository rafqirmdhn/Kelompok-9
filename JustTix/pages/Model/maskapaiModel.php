<?php
	include_once('Controller/connect.php');
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
			$cek = "SELECT * FROM pesawat WHERE nama_pesawat = '".$data['nama_pesawat']."' AND jenis_pesawat = '".$data['jenis_pesawat']."' ";
			$hasil = mysqli_query($this->con, $cek);
			if (mysqli_num_rows($hasil) > 0) {
				echo '<i class="fa fa-exclamation-circle fa-2x" style = "color: red"></i> <br> Data sudah ada' ;
				
			}else{
				$sql = "INSERT INTO pesawat VALUES('".$data['kode_pesawat']."','".$data['nama_pesawat']."','".$data['jenis_pesawat']."')";
				$result = mysqli_query($this->con,$sql);
				echo '<i class="fa fa-check-circle fa-2x" style = "color: green"></i> <br> Anda telah berhasil memasukkan data Penerbangan' ;
				return $result;
			}

		}
	}
?>