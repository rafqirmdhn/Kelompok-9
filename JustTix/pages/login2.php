<?php
	include_once('Controller/loginController.php');
	$isLogin = new loginController();
	$isLogin->isLogin();
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>
		Log In
	</title>
	<!-- Login CSS -->
	<link href="../css/login2.css" rel="stylesheet">
	
</head>
<body>
	<div class="loginbox">
		<img src="../Gambar/icon-login2.png" class="avatar">
		<h1>Log In</h1>
		<form action='' method='post'>
			<?php
				include_once('Controller/loginController.php');
				$login = new loginController();
				$login->login();
			?>
			<p>Email</p>
			<input type="email" name="email" placeholder="Email" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" name="submit" value="Login">
			<a href="#" >Forget Password?</a><br>
			<a href="Registrasi2.php">Don't have an account?</a>
		</form>
	</div>
	<div>
	</div>
</body>
</html>