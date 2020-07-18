<form method="post">
	<div class="modal fade" id="tambah" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Laundry</h4>
				</div>
				<div class="modal-body">
					<div class="row">
					<!--  -->
						<div class="col-md-3"><label class="control-label">Jenis Pakaian</label></div>
						<div class="col-md-9 form-group">
							<select name="jenis" class="form-control" id="jenis">
							<?php 
							$qjp = mysql_query("SELECT * FROM tb_jenis");
							while ($djp = mysql_fetch_array($qjp)) {
							?>
								<option value="<?php echo $djp['kd_jenis'] ?>">
								<?php echo $djp['nm_jenis']; ?></option>
							<?php } ?>
							</select>
						</div>
					<!--  -->
						<div class="col-md-3"><label class="control-label">Nama Tarif</label></div>
						<div class="col-md-9 form-group">
							<select name="tarif" class="form-control" id="tarif">
							<?php
							 $qnt = mysql_query("SELECT * FROM tb_tarif WHERE kd_jenis = '$dk[kd_jenis]'");
							 while ($dnt = mysql_fetch_array($qnt)) {
							?>
								<option value="<?php echo $dnt['kd_tarif'] ?>"><?php echo $dnt['nm_tarif'] ?></option>
							<?php } ?>
							</select>
						</div>
					<!--  -->
						<div class="col-md-3"><label class="control-label">Berat</label></div>
						<div class="col-md-9 form-group">
							<input type="text" name="berat" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" name="tambah" class="btn btn-primary" value="Tambahkan Laundry">
				</div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	$(document).ready(function () {

		$('#jenis').change(function () {

			var i_jenis = $('#jenis').val();

			$.ajax({
				type : 'POST',
				url : 'include/ambil.php',
				data : "kjenis="+i_jenis,
				success : function (msg) {
					$('#tarif').html(msg);
				}
			})
		});
	});
</script>