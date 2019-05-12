<?php
	include_once('Controller/connect.php');
	class loginModel extends connect{
		private $con;
		public function __construct(){
			$this->con = $this->connect();
		}
		public function loginAdmin($data){
			$email = $data["email"];
			$password = $data["password"];
			$sql = "SELECT * FROM admin WHERE email='$email'";
			$query = mysqli_query($this->con,$sql);
			return $query;
		}
		public function loginCustomer($data){
			$email = $data["email"];
			$password = $data["password"];
			$sql = "SELECT * FROM customer WHERE email='$email'";
			$query = mysqli_query($this->con,$sql);
			return $query;
		}
		public function loginKaryawan($data){
			$email = $data["email"];
			$password = $data["password"];
			$sql = "SELECT * FROM karyawan WHERE email='$email'";
			$query = mysqli_query($this->con,$sql);
			return $query;
		}
		public function signup($data){
			$email = $data["email"];
			$password = $data["password"];
			$username = $data["username"];
			$first_name = $data["first_name"];
			$last_name = $data["last_name"];
			$telp = $data["telp"];
			$alamat = $data["alamat"];
			$gender = $data["gender"];
			$sql = "INSERT INTO customer VALUES (null,'$username','$password','$first_name','$last_name','$email','$gender','$telp','$alamat')";
			$query = mysqli_query($this->con,$sql);
			return $query;
		}
		public function cekEmail($data){
			$sql = "SELECT * FROM customer WHERE email='$data'";
			$cek = mysqli_query($this->con,$sql);
			return $cek;
		}
		public function cekUsername($data){
			$sql = "SELECT * FROM customer WHERE username='$data'";
			$cek = mysqli_query($this->con,$sql);
			return $cek;
		}
		public function isLogin($data1, $data2){
			$sql = "SELECT * FROM ".$data1." WHERE email='$data2'";
			$isLogin = mysqli_query($this->con,$sql);
			return $isLogin;
		}
		public function cekLogin($data1, $data2){
			$sql = "SELECT email FROM $data1 WHERE email='$data2'";
			$cekLogin = mysqli_query($this->con,$sql);
			return $cekLogin;
		}
	}
?>