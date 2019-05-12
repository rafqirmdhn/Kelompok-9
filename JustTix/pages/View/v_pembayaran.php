<div id="page-wrapper" style="margin-left: 0; ">
        <img src="../Gambar/Pesawat.png" alt="" style="
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
							<?php
								include_once("Controller/tiketController.php");
								$tiket = new tiketController();
								$tiket->tampilDataBayar($username);
							?>  
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
