<?php 
// $base = basename("assets/img/".'$foto1');

// $tmp = $_FILES['foto'] ['tmp_name'];

if (isset($_POST['simpanfoto'])) {

     $foto = $_FILES['foto1'] ['name'];
//      if (mysql_query("UPDATE tb_karyawan SET foto = '$foto' WHERE kd_karyawan = '$_SESSION[admin]'")) {
//           //move_uploaded_file($tmp, $base);
//           header("location: ./");
//      }
}
?>
<form method="POST">
<div class="modal fade" id="foto" data-backdrop="static">
     <div class="modal-dialog" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" 
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ganti Foto Profil<input type="file" name="foto1"></h4>
               </div>
               <div class="modal-body">
               <center>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                         <div class="fileupload-new thumbnail" style="width: 200px; height: 200px;">
                              <img src="assets/img/image-placeholder.png">
                         </div>
                    <div class="fileupload-preview fileupload-exists thumbnail"></div>
                    <div>
                         <span class="btn btn-file btn-success">
                              <span class="fileupload-new">Select image</span>
                              <span class="fileupload-exists">Change</span>
                              <input type="files" name="">
                         </span>
                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                    </div>
               </center>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" 
                    data-dismiss="modal">Close</button>
                    <input type="submit" name="simpanfoto" class="btn btn-primary" value="Simpan">
               </div>
          </div>
     </div>
</div>
</form>