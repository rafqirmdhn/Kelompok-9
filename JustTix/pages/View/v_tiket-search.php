<body>
<div id="wrapper">



    <!-- Page Content -->
    <div class="background-colorground" id="page-wrapper" style="margin-left: 0px">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" id="border-bottom"><br></h1>
                </div>
            </div>
			
			
			

			<div class="row">

                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "impal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT * FROM produk join toko JOIN kategori_produk JOIN kategori ON produk.ID_toko=toko.ID_toko AND produk.id_produk = kategori_produk.ID_Produk AND kategori_produk.ID_Kategori = kategori.ID_Kategori";
$sql1 = "SELECT DISTINCT asal FROM tiket";
$sql2 = "SELECT DISTINCT tujuan FROM tiket";
$sql3 = "SELECT DISTINCT kelas FROM tiket";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);


if (mysqli_num_rows($result1) OR mysqli_num_rows($result2) OR mysqli_num_rows($result3)  > 0) {
    // output data of each row
    	echo '<form action="tiket.php" method ="post">
    			<div class="col-lg-8" id="tengah">
                            <div class="panel panel-default">
                                
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    


                                                   <label>Pencarian penerbangan : </label>
                                                    <select class="form-control" id="form-300" placeholder="Enter text" name="asal[]">
                                                        <option>Pilih Kota Asal</option>';
															while($row = mysqli_fetch_assoc($result1)) {
													        	echo "<option value='".$row["asal"]."'>".$row["asal"]."</option>";

														    }
														    
														
        echo '                                      </select>
													
                                                    <select class="form-control" id="form-kota-tujuan" placeholder="Enter text" name="tujuan[]">
                                                        <option>Pilih Kota Tujuan</option>';

                                                        	while($row = mysqli_fetch_assoc($result2)) {
													        	echo "<option value='".$row["tujuan"]."'>".$row["tujuan"]."</option>";
														    }
														   

        echo '                                            </select>
													<br>
													
													
													<label for="start">Tanggal Penerbangan : </label><br>
													<input type="date" class="form-control" id="form-300" name"tanggal"
															   value="2019-02-02"
															   min="2019-02-02" max="2019-12-31"><br>
													
													<div class="kelas-penerbangan">
														<label >Kelas Penerbangan : </label>
														<select class="form-control" placeholder="Enter text" id="form-300" name ="kelas[]">
														 type="password" value="" required>
															<option>Pilih Kelas</option>';
															while($row = mysqli_fetch_assoc($result3)) {
																echo "<option value='".$row["kelas"]."'>".$row["kelas"]."</option>";
																}
		echo '										</select>
												</div>
												<br>

												<div>
														
												<input type="submit" name="submit" class="btn btn-primary btn-lg"  value="Search"/>
											<br>
										</div>
                                	</div>
                            	</div>
                        	</div>
                        </form>';	


		if(isset($_POST["submit"])){
				$asal 		= $_POST["asal"];
				$tujuan 	= $_POST["tujuan"];
				$kelas		= $_POST["kelas"];
				$tanggal 	= $_POST["tanggal"];

		}
        	

} else {
    echo "0 results";
}

mysqli_close($conn);
?>
						<!--   Untuk Background  -->
					
					
                    </div>
					
					
					
					
					
					
						

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>
</html>