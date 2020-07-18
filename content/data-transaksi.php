<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php include 'widget/data-side.php'; ?>
		</div>
		<div class="col-md-9">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6"><h1>Data Master Transaksi</h1></div>
						<div class="col-md-3 col-md-offset-3">
						<a href="?p=transaksi" class="btn btn-success btn-block">Tambahkan Transaksi</a>
						</div>
					</div>
				</div>
				<div class="panel-body">
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
								<th colspan="3">ACTION</th>
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
									<a href="?p=data-transaksi&del=<?php echo $ddr['kd_transaksi'] ?>"
									class="btn btn-warning btn-sm">Hapus</a>
								</td>
								<td>
									<a href="?p=etransaksi&id=<?php echo $ddr['kd_transaksi'] ?>"
									class="btn btn-default btn-sm">Edit</a>
								</td>
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