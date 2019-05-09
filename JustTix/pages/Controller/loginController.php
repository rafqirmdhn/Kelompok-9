<?php
	include_once('Model/loginModel.php');
	class loginController{
		public function login(){
			if(isset($_POST["submit"])){
				$dataLogin = array(
					'email' => $_POST['email'],
					'password' => $_POST['password'],
				);
				$login = new loginModel();
				$query = $login->loginAdmin($dataLogin);
				if(mysqli_num_rows($query)>0){
					$row = mysqli_fetch_array($query);
					$db_email = $row["email"];
					$db_password = $row["pass_admin"];
					$db_username = $row["user_admin"];

					if($email == $db_email && $password == $db_password){
						session_start();
						$_SESSION["email"] = $db_email;
						$_SESSION["username"] = $db_username;
						$_SESSION["password"] = $db_password;
						header("Location:templateAdmin.php");
					}
					else{
						header("Location:login2.php");
					}
				}
				else{
					$query2 = $login->loginCustomer($dataLogin);
					if(mysqli_num_rows($query2)>0){
						$row = mysqli_fetch_array($query2);
						$db_email = $row["email"];
						$db_password = $row["password"];
						$db_username = $row["username"];

						if($dataLogin['email'] == $db_email && $dataLogin['password'] == $db_password){
							session_start();
							$_SESSION["email"] = $db_email;
							$_SESSION["password"] = $db_password;
							$_SESSION["username"] = $db_username;
							header("Location:templateUser.php");
						}
						else{
							header("Location:login2.php");
						}
					}
					else{
						header("Location:login2.php");
					}
				}
				if(!isset($_SESSION)){
					header("Location:login2.php");
				}
			}
		}
		
		public function registrasiLanjut(){
			if(isset($_POST['submit'])){
				$dataSignIn = array(
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'repass' => $_POST['repass'],
					'username' => $_POST['username']
				);
				$login = new loginModel();
				$cekEmail = $login->cekEmail($dataSignIn['email']);
				$cekUsername = $login->cekUsername($dataSignIn['username']);
				if($dataSignIn['password'] != $dataSignIn['repass']){
					header("location:Registrasi2.php");
				}
				else{
					if(mysqli_num_rows($cekEmail)>0 && mysqli_num_rows($cekUsername)>0){
						header("location:registrasiGagal.php");
					}
					else{
						session_start();
						$_SESSION['email'] = $dataSignIn['email'];
						$_SESSION['password'] = $dataSignIn['password'];
						$_SESSION['username'] = $dataSignIn['username'];
						header("location:registrasiLanjut.php");
					}
				}
			}
		}
		
		public function signup($email,$password,$username){
			if(isset($_POST["submit"])){
				$dataDaftar = array(
					'email' => $email,
					'password' => $password,
					'username' => $username,
					'first_name' => $_POST["first-name"],
					'last_name' => $_POST["last-name"],
					'telp' => $_POST["notelp"],
					'alamat' => $_POST["alamat"],
				);
				$login = new loginModel();
				$query = $login->signup($dataDaftar);
				if($query){
					session_destroy();
					session_start();
					$_SESSION["username"]=$dataDaftar['username'];
					$_SESSION["user_type"]='customer';
					header("Location:templateUser.php");
				}
			}
		}
		
		public function isLogin(){
			session_start();
			#$email = $_SESSION["email"];
			if(isset($_SESSION["email"])){
				$login = new loginModel();
				$query = $login->isLogin('admin',$_SESSION["email"]);
				if(mysqli_num_rows($query)>0){
					header("Location:templateAdmin.php");
				}
				else{
					$query = $login->isLogin('customer',$_SESSION["email"]);
					if(mysqli_num_rows($query)>0){
						header("Location:templateUser.php");
					}
				}
			}
		}
		
		public function cekLogin($emailMasuk){
			if(!isset($_SESSION)){
				session_start();
			}
			#if(isset($_SESSION["email"])){
			if(isset($emailMasuk)){
				$login = new loginModel();
				$query = $login->isLogin('customer',$emailMasuk);
				if(mysqli_num_rows($query)>0){
					header("Location:templateUser.php");
				}
				/*
				else{
					$query = $login->isLogin('customer',$_SESSION['email']);
					if(mysqli_num_rows($query)>0){
						header('Location:templateUser.php');
					}
				}
				*/
			}
		}
		
		public function logout(){
			session_start();
			#$_SESSION['username'] = "";
			session_destroy();
			#echo 'berhasil'.$_SESSION['username'];
			header("Location:templateUser.php");
			
		}

	}
?>