<?php if (empty($_SESSION['nama1'])) { ?>
<!-- Modal -->
<form method="POST">
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a href="./" class="close"><span aria-hidden="true">&times;</span></a>
				<h4 class="modal-title" id="myModalLabel">Pilih Konsumen</h4>
			</div>
			<div class="modal-body">
				<select name="kon" class="form-control">
				<?php 
					$qw = mysql_query("SELECT  * FROM tb_konsumen");
					while ($dtk = mysql_fetch_array($qw)) {
				 ?>
					<option value="<?php echo $dtk['kd_konsumen'] ?>"><?php echo $dtk['nm_konsumen']?></option>
				<?php } ?>
				</select>
			</div>
			<div class="modal-footer">
				<a href="?p=data-konsumen&id=0" target="blank" class="btn btn-success pull-left">Tambah Konsumen</a>
				<input type="submit" class="btn btn-primary" name="pilih" value="Pilih">
			</div>
		</div>
	</div>
</div>
</form>

<script type="text/javascript">
	$('#myModal').modal('show')
</script>

<?php } ?>
