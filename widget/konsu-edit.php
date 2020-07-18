<form method="post">
<div class="modal fade" id="edit<?php echo ++$hg;?>" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Edit Konsumen <?php echo $dt1['kelurahan'] ?></h4>
						<input type="hidden" name="ekode" value="<?php echo $dt1['kd_konsumen'] ?>">
					</div>
					<div class="modal-body">
						<div class="row">
						<!--  -->
							<div class="col-md-3"><label class="control-label">Nama Konsumen</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="enama" placeholder="Masukkan Nama" class="form-control"
								value="<?php echo $dt1['nm_konsumen'] ?>">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Telp</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="etelp" placeholder="0812345xxxxx" class="form-control"
								value="<?php echo $dt1['telp'] ?>">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Alamat</label></div>
							<div class="col-md-9 form-group">
								<textarea name="ealamat" class="form-control" style="resize:vertical;"
								placeholder="Masukkan Alamat"><?php echo $dt1['alamat'] ?></textarea>
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Kelurahan</label></div>
							<div class="col-md-9 form-group">
								<select class="form-control" name="ekel">
								<?php
								$qrd1 = mysql_query("SELECT * FROM tb_kelurahan");
								while ($pd1 = mysql_fetch_array($qrd1)) {
								?>
									<option value="<?php echo $pd1['kd_kel'] ?>"
									<?php if ($dt1['kelurahan'] == $pd1['kd_kel']) {?> selected <?php } ?>>

									<?php echo $pd1['nm_kel'] ?></option>
								<?php } ?>
								</select>
								</select>
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Keterangan</label></div>
							<div class="col-md-9 form-group">
								<textarea name="eket" class="form-control" style="resize:vertical;"
								placeholder="Masukkan Keterangan"><?php echo $dt1['ket'] ?></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
						<input type="submit" class="btn btn-success" name="edit" 
						value="Simpan">
					</div>
				</div>
			</div>
		</div>
	</form>