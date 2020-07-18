<body onload="window.print()">
<div class="container">
	<div class="row" id="kosong">
	<div class="well">
		<h4>Print Data Jenis 
		<button onclick="window.print('#kosong')" class="btn btn-danger btn-sm pull-right">Cetak</button></h4>
	</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>NO</th>
					<th>NAMA JENIS</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$qry = mysql_query("SELECT * FROM tb_jenis");
				while ($dt = mysql_fetch_array($qry)) {
					?>
					<tr>
						<td><?php echo ++$k; ?></td>
						<td><?php echo $dt['nm_jenis'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</body>