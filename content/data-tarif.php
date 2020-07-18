<div class="container">
	<!--  -->
	<div class="row">
		<div class="col-md-3"><?php include 'widget/data-side.php'; ?></div>
		<div class="col-md-9">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9"><h1>Data Master Tarif</h1></div>
						<div class="col-md-3">
							<a href="#ttarif" class="btn btn-success btn-block"
							data-toggle="modal">Tambah Jenis</a>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Tarif</th>
								<th>Nama Jenis</th>
								<th>Harga</th>
								<th>Action</th>
							</tr>
						</thead>
					<!--  -->
						<tbody>
						<?php
							while ($dtt2 = mysql_fetch_array($qry2)) {
								$qr = mysql_query("SELECT * FROM tb_jenis WHERE kd_jenis = '$dtt2[kd_jenis]'");
								$dtjenis = mysql_fetch_array($qr);
						?>
							<tr>
								<td><?php echo ++$a; ?></td>
								<td><?php echo $dtt2['nm_tarif']?></td>
								<td><?php echo $dtjenis['nm_jenis'] ?></td>
								<td><?php echo $dtt2['harga'] ?></td>
								<td>
									<a href="#edit<?php echo ++$ad; ?>" data-toggle="modal" class="btn btn-info btn-sm">Edit</a>
									<a href="?p=data-tarif&del=<?php echo $dtt2['kd_tarif'] ?>" 
									class="btn btn-danger btn-sm">Hapus</a>
								</td>
								<?php include 'widget/tarif-edit.php'; ?>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'widget/tarif-tambah.php'; ?>