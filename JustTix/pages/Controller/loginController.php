<?php
	class loginController{
		public function login(){
			include('connect.php');
			if(isset($_POST["submit"])){
				$email = $_POST["email"];
				$password = $_POST["password"];

				$email = mysqli_real_escape_string($con,$email);
				$password = mysqli_real_escape_string($con,$password);

				$query = mysqli_query($con,"SELECT * FROM admin WHERE email='$email'");
				if(mysqli_num_rows($query)>0){
					$row = mysqli_fetch_array($query);
					$db_email = $row["email"];
					$db_password = $row["pass_admin"];
					$db_username = $row["user_admin"];
					$db_username = mysqli_real_escape_string($con,$db_username);

					if($email == $db_email && $password == $db_password){
						session_start();
						$_SESSION["email"] = $db_email;
						$_SESSION["username"] = $db_username;
						$_SESSION["password"] = $db_password;
						header("Location:../TEMPLATE-admin.php");
					}
					else{
						header("Location:../login2.php");
					}
				}
				else{
					$query2 = mysqli_query($con,"SELECT * FROM customer WHERE email='$email'");
					if(mysqli_num_rows($query2)>0){
						$row = mysqli_fetch_array($query2);
						$db_email = $row["email"];
						$db_password = $row["password"];
						$db_username = $row["username"];
						$db_username = mysqli_real_escape_string($con,$db_username);

						if($email == $db_email && $password == $db_password){
							session_start();
							$_SESSION["email"] = $db_email;
							$_SESSION["email"] = $db_email;
							$_SESSION["email"] = $db_email;
							header("Location:../TEMPLATE-user.php");
						}
						else{
							header("Location:../login2.php");
						}
					}
					else{
						header("Location:../login2.php");
					}
				}
				if(!isset($_SESSION)){
					header("Location:../login2.php");
				}
			}
		}

		public function signup(){
			include('connect.php');
			if(isset($_POST["submit"])){
				$email = $_POST["email"];
				$password = $_POST["password"];
				$repass = $_POST["repass"];
				$username = $_POST["username"];
				$first_name = $_POST["first_name"];
				$last_name = $_POST["last_name"];
				$gender = $_POST["gender"];
				$telp = $_POST["no_telp"];
				$alamat = $_POST["alamat"];

				$email = mysqli_real_escape_string($con,$email);
				$password = mysqli_real_escape_string($con,$password);

				$cek = mysqli_query($con,"SELECT * FROM customer WHERE email='$email'");
				if(mysqli_num_rows($cek)!=0){
					header("Location:../signup-fail.php");
				}
				else{
					if($password == $repass){
						$query = mysqli_query($con,"INSERT INTO customer VALUES (null,'$username','$password','$first_name','$last_name','$email','$gender','$no_telp','$alamat')");
						if($query){
							$_SESSION["username"]=$username;
							$_SESSION["user_type"]='customer';
							header("Location:../TEMPLATE-user.php");
						}
					}
					else{
						header("Location:../signup-fail.php");
					}
				}
			}
		}
		
		public function isLogin(){
			include('connect.php');
			$email = $_SESSION["email"];
			if(isset($email)){
				$query = mysqli_query($con,"SELECT * FROM admin WHERE email_admin='$email'");
				if(mysqli_num_rows($query)>0){
					header("Location:TEMPLATE-admin.php");
				}
				else{
					$query = mysqli_query($con,"SELECT * FROM customer WHERE email='$email'");
					if(mysqli_num_rows($query)>0){
						header("Location:TEMPLATE-user.php");
					}
				}
			}
		}

	}
?>