<?php
	include_once('Controller/connect.php');
	class tiketModel extends connect{
		private $con;
		public function __construct(){
			$this->con = $this->connect();
		}
		public function selectTabelTiket($data){
			$asal = $data["asal"];
			$tujuan = $data["tujuan"];
			$kelas = $data["kelas"];
			$tanggal = $data["tanggal"];

			$sql = "SELECT kode_tiket, nama_maskapai, kelas, asal, tujuan, harga 
					FROM tiket 
					JOIN maskapai USING (kode_maskapai) 
					WHERE asal ='$asal' AND tujuan = '$tujuan' AND kelas = '$kelas' ";
			$result = mysqli_query($this->con,$sql);
			return $result;
		}
		public function selectTabelRekap(){
			if(isset($_POST["submit"])){
				$bulan = $_POST["bulan"];
				$sql = "SELECT * FROM customer_memesan_tiket 
						JOIN tiket USING (kode_tiket)
						JOIN maskapai ON (customer_memesan_tiket.kode_maskapai = maskapai.kode_maskapai)
						WHERE tgl_penerbangan like '%/$bulan/%'";
				$result = mysqli_query($this->con,$sql);
				#$data = mysqli_fetch_array($result);
				return $result;
			}
			$sql = "SELECT * FROM customer_memesan_tiket 
					JOIN tiket USING (kode_tiket)
					JOIN maskapai ON (customer_memesan_tiket.kode_maskapai = maskapai.kode_maskapai)";
			$result = mysqli_query($this->con,$sql);
			#$data = mysqli_fetch_array($result);
			return $result;
		}
		public function ambilData($data){
			$sql = "SELECT DISTINCT ".$data." FROM tiket";
			return mysqli_query($this->con,$sql);
		}
		public function pembayaran($data,$id,$username){
			$sql1 = "SELECT id_customer FROM customer WHERE username='$username'";
			$sql2 = "SELECT kode_maskapai FROM tiket WHERE kode_tiket='$id'";
			$query1 = mysqli_query($this->con,$sql1);
			$query2 = mysqli_query($this->con,$sql2);
			$row1 = mysqli_fetch_assoc($query1);
			$row2 = mysqli_fetch_assoc($query2);
			$sql3 = "INSERT INTO customer_memesan_tiket VALUES ('".$row1['id_customer']."','$id',NULL,'".$row2['kode_maskapai']."','".$data['nama']."','".$data['ktp']."','".$data['telp']."','belum')";
			$query3 = mysqli_query($this->con,$sql3);
			return $query1;
		}
		public function tampilDataBayar($username){
			$sql = "SELECT * FROM customer_memesan_tiket JOIN customer USING (id_customer) JOIN tiket USING (kode_tiket) WHERE customer.username='$username'";
			$query = mysqli_query($this->con,$sql);
			return $query;
		}
		public function tampilTabelUpdate(){
			$sql = "SELECT kode_tiket, no_penerbangan, kelas, asal, tujuan, harga FROM tiket";
			$result = mysqli_query($this->con,$sql);
			return $result;
		}
		public function edit($data){
			$sql = "SELECT kode_tiket, no_penerbangan, kelas, asal, tujuan, harga FROM tiket where kode_tiket = $data";
			while($d = mysql_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		public function update($id)
			{
				mysql_query("update tiket set kode_tiket='$kode_tiket', no_penerbangan='$no_penerbangan', kelas='$kelas', asal=$asal, tujuan=$tujuan, harga=$harga where id='$kode_tiket'");
			}	

		public function edit2($data)
		{
			$query = "UPDATE tiket set
					no_penerbangan = no_penerbangan,
					kelas = kelas,
					asal = asal,
					tujuan = tujuan,
					harga = harga 
					where kode_tiket=kode_tiket";

			$this->db->query($query);
			$this->db->bind('no_penerbangan',$data['no_penerbangan']);
			$this->db->bind('kelas',$data['kelas']);
			$this->db->bind('asal',$data['asal']);
			$this->db->bind('tujuan',$data['tujuan']);
			$this->db->bind('harga',$data['harga']);
			$this->db->bind('kode_tiket',$data['kode_tiket']);

			$this->db->execute();

			return $this->db->rowCount();


		}
	}
?>