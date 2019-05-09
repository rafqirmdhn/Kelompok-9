<?php
	include_once('Controller/pageController.php');
	include_once('Controller/loginController.php');
	$login = new loginController();
	$login->cekLogin($_SESSION['email']);
	$user = new pageController();
	if(isset($_SESSION['username'])){
		$user->user($_SESSION['username']);
	}
	else{
		$user->user("");
	}
?>