<div id="page-wrapper" style="margin-left: 0; ">
        <img src="Pesawat.png" alt="" style="
                            position: absolute;
                            margin-left: -50px;
                            margin-top: -50px;
                            width: 1544px;
                            ">
        
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12" style="padding-top: 185px">
                    <h2 class="page-header" align="center">Data Pembayaran</h2>
                </div>
            </div>

            <form style="padding-left: 160px;">
                <div>
                    <label for="date">Tanggal:</label>
                    <input id="date" type="date" value="2019-05-02">
                        <tr>
                            <td>
                                <input type="radio" name="mem_input" class="radioA" id="radioA" value="Membayar">Membayar</input>

                                <input type="radio" name="mem_input" class="radioB" id="radioB" value="cancel">Cancel</input>
                                
                                <input type="text" class="search" value="search" style="border-radius: 20px; padding-left: 100px;"></input>
                            </td>
                        </tr>
                        <div class="panel-body" style="width: 1500px">
                                    <div id="morris-area-chart"></div>
                                    <div class="row">
                        <div class="col-lg-8" >
                            <div class="panel panel-default">
                                <div align="center" class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw" ></i> JustTix
                                    
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Pembayaran</th>
                                            <th>Rincian</th>
                                            <th>Waktu Terbang</th>
                                            <th>Nama Pemesan</th>
                                            <th>Tanggal Penerbangan</th>
                                            <th>Tanggal Tiba</th>
                                            <th>Status Pembayaran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        <tr>
                                            
                                            <td width="100">
                                                60001
                                            </td>
                                            <td width="150">
                                                Rp 2.000.000
                                            </td>
                                            <td>
                                                150 Menit
                                            </td>
                                            <td>
                                                Rifqi
                                            </td>
                                            <td>23/01/2019</td>
                                            <td>23/01/2019</td>
                                            <td width="75" style="background-color:#0dd83f">Berhasil
                                            </td>
                                            <td><input type="button" name="cetak" value="Cetak"></input></td>
                                        </tr>

                                        <tr>
                                            
                                            <td width="100">
                                                60002
                                            </td>
                                            <td width="150">
                                                Rp 1.800.000
                                            </td>
                                            <td>
                                                100 Menit
                                            </td>
                                            <td>
                                                Jofardo
                                            </td>
                                            <td>25/01/2019</td>
                                            <td>25/01/2019</td>
                                                <td style="background-color:#ff1616">Gagal</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="100">
                                                60003
                                            </td>
                                            <td width="150">
                                                Rp 30.000.000
                                            </td>
                                            <td>
                                                420 Menit
                                            </td>
                                            <td>
                                                Adriandhy
                                            </td>
                                            <td>24/01/2019</td>
                                            <td>25/01/2019</td>
                                            <td width="75" style="background-color:#0dd83f">
                                                Berhasil</td>
                                            <td><input type="button" name="cetak" value="Cetak"></input>    
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="100">
                                                60004
                                            </td>
                                            <td width="150">
                                                Rp 7.500.000
                                            </td>
                                            <td>
                                                200 Menit
                                            </td>
                                            <td>
                                                Kifahi
                                            </td>
                                            <td>26/01/2019</td>
                                            <td>26/01/2019</td>
                                            
                                                <td style="background-color:#ff1616">Gagal
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            
                                            <td width="100">
                                                60005
                                            </td>
                                            <td width="150">
                                                Rp 800.000
                                            </td>
                                            <td>
                                                60 Menit
                                            </td>
                                            <td>
                                                Fathur
                                            </td>
                                            <td>29/01/2019</td>
                                            <td>29/01/2019</td>
                                            <td width="75" style="background-color:#0dd83f">
                                                Berhasil
                                                
                                            </td>
                                            <td><input type="button" name="cetak" value="Cetak"></input>
                                        </tr>
                                        
                                    </thead>
                                </table>
                            </div>
                                
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div id="morris-area-chart"></div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            
                                    </div>
                                </div>
                                </div>
                </div>
            </form>
            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>



<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
