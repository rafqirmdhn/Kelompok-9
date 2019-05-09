<?php
	include_once("Controller/loginController.php");
	include_once("Controller/pageController.php");
	$login = new loginController();
	$login->cekLogin($_SESSION['email']);
	$tiket = new pageController();
	if(isset($_SESSION['username'])){
		$tiket->tiket($_SESSION['username']);
	}
	else{
		$tiket->tiket("");
	}
?>