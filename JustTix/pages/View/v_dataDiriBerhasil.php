<br>
<br>
<br>
<br>

<div class="row" style="text-align: center;">
	<i class="fa fa-check-circle fa-2x" style = "color: green"></i> <br> 
	Tiket berhasil dipesan. Silahkan membayar dan mengecek pembayaran
	<br>
	<?php
		include_once("Controller/tiketController.php");
		$tiket = new tiketController();
		$tiket->pembayaran($_GET['id'],$username);
	?>
	<br>
	<a href="templateUser.php">Kembali ke halaman awal</a>
</div>
