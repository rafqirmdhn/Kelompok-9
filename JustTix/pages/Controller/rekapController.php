<?php
	include_once('Model/tiketModel.php');
	class rekapController{
		public function selectTabelRekap(){
			$rekap = new tiketModel();
			return $rekap->selectTabelRekap();
		}
		public function tampilDataRekap(){
			$result = $this->selectTabelRekap();
			$this->printDataRekap($result);
		}
		public function printDataRekap($result){
			echo "	<form> 
						<table class = 'table table-striped table-bordered table-hover dataTable no-footer' style= 'text-align: center; margin-top: 20px'>
						<tr>
							<th>Nama Pemesan</th>
							<th>Identitas</th>
							<th>Maskapai</th>
							<th>Kelas</th>
							<th>Asal</th>
							<th>Tujuan</th>
							<th>Harga</th>
							<th>Tanggal Terbang</th>
							<th>Tanggal Tiba</th>
							<th>Durasi (menit)</th>
						</tr>";

			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo "	<tr>  
							<td>".$row["nama_pemesan"]."</td>
							<td>".$row["no_identitas"]."</td>
							<td>".$row["nama_maskapai"]."</td>
							<td>".$row["kelas"]."</td>
							<td>".$row["asal"]."</td>
							<td>".$row["tujuan"]."</td>
							<td>Rp ".number_format($row["harga"])."</td>
							<td>".$row["tgl_penerbangan"]."</td>
							<td>".$row["tgl_tiba"]."</td>
							<td>".$row["waktu_terbang"]."</td>
						</tr>";				
			}
			echo "		</table>
					</form>";
		}
	}
?>