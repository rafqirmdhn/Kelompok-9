<?php
	class DataDiriController{
		public function DataDiri(){
			include("View/v_head.php");
			include("View/v_header.php");
			include("View/v_DataDiri.php");
		}
			public function inputPesawat(){
		if(isset($_POST["submit"])){
			$data = array(
				'nama_pemesan' => $_POST['nama_pemesan'],
				'tanggal_lahir' => $_POST['tanggal_lahir'],
				'nomor_telpon' => $_POST['nomor_telpon'],
				'nomor_identitas' => $_POST['nomor_identitas'],
				'email' => $_POST['email'],
			);
			$DataDiri = new dataDiriModel());
			$query = $DataDiri->inputdataDiri($data);
		}
	}
	}
?>