<?php
	include_once('Model/tiketModel.php');
	class tiketController{
		public function selectTabelTiket($data){
			$tiket = new tiketModel();
			return $tiket->selectTabelTiket($data);
		}
		public function printDataTiket($data,$result,$username){
			echo "	<b style='margin-left: 140px' style='font-size: 20px'> 
						Hasil Pencarian Penerbangan ".$data['asal']." ke ".$data['tujuan']."
					</b><br> ";
			if($username == ""){
				echo "<b style='margin-left: 140px' style='font-size: 20px'> 
						Silahkan Log In untuk memesan tiket!
					</b><br> ";
			}
			echo	"<form action = '' method = 'post'> 
						<table class = 'table table-striped table-bordered table-hover dataTable no-footer' style= 'text-align: center; margin-top: 20px'>
						<tr>
							<th>Maskapai</th>
							<th>Kelas</th>
							<th>Asal</th>
							<th>Tujuan</th>
							<th>Harga (Rupiah)</th>
						</tr>";

			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr> 
						<td style='display:none;'>".$row["kode_tiket"]."</td> 
						<td>".$row["nama_maskapai"]."</td>
						<td>".$row["kelas"]."</td>
						<td>".$row["asal"]."</td>
						<td>".$row["tujuan"]."</td>
						<td>".number_format($row["harga"])."</td>
						<td>";
					if($username!=""){
						echo "<a type='submit' name='pilih' class='btn btn-primary' href='DataDiri.php?id=".$row["kode_tiket"]."' readonly>
								Pilih
							</a>";
					}
				echo	"</td>
					</tr>";				
			}
			echo "		</table>
					</form>";
		}
		public function tampilDataTiket($username){
			if(isset($_POST["submit"])){
				$dataTiketMuncul = array(
				'asal' => $_POST['asal'],
				'tujuan' => $_POST['tujuan'],
				'kelas' => $_POST['kelas'],
				'tanggal' => $_POST['tanggal'],
				);
				$result = $this->selectTabelTiket($dataTiketMuncul);
				if (mysqli_num_rows($result) > 0) {
					$this->printDataTiket($dataTiketMuncul,$result,$username);
				} else {
					echo "Maaf tiket yang anda cari tidak ada";
				}
			}
			else{
				echo "Silahkan memilih tiket terlebih dahulu";
			}
		}
		public function pembayaran($id,$username){
			if(isset($_POST["submit"])){
				$dataDiri = array(
					'nama' => $_POST['nama'],
					'telp' => $_POST['telp'],
					'ktp' => $_POST['ktp']
				);
				include_once("Model/tiketModel.php");
				$pembayaran = new tiketModel();
				$query = $pembayaran->pembayaran($dataDiri,$id,$username);
				if($query){
					return True;
					//header("Location:templateUser.php");
				}
				else{
					return False;
				}
			}
		}

		public function tampilTabelUpdate(){
		include_once('Model/tiketModel.php');
		$tiket = new tiketModel();
		$result = $tiket->tampilTabelUpdate();
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr> 
					<td>".$row["kode_tiket"]."</td>
						<td>".$row["no_penerbangan"]."</td>
						<td>".$row["kelas"]."</td>
						<td>".$row["asal"]."</td>
						<td>".$row["tujuan"]."</td>
						<td>".$row["tgl_terbang"]."</td>
						<td>".$row["tgl_tiba"]."</td>
						<td>Rp ".number_format($row["harga"])."</td>
						<td><button type='button' class='update'> <a href='updateTiket.php?id=".$row["kode_tiket"]."'>Update</button></td>
					</tr>";				
			}
		}

		public function ubahTiket()
		{
			include_once ('Model/tiketModel');
			$tiket = new tiketModel();
			$hasil = $tiket->edit();
				if ( $this->model('tiketModel')->edit($_POST > 0)){
					Flasher::setFlash('berhasil','diubah','success');
					header('Location: localhost/JustTix/pages/tabelUpdate.php');
					exit;
				}else{
					Flasher::setFlash('gagal','diubah','danger');
					header('Location: localhost/JustTix/pages/tabelUpdate.php');
					exit;
				}
		}
	}
?>