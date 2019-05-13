<?php 
	class pageController{
		public function user(){
			session_start();
			include('View/v_head.php');
			if($_SESSION['email'] != null){
				include('View/v_headerUser.php');
			}
			else{
				include('View/v_header.php');
			}
			include('View/v_templateUser.php');
		}
		public function dataDiri(){
			session_start();
			include("View/v_head.php");
			include("View/v_headerUser.php");
			include("View/v_DataDiri.php");
		}
		public function dataDiriBerhasil(){
			session_start();
			include("View/v_head.php");
			include("View/v_headerUser.php");
			include("View/v_dataDiriBerhasil.php");
		}
		public function tiket(){
			session_start();
			include('View/v_head.php');
			if($_SESSION['email'] != null){
				include('View/v_headerUser.php');
			}
			else{
				include('View/v_header.php');
			}
			include("View/v_tiket.php");
		}
		public function pembayaran(){
			session_start();
			include ("View/v_head.php");
			include ("View/v_headerUser.php");
			include ("View/v_pembayaran.php");
		}
		public function admin(){
			include("View/v_head.php");
			include("View/v_headerAdmin.php");
			include("View/v_admin.php");
		}
		public function adminLihatRekap(){
			include("View/v_head.php");
			include("View/v_headerAdmin.php");
			include("View/v_laporan.php");
		}
		public function maskapai(){
			include ("View/v_head.php");
			include ("View/v_headerMaskapai.php");
			include ("View/v_homeMaskapai.php");
		}
		public function viewRekap(){
			include ('View/v_head.php');
			include ('View/v_headerMaskapai.php');
			include ('View/v_laporan.php');
		}
		public function viewInput(){
			include ('View/v_head.php');
			include ('View/v_headerMaskapai.php');
			include ('View/v_inputDataPenerbanganM.php');
		}
		public function viewInputBerhasil(){
			include ('View/v_head.php');
			include ('View/v_headerMaskapai.php');
			include ('View/v_inputPenerbanganBerhasilM.php');
		}

	}
	
?>