<div class="container">
	<div class="row">
		<div class="col-md-3"><?php include 'widget/laporan-side.php'; ?></div>
		<div class="col-md-9">
			<div id="cetak-1" class="panel panel-info">
			<!--  -->
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-9">
							<h2>Laporan Data Jenis</h2>
						</div>
						<div class="col-md-3">
							<a href="?p=cetak-jenis" 
							target="blank" 
							class="btn btn-danger btn-sm btn-block pull-right">CETAK DATA</a>
						</div>
					</div>
				</div>
			<!--  -->
				<div  class="panel-body">
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
		</div>
	</div>
</div>