<?php 
	class pageController{
		public function user($username){
			include ('View/v_head.php');
			include ('View/v_headerUser.php');
			include('View/v_templateUser.php');
		}
		public function dataDiri(){
			include("View/v_head.php");
			include("View/v_header.php");
			include("View/v_DataDiri.php");
		}
		public function tiket(){
			include("View/v_head.php");
			include("View/v_header.php");
			include("View/v_tiket.php");
		}
		public function pembayaran(){
			include ("view/v_head.php");
			include ("view/v_header.php");
			include ("view/v_pembayaran.php");
		}

	}
	
?>