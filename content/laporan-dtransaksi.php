<div class="container">
	<div class="row">
		<div class="col-md-3"><?php include 'widget/laporan-side.php'; ?></div>
		<div class="col-md-9">
			<div class="panel panel-info">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9">
							<h2>Laporan Data Detail Transaksi</h2>
						</div>
						<div class="col-md-3">
							<a href="?p=cetak-dtransaksi" target="_blank" 
							class="btn btn-danger btn-block btn-sm pull-right">CETAK DATA</a>
						</div>
					</div>
				</div>
			<!--  -->
				<div id="cetak1" class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Konsumen</th>
								<th>Jenis</th>
								<th>Tarif</th>
								<th>Berat</th>
								<th>Harga</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$qr1 = mysql_query("SELECT * FROM tb_dtransaksi");
						while ($dt1 = mysql_fetch_array($qr1)) {

							$qr2 = mysql_query("SELECT * FROM tb_konsumen, tb_transaksi, tb_dtransaksi 
								WHERE tb_konsumen.kd_konsumen = tb_transaksi.kd_konsumen 
								AND tb_transaksi.kd_transaksi = tb_dtransaksi.kd_transaksi 
								AND tb_dtransaksi.kd_dtransaksi = '$dt1[kd_dtransaksi]'");
							$dt2 = mysql_fetch_array($qr2);

							$qry3 = mysql_query("SELECT * FROM tb_dtransaksi, tb_tarif, tb_jenis 
								WHERE tb_jenis.kd_jenis = tb_tarif.kd_jenis
								AND tb_tarif.kd_tarif = tb_dtransaksi.kd_tarif
								AND tb_dtransaksi.kd_dtransaksi = '$dt1[kd_dtransaksi]'");
							$dt3 = mysql_fetch_array($qry3);

						?>
							<tr>
								<td><?php echo ++$l; ?></td>
								<td><?php echo $dt2['nm_konsumen'] ?></td>
								<td><?php echo $dt3['nm_jenis'] ?></td>
								<td><?php echo $dt3['nm_tarif'] ?></td>
								<td><?php echo $dt1['berat']; ?></td>
								<td><?php echo $dt1['harga'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>