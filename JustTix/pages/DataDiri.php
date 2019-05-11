<?php
	include_once("Controller/pageController.php");
	include_once("Controller/loginController.php");
	$login = new loginController();
	$login->cekLogin($_SESSION['email']);
	$DataDiri = new pageController();
	if(isset($_SESSION['username'])){
		$DataDiri->dataDiri($_SESSION['username']);
	}
	else{
		$DataDiri->dataDiri("");
	}
	
?>