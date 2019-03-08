<div id="page-wrapper" style="margin-left: 0"  >
                <div class="container-fluid">
                    <div class="headline">
                        <div>JustTix</div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    
                                    <div class="table-responsive" style=" overflow-x: hidden;">
                                        <div class="headline" style="width:1369px; height: 250px">
                                            <img src="../Gambar/pesawat.png" alt="" style="position: absolute; margin-left: -50px; margin-top: -50px; width:1369px;"> 
                                            <h2 style="z-index: 0 margin-left:50px;position: absolute; text-align: right;left: 600px;top: 100px;color: white; font-size: 50px">JustTix</h2>

                                        </div>
                                    </div>
                                    <div style="margin-top: 50px">
                                        <p style="margin-left: 140px" style="font-size: 20px">Hasil Pencarian</p>
                                        <b style="margin-left: 140px" style="font-size: 20px"> Penerbangan Soekarno Hatta(Jakarta) - Ngurah Rai (Bali) </b>
                                        <div>
                                            <select name = "Tanggal" class="dropdownFltr">
                                            <option value="" selected> Tgl :</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            </select>
                    
                                            <select name = "Bulan" class="dropdownFltr">
                                            <option value="" selected> Bln</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                            </select>

                                            <select name = "Tahun" class="dropdownFltr">
                                            <option value="" selected> Tahun :</option>
                                            <option value="19">2019</option>
                                            <option value="20">2020</option>
                                            <option value="21">2021</option>
                                            </select>
                                        </div>
                                        <form action="">
                                            <input type="radio" name="pesan" value="pesan"> Memesan<br>
                                            <input type="radio" name="pesan" value="cancel"> Cancel<br>
                                        </form>
                                        
                                        <?php include($_SERVER['DOCUMENT_ROOT']."/justtix2/pages/Controller/tiketController.php"); ?>
                                        
                                        <table id="tikettable" style="width:900px; overflow-x: hidden">
                                            <thead>
                                                <tr>
                                                    <th>Pesawat</th>
                                                    <th>Kelas Penerbangan</th>
                                                    <th>Asal</th>
                                                    <th>Tujuan</th>
                                                    <th>Jam Terbang</th>
                                                    <th>Jam Tiba</th>
                                                    <th>Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>Garuda Indonesia</td>
                                                    <td>First Class</td>
                                                    <td>Soekarno Hatta (Jakarta)</td>
                                                    <td>Ngurah Rai (Bali)</td>
                                                    <td>14.00</td>
                                                    <td>16.00</td>
                                                    <td>30.000.000
                                                        <button type="button" class="btn-pil">Pilih</button>
                                                    </td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>Lion Air</td>
                                                    <td>Ekonomi</td>
                                                    <td>Soekarno Hatta (Jakarta)</td>
                                                    <td>Ngurah Rai (Bali)</td>
                                                    <td>07.30</td>
                                                    <td>09.00</td>
                                                    <td>800.000
                                                        <button type="button" class="btn-pil">Pilih</button>
                                                    </td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>Garuda Indonesia</td>
                                                    <td>Bisnis</td>
                                                    <td>Soekarno Hatta (Jakarta)</td>
                                                    <td>Ngurah Rai (Bali)</td>
                                                    <td>19.00</td>
                                                    <td>21.00</td>
                                                    <td>10.000.000
                                                        <button type="button" class="btn-pil">Pilih</button>
                                                    </td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>Garuda Indonesia</td>
                                                    <td>Ekonomi</td>
                                                    <td>Soekarno Hatta (Jakarta)</td>
                                                    <td>Ngurah Rai (Bali)</td>
                                                    <td>15.30</td>
                                                    <td>17.00</td>
                                                    <td>1.500.000
                                                        <button type="button" class="btn-pil">Pilih</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
        

    </body>
</html>
