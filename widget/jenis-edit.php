<form method="post">
	<div class="modal fade" id="ejenis<?php echo ++$d; ?>" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<input type="hidden" name="edit1" value="<?php echo $dtt1['kd_jenis']; ?>">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" 
						id="myModalLabel">Edit | <b><?php echo $dtt1['nm_jenis']; ?></b></h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<!--  -->
							<div class="form-group">

								<div class="col-md-4">
									<label class="control-label">Masukkan Nama Jenis</label>
								</div>
								<div class="col-md-8">
									<input type="text" class="form-control" name="edit2"
									placeholder="Nama" value="<?php echo $dtt1['nm_jenis']; ?>">
								</div>
							</div>
							<!--  -->
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
						<input type="submit" class="btn btn-primary" name="bedit" 
						value="Simpan">
					</div>
				</div>
			</div>
		</div>
	</form>