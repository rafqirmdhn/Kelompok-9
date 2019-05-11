<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>
		Sign Up
	</title>
	<!-- Login CSS -->
	<link href="../css/login2.css" rel="stylesheet">
	
</head>
<body>
	<div class="loginbox">
		<img src="../Gambar/icon-login2.png" class="avatar">
		<h1>Sign Up</h1>
		<form action="#" method='post'>
			<?php
				include_once('Controller/loginController.php');
				$login = new loginController();
				$login->registrasiLanjut();
			?>
			<p>Email</p>
			<input type="email" name="email" placeholder="Email" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Password" required>
			<p>Retype Password</p>
			<input type="password" name="repass" placeholder="Re-Password" required>
			<p>Username</p>
			<input type="text" name="username" placeholder="Username" required>
			<input type="submit" name="submit" value="Sign In">
			<a href="login2.php">Already have an account?</a>
		</form>
	</div>
	<div>
	</div>
</body>
</html>