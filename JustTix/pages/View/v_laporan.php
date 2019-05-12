<div class="row" style="height: 70px">
	<b>Laporan Rekap Penjualan</b>
</div>
<div class="row" style="text-align: center; font-size: 20px">
	<b>Laporan Rekap Penjualan</b>
</div>
<br>
<div>
	<div class="table-responsive">
		<form> 
			<table class = 'table table-striped table-bordered table-hover dataTable no-footer' style= 'text-align: center; margin-top: 20px'>
				<thead>
						<tr>
							<th>Nama Pemesan</th>
							<th>Identitas</th>
							<th>Maskapai</th>
							<th>Kelas</th>
							<th>Asal</th>
							<th>Tujuan</th>
							<th>Harga</th>
						</tr>
				</thead>
			<tbody>
				<?php
					include_once('Controller/maskapaiController.php');
					$data = new maskapaiController();
					$data->showRekap();
				?>
			</tbody>
		</table>
	</div>
</div>