<?php
	include_once('../Controller/connect.php');
	class dataDiriModel extends connect{
		private $con;
		public function __construct(){
			$this->con = $this->connect();
		}

		public function inputdataDiri($data){
			$sql = "INSERT INTO customer_memesan_tiket VALUES('".$data['email']."','".$data['nomor_telpon']."','".$data['tanggal_lahir']."','".$data['id_customer']."','".$data['kode_tiket']."','".$data['kode_pesan']."','".$data['kode_maskapai']."','".$data['nama_pemesan']."','".$data['no_identitas']."','".$data['tanggal_penerbangan']."','".$data['waktu_terbang']."','".$data['tanggal_tiba']."'"
			$result = mysqli_query($this->con,$sql);
			return $result;
		}
	}
?>