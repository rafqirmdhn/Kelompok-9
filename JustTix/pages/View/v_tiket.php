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
                                        
                                        
                                        
                                        <?php include("Controller/tiketController.php"); ?>
                                        
                                        
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
