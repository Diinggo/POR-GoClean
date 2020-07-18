<div class="container">
	<div class="row">
		<div class="col-md-3"><?php include 'widget/laporan-side.php'; ?></div>
		<div class="col-md-9">
			<div class="panel panel-info">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9">
							<h2>Laporan Data Transaksi</h2>
						</div>
						<div class="col-md-3">
							<a href="?p=cetak-transaksi" target="_blank" 
							class="btn btn-danger btn-sm btn-block pull-right">CETAK DATA</a>
						</div>
					</div>
				</div>
			<!--  -->
				<div id="cetak1" class="panel-body">
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
								<th>ACTION</th>
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
								<td>
									<a href="?p=struk&id=<?php echo $ddr['kd_transaksi']; ?>" class="btn btn-info btn-sm" target="_blank">Cetak Struk</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>