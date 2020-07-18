<?php

if (isset($_POST['edit'])) {
	if (mysql_query("UPDATE tb_konsumen SET nm_konsumen = '$_POST[enama]',
		alamat = '$_POST[ealamat]', telp = '$_POST[etelp]', ket = '$_POST[eket]', kelurahan = '$_POST[ekel]'
		WHERE kd_konsumen = '$_POST[ekode]'")) {
		header("Location: ?p=data-konsumen");
		$msg5 = "berhasil";
	}
} elseif (isset($_POST['simpan'])) {
	if (empty($_POST['nama'] || $_POST['telp'] || $_POST['alamat']
		|| $_POST['ket'])) {
		$msg1 = "kosong";
	} else {
		if (mysql_query("INSERT INTO tb_konsumen VALUES ('','$_POST[nama]','$_POST[alamat]',
			'$_POST[telp]','$_POST[ket]','$_POST[kel]')")) {
			header("Location: ?p=data-konsumen");
			$msg2 = "berhasil";
		} else {
			$msg3 = "gagal";
		}
	}
} elseif (isset($_GET['del'])) {
	if (mysql_query("DELETE FROM tb_konsumen WHERE kd_konsumen = '$_GET[del]'")) {
		header("Location: ?p=data-konsumen");
		$msg4 = "berhasil";
	}
}
 ?>