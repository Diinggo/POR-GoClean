<body onload="window.print()">
<div class="container">
	<div class="row" id="kosong">
	<div class="well">
		<h4>Print Data Transaksi
		<button onclick="window.print('#kosong')" class="btn btn-danger btn-sm pull-right">Cetak</button></h4>
	</div>
		<table class="table table-striped">
					<!--  -->
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Konsumen</th>
								<th>Tgl Transaksi</th>
								<th>Tgl Ambil</th>
								<th>Diskon</th>
								<th>Total</th>
							</tr>
						</thead>
					<!--  -->
						<tbody>
						<?php
						$qdr = mysql_query("SELECT * FROM tb_transaksi,tb_konsumen 
							WHERE tb_transaksi.kd_konsumen = tb_konsumen.kd_konsumen ORDER BY kd_transaksi DESC");
						while ($ddr = mysql_fetch_array($qdr)) {

							$qrt = mysql_query("SELECT * FROM tb_dtransaksi WHERE kd_transaksi = '$ddr[kd_transaksi]'");
							$ddt = mysql_fetch_array($qrt);

							$tota += $ddt['harga'] * $ddt['berat'];
						?>
							<tr>
								<td><?php echo ++$p; ?></td>
								<td><?php echo $ddr['nm_konsumen'] ?></td>
								<td><?php echo $ddr['tgl_transaksi'] ?></td>
								<td><?php echo $ddr['tgl_ambil'] ?></td>
								<td><?php echo $ddr['diskon'] ?></td>
								<td><?php echo ($tota - $ddr['diskon'])?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
	</div>
</div>