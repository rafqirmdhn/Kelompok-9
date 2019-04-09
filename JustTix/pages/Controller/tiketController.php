<?php
	include_once('Model/tiketModel.php');
	class tiketController{
		public function selectTabelTiket($data){
			$tiket = new tiketModel();
			return $tiket->selectTabelTiket($data);
		}
		public function printDataTiket($data,$result){
			echo "	<b style='margin-left: 140px' style='font-size: 20px'> 
						Hasil Pencarian Penerbangan ".$data['asal']." ke ".$data['$tujuan']."
					</b><br> 
					<form action = '' method = 'post'> 
						<table class = 'table table-striped table-bordered table-hover dataTable no-footer' style= 'text-align: center; margin-top: 20px'>
						<tr>
							<th>Maskapai</th>
							<th>Kelas</th>
							<th>Asal</th>
							<th>Tujuan</th>
							<th>Harga</th>
						</tr>";

			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr> 
						<td style='display:none;'>".$row["kode_tiket"]."</td> 
						<td>".$row["nama_maskapai"]."</td>
						<td>".$row["kelas"]."</td>
						<td>".$row["asal"]."</td>
						<td>".$row["tujuan"]."</td>
						<td>".$row["harga"]."</td>
						<td> 
							<a type='submit' name='pilih' class='btn btn-primary' href='DataDiri.php?id=".$row["kode_tiket"]."' readonly>
								Pilih
							</a>
						</td>
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
					printDataTiket($dataTiketMuncul,$result);
				} else {
					echo "0 results";
				}
			}
		}
	}
?>