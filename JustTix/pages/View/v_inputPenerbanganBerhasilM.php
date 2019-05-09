<?php 
include_once('v_headM.php');
include_once('v_headerM.php');?>
<br>
<br>
<br>
<br>

<div class="row" style="text-align: center;">
	Anda telah berhasil memasukkan data Penerbangan
	<?php
		include_once("../Controller/maskapaiController.php");
		$data = new maskapaiController();
		$data->inputPesawat();
	?>
	<br>
	<br>
	<a href="/JustTix/pages/View/v_inputDataPenerbanganM.php">Masukkan data penerbangan lagi?</a>
</div>
