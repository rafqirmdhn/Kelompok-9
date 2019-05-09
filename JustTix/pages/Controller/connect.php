<?php
	class connect{
		public function connect(){
			$connection = mysqli_connect('localhost','root','','db_justtix');
			return $connection;
		}
	}
?>