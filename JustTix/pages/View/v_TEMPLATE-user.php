<body>
<div id="wrapper">

    <!-- Navigation -->
    <?php include 'View/v_header-user.php';?>
	
	

    <!-- Page Content -->
    <div id="page-wrapper" style="margin-left:0px; background: url(../Gambar/pesawat.png) no-repeat; background-size: 1550px">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="border-bottom:0px">JustTix</h1>
                </div>
            </div>
			
			
			

			<div class="row">
                        <div class="col-lg-8" id="tengah">
                            <div class="panel panel-default">
                                
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    
                                                    <label>Tujuan Penerbangan : </label>
                                                    <select class="form-control" id="form-kota-asal" placeholder="Enter text">
                                                        <option>Pilih Kota Asal</option>
														<option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
													
                                                    <select class="form-control" id="form-kota-tujuan" placeholder="Enter text">
                                                        <option>Pilih Kota Tujuan</option>
														<option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
													<br>
													
													
													<label for="start">Tanggal Penerbangan : </label><br>
													<input class="form-control" 
															   value="2019-02-02"
															   min="2019-02-02" max="2019-12-31"><br>
													
													<div class="kelas-penerbangan">
														<label >Kelas Penerbangan : </label>
														<select class="form-control" placeholder="Enter text" style="width: 300px">
															<option>First Class</option>
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
														</select>
													</div>
													<br>

													<div>
														<button type="button" class="btn btn-primary btn-lg" ><i class="fa fa-search"></i>  Search</button>
														<br>
													</div>
                                </div>
                            </div>
                        </div>
						<!--   Untuk Background  -->
					
					
                    </div>
					
					
					
					
					
					
						<div style="padding-left:530px">
							<p style="font-size:30px"><b>Kenapa memilih JustTix?</b></p>
						</div>
					<div style="padding-left:600px">
						
						<br>
						<!--Div pertama-->
						<div style="margin-top:20px">
							
							<div style="margin-left:50px;margin-top:15px; width:230px">
								<p style="font-weight:bold; padding-bottom:10px">Pembayaran Jujur</p>
								Tidak terdapat biaya tambahan
							</div>
							<div style="margin-left:-80px; margin-top:-70px">
								<img src="../Gambar/nofee.png" style="width:80px;" alt="Italian Trulli">
							</div>
							
							
							
							
						
						</div>
						<!--Div kedua-->
						<div>
							
							<div style="margin-left:-60px;margin-top:35px; width:230px">
								<p style="font-weight:bold; padding-bottom:10px">Banyak pilihan pembayaran</p>
								Mempermudah User untuk membayar dengan banyak pilihan pembayaran
							</div>
							<div style="margin-left:180px; margin-top:-70px; padding-bottom:40px">
								<img src="../Gambar/payment1.png" style="width:80px;" alt="Italian Trulli">
							</div>
							
						
						</div>
						
						<!--Div ketiga-->
						<div>
							
							<div style="margin-left:50px;margin-top:15px; width:230px">
								<p style="font-weight:bold; padding-bottom:10px">Harga Murah Meriah</p>
								Mendapat banyak pilihan dengan harga yang paling Terjangkau
							</div>
							<div style="margin-left:-80px; margin-top:-70px">
								<img src="../Gambar/sales.png" style="width:80px;" alt="Italian Trulli">
							</div>

						</div>
						
						<!--Div Keempat-->
						<div>
							
							<div style="margin-left:-60px;margin-top:35px; width:230px">
								<p style="font-weight:bold; padding-bottom:10px">Agar Kelompok kami Lulus IMPAL</p>
								Nilai bagus, Orang tua senang. menggapai cita cita yang mulia.
							</div>
							<div style="margin-left:180px; margin-top:-70px; padding-bottom:40px">
								<img src="../Gambar/lulus1.png" style="width:80px;" alt="Italian Trulli">
							</div>
							
						
						</div>
						
						
						
						
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