<?php 
$q = mysql_query("SELECT * FROM tb_karyawan WHERE kd_karyawan = '$_SESSION[admin]'");
$dq = mysql_fetch_array($q);
if (isset($_POST['simpan1'])) {
     if ($_POST['conf'] != $_POST['baru']) {
          $msg = "error";
     } else {
          if (mysql_query("UPDATE tb_karyawan SET password = '$_POST[conf]' WHERE kd_karyawan = '$_SESSION[admin]' ")) {
               echo '<META HTTP-EQUIV= "refresh" content="0;url=?p=logout"';
          }
     }
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><b>Go Clean | Laundry</b></a>
     </div>

     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="?p=transaksi">Transaksi</a></li>
               <li><a href="?p=data">Data Master</a></li>
               <li><a href="?p=laporan">Laporan</a></li>
               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    role="button" aria-haspopup="false"
                    aria-expanded="false"><?php echo $dq['username'] ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <li><a href="#ganti" data-toggle="modal">Ganti Password</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a href="?p=logout">Logout</a></li>
                    </ul>
               </li>
          </ul>
     </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<?php 
include 'widget/menu-ganti.php';
?>