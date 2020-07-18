<?php 
//include 'widget/konsu-modal.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php include 'widget/data-side.php'; ?>
		</div>
		<div class="col-md-9">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6"><h1>Data Master Konsumen</h1></div>
						<div class="col-md-3 col-md-offset-3">
							<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#tkonsu">
								Tambahkan Konsumen
							</button>
						</div>
					</div>
				</div>
				<div class="panel-body">
				<div class="well">
					<form class="form-inline" method="get">
						<div class="form-group">
							<label>Pilih Cari Kelurahan</label>
							<select class="form-control" name="q">
								<?php
								$qrg = mysql_query("SELECT * FROM tb_kelurahan");
								while ($dtg = mysql_fetch_array($qrg)) {
								?>
									<option value="<?php echo $dtg['kd_kel'] ?>">
									<?php echo $dtg['nm_kel'] ?></option>
								<?php } ?>
							</select>
							<button type="submit" name="p" value="data-konsumen" class="btn btn-warning"
							>Cari</button>
						</div>
					</form>
				</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Konsumen</th>
								<th>Alamat</th>
								<th>Kelurahan</th>
								<th>Telp</th>
								<th>Keterangan</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if (empty($_GET['q'])) {
							$qry1 = mysql_query("SELECT * FROM tb_kelurahan, tb_konsumen 
							WHERE tb_kelurahan.kd_kel = tb_konsumen.kelurahan 
							ORDER BY tb_konsumen.kd_konsumen ASC");	
						} else {
							$qry1 = mysql_query("SELECT * FROM tb_kelurahan, tb_konsumen 
							WHERE tb_kelurahan.kd_kel = tb_konsumen.kelurahan AND tb_konsumen.kelurahan = '$_GET[q]'
							ORDER BY tb_konsumen.kd_konsumen ASC");
						}
						while ($dt1 = mysql_fetch_array($qry1)) {
						?>
							<tr>
								<td><?php echo ++$d; ?></td>
								<td><?php echo $dt1['nm_konsumen'] ?></td>
								<td><?php echo $dt1['alamat'] ?></td>
								<td><?php echo $dt1['nm_kel'] ?></td>
								<td><?php echo $dt1['telp'] ?></td>
								<td><?php echo $dt1['ket'] ?></td>
								<td>
									<a href="#edit<?php echo ++$kj; ?>" 
									data-toggle="modal"class="btn btn-info btn-sm">Edit</a>
								</td>
								<td><a href="?p=data-konsumen&del=<?php echo $dt1['kd_konsumen'] ?>" class="btn btn-danger btn-sm">Hapus</a></td>
								<?php include 'widget/konsu-edit.php'; ?>
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
include 'widget/konsu-tambah.php';
?>