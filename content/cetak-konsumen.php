<body onload="window.print()">
<div class="container">
	<div class="row" id="kosong">
		<div class="well">
			<h4>Print Data Konsumen
				<button onclick="window.print('#kosong')" class="btn btn-danger btn-sm pull-right">Cetak</button></h4>
			</div>
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