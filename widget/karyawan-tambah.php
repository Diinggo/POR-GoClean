<form method="post">
<div class="modal fade" id="tkarya" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Tambah Karyawan</h4>
					</div>
					<div class="modal-body">
						<div class="row">
						<!--  -->
							<div class="col-md-3"><label class="control-label">Nama Karyawan</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Telp</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="telp" placeholder="0812345xxxxx" class="form-control">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Username</label></div>
							<div class="col-md-9 form-group">
								<select name="tipe" class="form-control">
								<?php
								for ($a=1; $a <=3; $a++) {
									if ($a == '1') {
										$d = "Administrator";
									} elseif ($a == '2') {
										$d = "Operator";
									} elseif ($a == '3') {
										$d = "Root";
									}					
								?>
									<option value="<?php echo $d; ?>"><?php echo $d; ?></option>
								<?php } ?>
								</select>
							</div>
							<div class="col-md-12"><hr></div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Password</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="pass1" placeholder="Masukkan Password" class="form-control">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Konfirmasi Password</label></div>
							<div class="col-md-9 form-group">
								<input type="text" name="pass2" placeholder="Ulangi Password" class="form-control">
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