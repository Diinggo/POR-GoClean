<div class="container">
	<div class="row">
		<div class="col-md-3"><?php include 'widget/laporan-side.php'; ?></div>
		<div class="col-md-9">
			<div class="panel panel-info">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9">
							<h2>Laporan Data Konsumen</h2>
						</div>
						<div class="col-md-3">
							<a href="?p=cetak-konsumen" target="_blank"
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
								<th>Alamat</th>
								<th>Telp</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$qry1 = mysql_query("SELECT * FROM tb_konsumen,tb_kelurahan
						WHERE tb_konsumen.kelurahan = tb_kelurahan.kd_kel ORDER BY kd_konsumen ASC");
						while ($dt1 = mysql_fetch_array($qry1)) {
						?>
							<tr>
								<td><?php echo ++$d; ?></td>
								<td><?php echo $dt1['nm_konsumen'] ?></td>
								<td><?php echo $dt1['alamat'] ?></td>
								<td><?php echo $dt1['nm_kel'] ?></td>
								<td><?php echo $dt1['telp'] ?></td>
								<td><?php echo $dt1['ket'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>