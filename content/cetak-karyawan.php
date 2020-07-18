<div class="container">
	<div class="row" id="kosong">
		<div class="well">
			<h4>Print Data Karyawan
				<button onclick="window.print('#kosong')" class="btn btn-danger btn-sm pull-right">Cetak</button></h4>
			</div>
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