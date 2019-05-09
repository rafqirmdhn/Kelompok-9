<?php
include_once('../Model/maskapaiModel.php');
class maskapaiController{
	public function index(){

		include ('View/v_headM.php');
		include ('View/v_headerM.php');
		include ('View/v_homeMaskapai.php');
		
	}
	public function showRekap(){
		include_once('../Model/maskapaiModel.php');
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
							<td>".$row["tgl_penerbangan"]."</td>
							<td>".$row["tgl_tiba"]."</td>
							<td>".$row["waktu_terbang"]."</td>
					</tr>";				
			}
	}
	public function inputPesawat(){
		if(isset($_POST["submit"])){
			$data = array(
				'kode_pesawat' => $_POST['kode_pesawat'],
				'nama_pesawat' => $_POST['nama_pesawat'],
				'jenis_pesawat' => $_POST['jenis_pesawat'],
			);
			$maskapai = new maskapaiModel();
			$query = $maskapai->inputPesawat($data);
		}
	}
	
}
?>