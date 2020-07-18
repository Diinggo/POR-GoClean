<?php if ($_GET['id'] == '0') { ?>
<form method="post">
<div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false">
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
							<div class="col-md-8 form-group">
								<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Telp</label></div>
							<div class="col-md-8 form-group">
								<input type="text" name="telp" placeholder="0812345xxxxx" class="form-control">
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Alamat</label></div>
							<div class="col-md-8 form-group">
								<textarea name="alamat" class="form-control" style="resize:vertical;"
								placeholder="Masukkan Alamat"></textarea>
							</div>
						<!--  -->
							<div class="col-md-3"><label class="control-label">Keterangan</label></div>
							<div class="col-md-8 form-group">
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

<script type="text/javascript">
	$('#myModal').modal('show')
</script>
<?php } ?>