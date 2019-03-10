<?php
// Create connection
include("connect.php"); 

//Check Connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql1 = "SELECT DISTINCT asal FROM tiket";
$sql2 = "SELECT DISTINCT tujuan FROM tiket";
$sql3 = "SELECT DISTINCT kelas FROM tiket";
$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);
$result3 = mysqli_query($con, $sql3);


if (mysqli_num_rows($result1) OR mysqli_num_rows($result2) OR mysqli_num_rows($result3)  > 0) {
    // Dropdown submit, sudah ambil dari database
        echo '  <form action="tiket.php" method ="post">
                    <div class="col-lg-8" id="tengah">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <label>Pencarian penerbangan : </label>
                                    <select class="form-control" id="form-300" placeholder="Enter text" name="asal">
                                        <option value="">Pilih Kota Asal</option>';
                                            while($row = mysqli_fetch_assoc($result1)) {
        echo                            "<option value='".$row["asal"]."'>".$row["asal"]."</option>";
                                            }
        echo '                      </select>
                                                

                                    <select class="form-control" id="form-kota-tujuan" placeholder="Enter text" name="tujuan">
                                        <option value="">Pilih Kota Tujuan</option>';
                                            while($row = mysqli_fetch_assoc($result2)) {
        echo                            "<option value='".$row["tujuan"]."'>".$row["tujuan"]."</option>";
                                            }
        echo '                       </select>
                                    <br>


                                <label for="start">Tanggal Penerbangan : </label><br>
                                    <input type="date" class="form-control" id="form-300" name="tanggal"
                                        value="2019-02-02"
                                        min="2019-02-02" max="2019-12-31"><br>
                                                        
                                <div class="kelas-penerbangan">
                                    <label >Kelas Penerbangan : </label>
                                        <select class="form-control" placeholder="Enter text" id="form-300" name ="kelas">
                                            <option value="">Pilih Kelas</option>';
                                                while($row = mysqli_fetch_assoc($result3)) {
        echo                                "<option value='".$row["kelas"]."'>".$row["kelas"]."</option>";
                                                }
        echo    '                       </select>
                                </div>
                                <br>

                                <div>                           
                                    <input id="submit" type="submit" name="submit" class="btn btn-primary btn-lg"  value="Search" data-toggle="modal" data-target="#myModal"/>              
                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>
                 </form>';      

} else {
    echo "0 results";
}

mysqli_close($con);
?>