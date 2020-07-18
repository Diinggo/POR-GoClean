<div class="container">
	<div class="row">
		<div class="col-md-3"><?php include 'widget/laporan-side.php'; ?></div>
		<div class="col-md-9">
			<div class="panel panel-info">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9">
							<h2>Laporan Data Karyawan</h2>
						</div>
						<div class="col-md-3">
							<a href="?p=cetak-karyawan" target="blank" 
							class="btn btn-danger btn-sm pull-right">CETAK DATA</a>
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
								<th>Nama Karyawan</th>
								<th>Telepon</th>
								<th>Sebagai</th>
							</tr>
						</thead>
					<!--  -->
						<tbody>
						<?php
							$qry = mysql_query("SELECT * FROM tb_karyawan");
							while ($dt1 = mysql_fetch_array($qry)) {
						 ?>
							<tr>
								<td><?php echo ++$d; ?></td>
								<td><?php echo $dt1['nm_karyawan'] ?></td>
								<td><?php echo $dt1['telp'] ?></td>
								<td><?php echo $dt1['username'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>