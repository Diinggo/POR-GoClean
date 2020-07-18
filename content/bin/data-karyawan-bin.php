<?php 
$qry = mysql_query("SELECT * FROM tb_karyawan");

if (isset($_GET['del'])) {
	if (mysql_query("DELETE FROM tb_karyawan WHERE kd_karyawan = '$_GET[del]'")) {
		header("Location: ?p=data-karyawan");
		$msg1 = "berhasil";
	}
} elseif (isset($_POST['simpan'])) {
	if ($_POST['pass1'] != $_POST['pass1']) {
		$msg2 = "Konfirmasi Password Salah";
	} elseif (mysql_num_rows(mysql_query("SELECT * FROM tb_karyawan WHERE username = '$_POST[tipe]'
		AND password = '$_POST[pass2]'"))>0) {
		$msg3 = "Data Sudah ada";

	} else {
		if (mysql_query("INSERT INTO tb_karyawan VALUES
			('','$_POST[nama]','$_POST[telp]','$_POST[tipe]','$_POST[pass2]','','')")) {
			header("Location: ?p=data-karyawan");
			$msg4 = "Berhasil";
		}
	}
}
 ?>