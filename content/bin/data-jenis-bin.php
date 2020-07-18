<?php 
$qrt1 = mysql_query("SELECT * FROM tb_jenis ORDER BY kd_jenis ASC");

if (isset($_POST['bedit'])) {
	if (empty($_POST['edit2'])) {
		$msg2 = "kosong";
	} else {
		mysql_query("UPDATE tb_jenis SET nm_jenis = '$_POST[edit2]' WHERE kd_jenis = '$_POST[edit1]'");
		header("Location: ?p=data-jenis");
		$msg3 = "berhasil";
	}
} elseif (isset($_POST['btbh'])) {
	if (empty($_POST['ttbh'])) {
		$msg = "kosong";
	} else {
		mysql_query("INSERT INTO tb_jenis VALUES ('','$_POST[ttbh]') ");
		header("Location: ?p=data-jenis");
		$msg1 = "berhasil";
	}
} elseif (isset($_GET['del'])) {
	if (mysql_query("DELETE FROM tb_jenis WHERE kd_jenis = '$_GET[del]'")) {
		header("Location: ?p=data-jenis");
		$msg4 = "berhasil";
	}
}
 ?>