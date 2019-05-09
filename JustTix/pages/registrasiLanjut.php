<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>
		Sign In
	</title>
	<!-- Login CSS -->
	<link href="../css/login2.css" rel="stylesheet">
	
</head>
<body>
	<div class="loginbox">
		<img src="../Gambar/icon-login2.png" class="avatar">
		<h1>Sign In</h1>
		<form action="#" method='post'>
			<p>First Name</p>
			<input type="text" name="first-name" placeholder="First Name" required>
			<p>Last Name</p>
			<input type="text" name="last-name" placeholder="Last Name" required>
			<p>Alamat</p>
			<input type="text" name="alamat" placeholder="Alamat" required>
			<p>Nomor Telepon</p>
			<input type="text" name="notelp" placeholder="Nomor Telepon" required>
			<input type="submit" name="submit" value="Sign In">
		</form>
	</div>
	<div>
		<?php
			session_start();
			include_once('Controller/loginController.php');
			$login = new loginController();
			$login->signup($_SESSION['email'],$_SESSION['password'],$_SESSION['username']);
		?>
	</div>
</body>
</html>