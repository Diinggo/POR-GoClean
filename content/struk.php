<body onload="window.print()">
<div class="container">
	<div class="row">
	<!--  -->
		<table class="table">
			<thead>
				<tr>
					<th colspan="2">RINCIAN DATA</th>
					<th><a href="" class="btn btn-danger btn-sm btn-block"
					onclick="window.print('#kosong')">Cetak Struk</a></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nama Konsumen</td>
					<td>:</td>
					<td><?php echo $dtq1['nm_konsumen'] ?></td>
				</tr>
				<tr>
					<td>Tanggal Transaksi</td>
					<td>:</td>
					<td><?php echo $dtq1['tgl_transaksi'] ?></td>
				</tr>
				<tr>
					<td>Tanggal Ambil</td>
					<td>:</td>
					<td><?php echo $dtq1['tgl_ambil'] ?></td>
				</tr>
			</tbody>
		</table>
	<!--  -->
		<table class="table">
			<thead>
				<tr>
					<th colspan="3">RINCIAN BIAYA</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Diskon</td>
					<td>:</td>
					<td><?php echo "Rp. ".str_replace(",",".", number_format($dtq1['diskon'])).",-" ?></td>
				</tr>
				<tr>
					<td>Total Laundry</td>
					<td>:</td>
					<td><?php echo "Rp. ".str_replace(",",".", number_format($tot)).",-" ?></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td><b>Total Bayar</b></td>
					<td>:</td>
					<td><b><?php echo "Rp. ".str_replace(",",".", number_format($tot - $dtq1['diskon'])).",-" ?></b></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="row">
		<hr style="margin:0px;">
	</div>
	<div class="row">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Jenis</th>
					<th>Nama Tarif</th>
					<th>Berat</th>
					<th>Harga</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$qrt = mysql_query("SELECT * FROM tb_dtransaksi, tb_tarif, tb_jenis
					WHERE tb_dtransaksi.kd_tarif = tb_tarif.kd_tarif
					AND tb_jenis.kd_jenis = tb_tarif.kd_jenis
					AND tb_dtransaksi.kd_transaksi = '$_GET[id]'");
				while ($drt = mysql_fetch_array($qrt)){
					?>
					<tr>
						<td><?php echo ++$g; ?></td>
						<td><?php echo $drt['nm_jenis'] ?></td>
						<td><?php echo $drt['nm_tarif'] ?></td>
						<td><?php echo $drt['berat'] ?></td>
						<td><?php echo "Rp. ".number_format($drt['harga']) ?></td>
						<td><?php echo "Rp. ".number_format($drt['berat'] * $drt['harga']) ?></td>
						</tr>
						<?php } ?>
					</tbody>
		</table>
	</div>
</div>
<!-- </body> -->