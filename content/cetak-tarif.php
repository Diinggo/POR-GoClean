<body onload="window.print()">
<div class="container">
	<div class="row" id="kosong">
		<div class="well">
			<h4>Print Data Tarif
				<button onclick="window.print('#kosong')" class="btn btn-danger btn-sm pull-right">Cetak</button></h4>
			</div>
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