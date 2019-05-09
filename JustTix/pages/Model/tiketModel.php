<?php
	include_once('Controller/connect.php');
	class tiketModel extends connect{
		private $con;
		public function __construct(){
			$this->con = $this->connect();
		}
		public function selectTabelTiket($data){
			$asal = $data["asal"];
			$tujuan = $data["tujuan"];
			$kelas = $data["kelas"];
			$tanggal = $data["tanggal"];

			$sql = "SELECT kode_tiket, nama_maskapai, kelas, asal, tujuan, harga 
					FROM tiket 
					JOIN maskapai USING (kode_maskapai) 
					WHERE asal ='$asal' AND tujuan = '$tujuan' AND kelas = '$kelas' ";
			$result = mysqli_query($this->con,$sql);
			return $result;
		}
		public function selectTabelRekap(){
			if(isset($_POST["submit"])){
				$bulan = $_POST["bulan"];
				$sql = "SELECT * FROM customer_memesan_tiket 
						JOIN tiket USING (kode_tiket)
						JOIN maskapai ON (customer_memesan_tiket.kode_maskapai = maskapai.kode_maskapai)
						WHERE tgl_penerbangan like '%/$bulan/%'";
				$result = mysqli_query($this->con,$sql);
				#$data = mysqli_fetch_array($result);
				return $result;
			}
			$sql = "SELECT * FROM customer_memesan_tiket 
					JOIN tiket USING (kode_tiket)
					JOIN maskapai ON (customer_memesan_tiket.kode_maskapai = maskapai.kode_maskapai)";
			$result = mysqli_query($this->con,$sql);
			#$data = mysqli_fetch_array($result);
			return $result;
		}
		public function ambilData($data){
			$sql = "SELECT DISTINCT ".$data." FROM tiket";
			return mysqli_query($this->con,$sql);
		}
	}
?>