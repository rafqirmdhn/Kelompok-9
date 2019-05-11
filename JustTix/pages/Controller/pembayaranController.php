<?php
	include_once('Model/DataDiriModel.php');
	
	class pembayaranController{
		public function edit($id){
		$data = mysql_query("select * from user where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
			}
		return $hasil;

		public function update($id,$nama,$alamat,$usia){
			mysql_query("update user set nama='$nama', alamat='$alamat', usia='$usia' where id='$id'");
		}

		
}

?>