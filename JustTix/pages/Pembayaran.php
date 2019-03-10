<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    <body>

    <div id="wrapper">
	



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
         <a class="navbar-brand" href="#">JustTix</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> User <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        
    </nav>

    <!-- Page Content -->
    
    <div id="page-wrapper" style="margin-left: 0; ">
    	<img src="../Pesawat.png" alt="" style="
                        	position: absolute;
                        	margin-left: -50px;
                        	margin-top: -50px;
                        	width: 1544px;
                        	">
    	
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12" style="padding-top: 185px">
                    <h2 class="page-header" align="center">Halaman Tiket</h2>
                </div>
            </div>

            <form style="padding-left: 150px;">
                <div>
                    <label for="date">Tanggal:</label>
                    <input id="date" type="date" value="2019-05-02">
                        <tr>
                            <td>
                                <input type="radio" name="mem_input" class="radioB" id="radioB" value="Membayar">Membayar</input>

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
                                            <th>Kode Pembayaran</th>\
                                            <th>Nama Pemesan</th>
                                            <th>Waktu Terbang</th>
                                            <th>Tanggal Penerbangan</th>
                                            <th>Tanggal Tiba</th>
                                            <th>Status Pembayaran</th>
                                            <th>Keterangan</th>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <<?php  
                                                include 'connect.php'?> 
                                            <?php foreach ($datapesanan as $pesanan) :?>
                                          
                                            <td width="100"> <?php echo
                                                 $pesanan['kode_pesan']
                                                 ?>
                                            </td>
                                            <td>
                                                $pesanan['nama_pemesan']
                                            </td>
                                            <td>
                                                $pesanan['waktu_terbang']
                                            </td>
                                            <td>$pesanan['tgl_penerbangan']</td>
                                            <td>$pesanan[tgl_tiba]</td>
                                            <td width="75" style="background-color:#0dd83f">Berhasil
                                            </td>
                                            <td><input type="button" name="cetak" value="Cetak"></input></td>
                                                
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