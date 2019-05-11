<?php
	include_once('Model/tiketModel.php');
	class templateUserController{
		public function pencarianPenerbangan(){
			$tiket = new tiketModel();
			$resultAsal = $tiket->ambilData('asal');
			$resultTujuan = $tiket->ambilData('tujuan');
			$resultKelas = $tiket->ambilData('kelas');
			if (mysqli_num_rows($resultAsal) OR mysqli_num_rows($resultTujuan) OR mysqli_num_rows($resultKelas)  > 0) {
				$this->tampilPencarianPenerbangan($resultAsal,$resultTujuan,$resultKelas);
			}
		}
		public function tampilPencarianPenerbangan($result1,$result2,$result3){
			echo '  <form action="tiket.php" method ="post">
                    <div class="col-lg-8" id="tengah">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <label>Pencarian penerbangan : </label>
                                    <select class="form-control" id="form-300" placeholder="Enter text" name="asal">
                                        <option value="">Pilih Kota Asal</option>';
                                            while($row = mysqli_fetch_assoc($result1)) {
			echo                            "<option value='".$row["asal"]."'>".$row["asal"]."</option>";
                                            }
			echo '                      </select>
                                                

                                    <select class="form-control" id="form-kota-tujuan" placeholder="Enter text" name="tujuan">
                                        <option value="">Pilih Kota Tujuan</option>';
                                            while($row = mysqli_fetch_assoc($result2)) {
			echo                            "<option value='".$row["tujuan"]."'>".$row["tujuan"]."</option>";
                                            }
			echo '                       </select>
                                    <br>
                                <label for="start">Tanggal Penerbangan : </label><br>
                                    <input type="date" class="form-control" id="form-300" name="tanggal"
                                        value="2019-05-01"
                                        min="2019-05-01" max="2019-12-31"><br>                
                                <div class="kelas-penerbangan">
                                    <label >Kelas Penerbangan : </label>
                                        <select class="form-control" placeholder="Enter text" id="form-300" name ="kelas">
                                            <option value="">Pilih Kelas</option>';
                                                while($row = mysqli_fetch_assoc($result3)) {
			echo                                "<option value='".$row["kelas"]."'>".$row["kelas"]."</option>";
                                                }
			echo    '                       </select>
                                </div>
                                <br>
                                <div>                           
                                    <input id="submit" type="submit" name="submit" class="btn btn-primary btn-lg"  value="Search" data-toggle="modal" data-target="#myModal"/>              
                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>
                 </form>';   
		}
	}
?>