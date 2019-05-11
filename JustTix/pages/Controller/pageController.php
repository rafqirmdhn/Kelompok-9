<?php 
	class pageController{
		public function user($username){
			include ('View/v_head.php');
			if($username == ''){
				include('View/v_header.php');
			}
			else{
				include ('View/v_headerUser.php');
			}
			include('View/v_templateUser.php');
		}
		public function dataDiri($username){
			include("View/v_head.php");
			include("View/v_headerUser.php");
			include("View/v_DataDiri.php");
		}
		public function tiket($username){
			include("View/v_head.php");
			include("View/v_headerUser.php");
			include("View/v_tiket.php");
		}
		public function pembayaran($username){
			include ("view/v_head.php");
			include ("view/v_headerUser.php");
			include ("view/v_pembayaran.php");
		}

	}
	
?>