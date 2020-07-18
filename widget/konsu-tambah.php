<form method="post">
<div class="modal fade" id="tkonsu" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Tambah Konsumen</h4>
					</div>
					<div class="modal-body">
						<div class="row">
						<!--  -->
							<div class="col-md-3"><label class="control-label">Nama Konsumen</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Telp</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="telp" placeholder="0812345xxxxx" class="form-control">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Alamat</label></div>
							<div class="col-md-9 form-group">
								<textarea name="alamat" class="form-control" style="resize:vertical;"
								placeholder="Masukkan Alamat"></textarea>
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Kelurahan</label></div>
							<div class="col-md-9 form-group">
								<select class="form-control" name="kel">
								<?php
								$qrd = mysql_query("SELECT * FROM tb_kelurahan");
								while ($pd = mysql_fetch_array($qrd)) {
								?>
									<option value="<?php echo $pd['kd_kel'] ?>">
									<?php echo $pd['nm_kel'] ?></option>
								<?php } ?>
								</select>
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Keterangan</label></div>
							<div class="col-md-9 form-group">
								<textarea name="ket" class="form-control" style="resize:vertical;"
								placeholder="Masukkan Keterangan"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
						<input type="submit" class="btn btn-primary" name="simpan" 
						value="Simpan">
					</div>
				</div>
			</div>
		</div>
	</form>