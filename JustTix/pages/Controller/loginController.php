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

					if($dataLogin["email"] == $db_email && $dataLogin["password"] == $db_password){
						session_start();
						$_SESSION["email"] = $db_email;
						$_SESSION["username"] = $db_username;
						$_SESSION["password"] = $db_password;
						header("Location:admin.php");
					}
					else{
						echo '<p> Email/Password salah </p>';
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
							echo '<p> Email/Password salah </p>';
						}
					}
					else{
						$query3 = $login->loginKaryawan($dataLogin);
						if(mysqli_num_rows($query3)>0){
							$row = mysqli_fetch_array($query3);
							$db_email = $row["email"];
							$db_password = $row["pass_karyawan"];
							$db_username = $row["user_karyawan"];

							if($dataLogin['email'] == $db_email && $dataLogin['password'] == $db_password){
								session_start();
								$_SESSION["email"] = $db_email;
								$_SESSION["password"] = $db_password;
								$_SESSION["username"] = $db_username;
								header("Location:maskapai.php");
							}
						}
						else{
							echo '<p> Email/Password salah </p>';
						}
					}
				}
				if(!isset($_SESSION)){
					echo '<p> Email/Password salah </p>';
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
				if(!filter_var($dataSignIn['email'],FILTER_VALIDATE_EMAIL)){
					echo '<p> format email salah </p>';
				}
				else if (preg_match('/[^A-Za-z0-9]/i', $dataSignIn['username'])==true){
				//if(!ctype_alnum($dataSignIn['username'])){
					echo '<p> Username tidak boleh ada simbol </p>';
				}
				else{
					$login = new loginModel();
					$cekEmail = $login->cekEmail($dataSignIn['email']);
					$cekUsername = $login->cekUsername($dataSignIn['username']);
					if($dataSignIn['password'] != $dataSignIn['repass']){
						header("location:Registrasi2.php");
					}
					else{
						if(mysqli_num_rows($cekEmail)>0 || mysqli_num_rows($cekUsername)>0){
							echo '<p> Email/Username sudah dipakai </p>';
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
					'gender' => $_POST["gender"],
				);
				if(strpos($dataDaftar['first_name'],' ')==true || strpos($dataDaftar['last_name'],' ')==true){
					echo '<p>First name/Last name hanya boleh 1 kata</p>';
				}
				else if(!ctype_alpha($dataDaftar['first_name']) || !ctype_alpha($dataDaftar['last_name'])){
					echo '<p>First name/Last name hanya diisi huruf';
				}
				else if(!ctype_digit($dataDaftar['first_name'])){
					echo'<p> No telepon harus angka </p>';
				}
				else{
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
		}
		
		public function isLogin(){
			session_start();
			#$email = $_SESSION["email"];
			if(isset($_SESSION["email"])){
				$login = new loginModel();
				$query = $login->isLogin('admin',$_SESSION["email"]);
				if(mysqli_num_rows($query)>0){
					header("Location:admin.php");
				}
				else{
					$query = $login->isLogin('customer',$_SESSION["email"]);
					if(mysqli_num_rows($query)>0){
						header("Location:templateUser.php");
					}
					else{
						$query = $login->isLogin('karyawan',$_SESSION["email"]);
						if(mysqli_num_rows($query)>0){
							header("Location:maskapai.php");
						}
					}
				}
			}
		}
		
		public function cekLoginCustomer($email){
			if(!isset($_SESSION)){
				session_start();
			}
			$login = new loginModel();
			$query = $login->isLogin('admin',$email);
			if(mysqli_num_rows($query)>0){
				header('Location:admin.php');
				exit;
			}
			else{
				$query = $login->isLogin('karyawan',$email);
				if(mysqli_num_rows($query)>0){
					header('Location:maskapai.php');
					exit;
				}
			}
		}
		public function cekLoginAdmin($email){
			if(!isset($_SESSION)){
				session_start();
			}
			$login = new loginModel();
			$query = $login->isLogin('customer',$email);
			if(mysqli_num_rows($query)>0){
				header("Location:templateUser.php");
				exit;
			}
			else{
				$query = $login->isLogin('karyawan',$email);
				if(mysqli_num_rows($query)>0){
					header('Location:maskapai.php');
					exit;
				}
			}
			if($_SESSION==NULL){
				session_destroy();
				header('Location:templateUser.php');
				exit;
			}
		}
		public function cekLoginMaskapai($email){
			if(!isset($_SESSION)){
				session_start();
			}
			$login = new loginModel();
			$query = $login->isLogin('customer',$email);
			if(mysqli_num_rows($query)>0){
				header("Location:templateUser.php");
				exit;
			}
			else{
				$query = $login->isLogin('admin',$email);
				if(mysqli_num_rows($query)>0){
					header('Location:admin.php');
					exit;
				}
			}
			if($_SESSION==NULL){
				session_destroy();
				header('Location:templateUser.php');
				exit;
			}
		}
		
		public function logout(){
			session_start();
			session_destroy();
			header("Location:templateUser.php");
			
		}

	}
?>