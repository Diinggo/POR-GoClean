<!-- Modal -->
<form method="POST">
<div class="modal fade" id="tredit" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pilih Konsumen</h4>
			</div>
			<div class="modal-body">
				<select name="ekon" class="form-control">
				<?php 
					$qw = mysql_query("SELECT  * FROM tb_konsumen");
					while ($dtk = mysql_fetch_array($qw)) {
				 ?>
					<option value="<?php echo $dtk['kd_konsumen'] ?>" <?php if ($_SESSION['nama1'] == $dtk['kd_konsumen']) { ?>
					selected="selected"<?php } ?>
					><?php echo $dtk['nm_konsumen']?></option>
				<?php } ?>
				</select>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-danger" name="edit" value="Edit">
			</div>
		</div>
	</div>
</div>
</form>