<form method="post">
	<div class="modal fade" id="ttarif" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Tambah Tarif</h4>
				</div>
				<div class="modal-body">
					<div class="row">
					<!--  -->
						<div class="col-md-3"><label class="control-label">Nama Tarif</label></div>
						<div class="col-md-9 form-group"><input type="text" name="nama1" 
						class="form-control" placeholder="Masukkan Nama Tarif"></div>
					<!--  -->
						<div class="col-md-3"><label class="control-label">Harga Tarif</label></div>
						<div class="col-md-9 form-group"><input type="text" name="harga" 
						class="form-control" placeholder="Masukkan Harga Tarif"></div>
					<!--  -->
						<div class="col-md-3"><label class="control-label">Nama Jenis</label></div>
						<div class="col-md-9 form-group">
							<select name="nama2" class="form-control">
							<?php
							$qw = mysql_query("SELECT * FROM tb_jenis");
							while ($dt1 = mysql_fetch_array($qw)) {?>
								<option value="<?php echo $dt1['kd_jenis'] ?>"><?php echo $dt1['nm_jenis']; ?></option>
							<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
					<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
				</div>
			</div>
		</div>
	</div>
</form>