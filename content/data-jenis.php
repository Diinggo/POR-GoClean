<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php include 'widget/data-side.php'; ?>
		</div>
		<div class="col-md-9">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6">
							<h1>Data Master Jenis</h1></div>
						<div class="col-md-3 col-md-offset-3">
							<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#tjenis">
								Tambahkan Jenis
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
								<th>Nama Jenis</th>
								<th>Edit</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<!--  -->
						<tbody>
							<?php
							while ($dtt1 = mysql_fetch_array($qrt1)) {
								?>
								<tr>
									<td><?php echo ++$t; ?></td>
									<td><?php echo $dtt1['nm_jenis']?></td>
									<td><button type="button" class="btn btn-info" data-toggle="modal" 
										data-target="#ejenis<?php echo ++$s; ?>">Edit</button></td>
									<td><a href="?p=data-jenis&del=<?php echo $dtt1['kd_jenis']; ?>"
									class="btn btn-danger">Hapus</a></td>
										<?php include 'widget/jenis-edit.php'; ?>
								</tr>
							<?php } ?>
									</tbody>
								</table>
							</div>
						</div>	
					</div>
				</div>
			</div>

<?php 
include 'widget/jenis-tambah.php';
 ?>