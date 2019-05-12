<?php

class maskapaiController{
	public function showRekap(){
		include_once('Model/maskapaiModel.php');
		$tiket = new maskapaiModel();
		$result = $tiket->selectTabelRekap();
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr> 
						<td>".$row["nama_pemesan"]."</td>
						<td>".$row["no_identitas"]."</td>
						<td>".$row["nama_maskapai"]."</td>
						<td>".$row["kelas"]."</td>
						<td>".$row["asal"]."</td>
						<td>".$row["tujuan"]."</td>
						<td>Rp ".number_format($row["harga"])."</td>
					</tr>";				
			}
	}
	public function inputPesawat(){
		include_once('Model/maskapaiModel.php');
		if(isset($_POST["submit"])){
			$data = array(
				'nama_pesawat' => $_POST['nama_pesawat'],
				'jenis_pesawat' => $_POST['jenis_pesawat'],
			);
			$maskapai = new maskapaiModel();
			$query = $maskapai->inputPesawat($data);
		}
	}
	
}
?>