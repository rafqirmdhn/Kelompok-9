<?php
	$con = mysqli_connect('localhost','root','','db_tiketpesawat');
	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>