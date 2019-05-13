<div id="page-wrapper" style="margin-left: 0"  >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    
                                    <div class="table-responsive" style=" overflow-x: hidden;">
                                        <div class="headline" style="width:1000px; height: 200px">
                                            <img src="../Gambar/pesawat.png" alt="" style="position: absolute; margin-left: -50px; margin-top: -70px; width:1369px;"> 
                                            <h2 style="z-index: 0 margin-left:50px;position: absolute; text-align: right;left: 600px;top: 100px;color: white; font-size: 50px">JustTix</h2>

                                        </div>
                                </div>
                                <div style="margin-top: 50px">
                                        <p style="margin-left: 250px" style="font-size: 5000px">SILAHKAN ISI DATA DIRI ANDA</p>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
											<?php
											echo"<form role='form' method='post' action='dataDiriBerhasil.php?id=".$_GET['id']."'>";
                                            ?>
												<div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                                </div>                                                
                                                <div class="form-group">
                                                    <label>Nomor Telpon</label>
                                                    <input type="number" name="telp" class="form-control" placeholder="Nomor Telpon" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor KTP</label>
                                                    <input type="number" name="ktp" class="form-control" placeholder="Nomor KTP" required>
                                                </div>
												<fieldset>
                                                    <div class="form-group">
                                                    
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" required>Pengisian sesuai data diri
                                                        </label>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button>
                                                </fieldset>
											</form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-6">
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
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

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
