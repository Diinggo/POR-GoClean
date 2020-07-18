<form method="post">
<div class="container">
<!--  -->
	<div class="row">
		<div class="col-md-8">
			<div class="well">
				<input type="submit" class="btn btn-danger" value="Batal" name="batal"> | 
				<input type="submit" class="btn btn-success" name="simpanst" value="Simpan dan Cetak Struk">
			</div>
		<!--  -->
			<div class="panel panel-info">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9"><b>Barang Laundry</b></div>
						<div class="col-md-3">
							<a href="#tambah" data-toggle="modal"
							class="btn btn-danger btn-sm btn-block">Tambah Laundry</a>
						</div>
					</div>
				</div>
			<!--  -->
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Jenis</th>
								<th>Tarif</th>
								<th>Berat</th>
								<th>Subtotal</th>
								<th>Total</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$qrt = mysql_query("SELECT * FROM tb_dtransaksi, tb_tarif, tb_jenis
							WHERE tb_dtransaksi.kd_tarif = tb_tarif.kd_tarif
							AND tb_jenis.kd_jenis = tb_tarif.kd_jenis
							AND tb_dtransaksi.kd_transaksi = '$_SESSION[kode]'");
						while ($drt = mysql_fetch_array($qrt)){
							$tot += $drt['berat'] * $drt['harga'];
						?>
							<tr>
								<td><?php echo ++$g; ?></td>
								<td><?php echo $drt['nm_jenis'] ?></td>
								<td><?php echo $drt['nm_tarif'] ?></td>
								<td><?php echo $drt['berat'] ?></td>
								<td><?php echo "Rp. ".number_format($drt['harga']) ?></td>
								<td><?php echo "Rp. ".number_format($drt['berat'] * $drt['harga']) ?></td>
								<td>
									<a href="?p=transaksi&del=<?php echo $drt['kd_dtransaksi'] ?>"
									class="btn btn-info btn-sm">
									Hapus</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<!--  -->
		<div class="col-md-4">
		<!--  -->
			<div class="panel panel-success">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6"><b>Transaksi</b></div>
						<div class="col-md-6">
							<a href="#tredit" data-toggle="modal" class="btn btn-danger btn-sm btn-block">Edit Konsumen</a>
						</div>
					</div>
				</div>
			<!--  -->
				<div class="panel-body">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Nama Konsumen</td>
								<td><input type="text" name="nama" class="form-control"
								value="<?php echo $dtkon['nm_konsumen'] ?>" readonly=""></td>
							</tr>
							<tr>
								<td>Tanggal Transaksi</td>
								<td><input type="date" name="awal" class="form-control"
								value="<?php echo date(Y)."-".date(m)."-".date(d) ?>"></td>
							</tr>
							<tr>
								<td>Tanggal Ambil</td>
								<td><input type="date" name="akhir" class="form-control"
								value="<?php echo date(Y)."-".date(m)."-".date(d) ?>"></td>
							</tr>
							<tr>
								<td>Diskon</td>
								<td><input type="text" name="diskon" class="form-control" id="diskon"
								onkeyup="tambah()"
								placeholder="0" autofocus></td>
							</tr>
							<tr>
								<td>Total Laundry</td>
								<td><input type="text" class="form-control" value="<?php echo "Rp. ".number_format($tot) ?>" readonly>
									<input type="hidden" id="laundry" onkeyup="tambah()" value="<?php echo $tot; ?>">
								</td>
							</tr>
							<tr>
								<td>Total Biaya</td>
								<td><input id="total" type="text" class="form-control" value="Rp."readonly></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<!--  -->
		</div>
	<!--  -->
	</div>
</div>

<script type="text/javascript">
	function tambah() {
		var a = $('#diskon').val();
		var b = $('#laundry').val();
		c = b - a;
		$('#total').val(c);
	};
</script>

</form>
<?php
include 'widget/tr-modal.php';
include 'widget/tr-tambah.php';
include 'widget/tr-edit.php';
 ?>