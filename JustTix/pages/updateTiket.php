<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>JustTix</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .btn-pil{
                float: right;
                background-color:#008CBA;
                color: white;
                border: none;
            }
            #tikettable {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                text-align: center;
                border-collapse: collapse;
                width: 1000px;
                margin-left: 140px;
                z-index: 1;
                }

            #tikettable td, #tikettable  th {
                border: 1px solid #ddd;
                padding: 8px;
                
                }

            #tikettable  tr:nth-child(even){background-color: #f2f2f2; text-align: center;}

            #tikettable  tr:hover {background-color: #ddd;}

            #tikettable  th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #008CBA;
                color: white;
                
            }
            .headline{
                background-image: url("JustTix/Gambar/pesawat.png");


            }
        </style>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="TEMPLATE-user.php">JustTix</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="updateTiket.php"></i> Update Tiket</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="laporan.php"></i> Laporan</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Inbox
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Notification</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li class="divider"></li>
                            <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

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
                                        <p style="text-align: center;" style="font-size: 20px">Form Update Tiket</p>
                                            <form method = 'post'>
                                              <table>
                                                <tr>
                                                <td style="padding-right: 200px; width: 100px; padding-bottom: 20px;"><?php echo $no_penerbangan;?></td>
                                                <td>:</td>
                                                <td><input type='text' name='NomorPenerbangan' id="noper"></td>
                                               <tr>
                                                <tr>
                                                <td style="padding-right: 200px; width: 100px; padding-bottom: 20px;"><?php echo $kelas;?></td>
                                                <td>:</td>
                                                <td><input type='text' name='Kelas' id="kelas"></td>
                                               <tr>
                                                <tr>
                                                <td style="padding-right: 200px; width: 100px; padding-bottom: 20px;"><?php echo $asal;?></td>
                                                <td>:</td>
                                                <td><input type='text' name='Asal' id="asal"></td>
                                               <tr>
                                                <tr>
                                                <td style="padding-right: 200px; width: 100px; padding-bottom: 20px;"><?php echo $tujuan;?></td>
                                                <td>:</td>
                                                <td><input type='text' name='Tujuan' id="tujuan"></td>
                                               <tr>
                                                <tr>
                                                <td style="padding-right: 200px; width: 100px; padding-bottom: 20px;"><?php echo $harga;?></td>
                                                <td>:</td>
                                                <td><input type='text' name='Harga' id="harga"></td>
                                               <tr>
                                                <td></td>
                                                <td></td>
                                                <td><input type='submit' value='Update Tiket'><a href="tabelUpdate.php"></td>
                                               </tr>
                                              </table>  
                                             </form>
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
