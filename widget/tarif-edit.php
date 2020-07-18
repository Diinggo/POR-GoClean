<form method="post">
	<div class="modal fade" id="edit<?php echo ++$as; ?>" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Edit Tarif | <?php echo $dtt2['nm_tarif']?> 
					Dari <?php echo $dtjenis['nm_jenis'] ?></h4>
					<input type="hidden" name="kode" value="<?php echo $dtt2['kd_tarif'] ?>">
				</div>
				<div class="modal-body">
					<div class="row">
					<!--  -->
						<div class="col-md-3"><label class="control-label">Nama Tarif</label></div>
						<div class="col-md-9 form-group">

							<input type="text" name="editnm1" 
							class="form-control" placeholder="Masukkan Nama Tarif" 
							value="<?php echo $dtt2['nm_tarif']?>">

						</div>
					<!--  -->
						<div class="col-md-3"><label class="control-label">Harga Tarif</label></div>
						<div class="col-md-9 form-group">

							<input type="text" name="edithg" 
							class="form-control" placeholder="Masukkan Harga Tarif"
							value="<?php echo $dtt2['harga'] ?>">

						</div>
					<!--  -->
						<div class="col-md-3"><label class="control-label">Nama Jenis</label></div>
						<div class="col-md-9 form-group">
							<select name="editnm2" class="form-control">
							<?php
							$qw = mysql_query("SELECT * FROM tb_jenis");
							while ($dt1 = mysql_fetch_array($qw)) {?>
								<option value="<?php echo $dt1['kd_jenis'] ?>" <?php if($dtt2['kd_jenis'] == $dt1['kd_jenis']){?>
								selected="selected" <?php } ?>
								><?php echo $dt1['nm_jenis']; ?></option>
							<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Keluar</button>
					<input type="submit" name="edit" class="btn btn-success" value="Simpan">
				</div>
			</div>
		</div>
	</div>
</form>