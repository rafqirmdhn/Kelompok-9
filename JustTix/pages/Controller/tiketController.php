<?php
	include_once('Model/tiketModel.php');
	class tiketController{
		public function selectTabelTiket($data){
			$tiket = new tiketModel();
			return $tiket->selectTabelTiket($data);
		}
		public function printDataTiket($data,$result){
			echo "	<b style='margin-left: 140px' style='font-size: 20px'> 
						Hasil Pencarian Penerbangan ".$data['asal']." ke ".$data['tujuan']."
					</b><br> ";
			if($_SESSION == null){
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
					if($_SESSION!=null){
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
		public function tampilDataTiket(){
			if(isset($_POST["submit"])){
				$dataTiketMuncul = array(
				'asal' => $_POST['asal'],
				'tujuan' => $_POST['tujuan'],
				'kelas' => $_POST['kelas'],
				'tanggal' => $_POST['tanggal'],
				);
				$result = $this->selectTabelTiket($dataTiketMuncul);
				if (mysqli_num_rows($result) > 0) {
					$this->printDataTiket($dataTiketMuncul,$result);
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
		public function tampilDataBayar($username){
			include_once("Model/tiketModel.php");
			$bayar = new tiketModel();
			$query = $bayar->tampilDataBayar($username);
			if(mysqli_num_rows($query)<=0){
				echo 'Anda belum memesan tiket';
			}
			else{
			echo"<div class='table-responsive'>
                    <table class='table table-bordered table-hover table-striped'>
                        <thead>
                            <tr>
                                <th>Rincian</th>
                                <th>Nama Pemesan</th>
                                <th>Tanggal Penerbangan</th>
                                <th>Tanggal Tiba</th>
                                <th>Status Pembayaran</th>
                                <th>Keterangan</th>
                            </tr>";
			while($row = mysqli_fetch_assoc($query)){
                        echo"<tr>
                                <td width='150'>Rp ".$row['harga']."</td>
                                <td>".$row['nama_pemesan']."</td>
                                <td>".$row['tgl_berangkat']."</td>
                                <td>".$row['tgl_tiba']."</td>";
						if($row['status']=='sudah'){
                            echo"<td width='75' style='background-color:#0dd83f'>Sudah</td>
                                <td><input type='button' name='cetak' value='Cetak'></input></td>";
                        }
						else{
							echo"<td width='75' style='background-color:#ff1616'>Belum</td>";
						}
						echo"</tr>
                        </thead>
                    </table>
                </div>";
			}
			}
		}
		public function ubahTiket(){
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