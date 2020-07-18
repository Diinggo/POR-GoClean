<?php 
// $qry2 = mysql_query("SELECT * FROM tb_tarif");
// $qw = mysql_query("SELECT * FROM tb_jenis");

// if (isset($_POST['edit'])) {
// 	if (empty($_POST['editnm1'] && $_POST['editnm2'] && $_POST['edithg'])) {
// 		$msg = "kosong";
// 	} else {
// 		if (mysql_query("UPDATE tb_tarif SET kd_jenis = '$_POST[editnm2]', 
// 			nm_tarif = '$_POST[editnm1]', harga='$_POST[edithg]' WHERE kd_tarif = '$_POST[kode]'")) {
// 			header("Location: ?p=data-tarif");
// 			$msg1 = "berhasil";
// 		} else {
// 			$msg5 = "error";
// 		}
// 	}

// } elseif (isset($_GET['del'])) {
// 	if (mysql_query("DELETE FROM tb_tarif WHERE kd_tarif = '$_GET[del]'")) {	
// 		header("Location: ?p=data-tarif");
// 		$msg4 = "berhasil";
// 	}

// } elseif (isset($_POST['simpan'])) {
// 	if (empty($_POST['nama1'] && $_POST['harga'] && $_POST['nama2'])) {
// 		$msg2 = "Kosong";

// 	} else {
// 		if (mysql_query("INSERT INTO tb_tarif VALUES ('','$_POST[nama2]','$_POST[nama1]','$_POST[harga]')")) {
// 			header("Location: ?p=data-tarif");
// 			$msg3 = "berhasil";
// 		}
// 	}
// }
 ?>