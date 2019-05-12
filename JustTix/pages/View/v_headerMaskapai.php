<?php
	include_once("Controller/loginController.php");
	session_start();
	if(isset($_SESSION)){
		$email = $_SESSION['email'];
		$username = $_SESSION['username'];
	}
	else{
		$username = "";
	}
	$login = new loginController();
	$login->cekLoginMaskapai($email);
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="templateUser.php">JustTix</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="maskapaiLihatRekap.php">Lihat Laporan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="maskapaiInputDataPesawat.php">Input Data Penerbangan </a></li>
                </ul>
				<ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="logout.php">Log Out </a></li>
                </ul>
                


            

                <!-- /.Dropdown menu
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i></i>Website <b class="caret"></b>
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
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>   

                </ul> 

                    -->





                <!-- /.Atas -->


                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<?php
								if($username!=""){
									echo '<i class="fa fa-user fa-fw"></i>'.$username.' <b class="caret"></b>';
								}
								else{
									echo '<i class="fa fa-user fa-fw"></i>'.$username.' <b class="caret"></b>';
								}
							?>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            </li>
							<li><a href="logout.php" name="submit"><i class="fa fa-sign-in fa-fw"></i> Logout</a>
							</li>
							<?php
								if($username!=""){
									echo '<li><a href="logout.php" name="submit"><i class="fa fa-sign-in fa-fw"></i> Logout</a>
											</li>';
								}
								else{
									echo '<li><a href="login2.php"><i class="fa fa-sign-in fa-fw"></i> Login</a>
											</li>';
								}
							?>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->


                <!-- /. Kalau sudah login

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Akun <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil Akun</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Edit Akun</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>







                -->

                
                <!-- /.navbar-static-side -->
            </nav>