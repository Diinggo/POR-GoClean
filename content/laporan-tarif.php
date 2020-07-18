<div class="container">
	<div class="row">
		<div class="col-md-3"><?php include 'widget/laporan-side.php'; ?></div>
		<div class="col-md-9">
			<div class="panel panel-info">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9">
							<h2>Laporan Data Tarif</h2>
						</div>
						<div class="col-md-3">
							<a href="?p=cetak-tarif" target="_blank" 
							class="btn btn-danger btn-block btn-sm pull-right">CETAK DATA</a>
						</div>
					</div>
				</div>
			<!--  -->
				<div id="cetak1" class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Tarif</th>
								<th>Nama Jenis</th>
								<th>Harga</th>
							</tr>
						</thead>
					<!--  -->
						<tbody>
						<?php
							$qry2 = mysql_query("SELECT * FROM tb_tarif");
							while ($dtt2 = mysql_fetch_array($qry2)) {
								$qr = mysql_query("SELECT * FROM tb_jenis WHERE kd_jenis = '$dtt2[kd_jenis]'");
								$dtjenis = mysql_fetch_array($qr);
						?>
							<tr>
								<td><?php echo ++$a; ?></td>
								<td><?php echo $dtt2['nm_tarif']?></td>
								<td><?php echo $dtjenis['nm_jenis'] ?></td>
								<td><?php echo $dtt2['harga'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>