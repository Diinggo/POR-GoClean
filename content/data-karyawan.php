<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php include 'widget/data-side.php'; ?>
		</div>
		<div class="col-md-9">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6"><h1>Data Master Karyawan</h1></div>
						<div class="col-md-3 col-md-offset-3">
							<button type="button" class="btn btn-success btn-block"
							data-toggle="modal" data-target="#tkarya">
								Tambahkan Karyawan
							</button>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
					<!--  -->
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Karyawan</th>
								<th>Telepon</th>
								<th>Sebagai</th>
								<th>Action</th>
							</tr>
						</thead>
					<!--  -->
						<tbody>
						<?php 
							while ($dt1 = mysql_fetch_array($qry)) {
						 ?>
							<tr>
								<td><?php echo ++$d; ?></td>
								<td><?php echo $dt1['nm_karyawan'] ?></td>
								<td><?php echo $dt1['telp'] ?></td>
								<td><?php echo $dt1['username'] ?></td>
								<td>
									<a href="?p=data-karyawan&del=<?php echo $dt1['kd_karyawan']; ?>"
									class="btn btn-danger btn-sm">Hapus</a>
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

<?php include 'widget/karyawan-tambah.php'; ?>