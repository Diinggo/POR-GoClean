<?php
$qjp12 =  mysql_query("SELECT * FROM tb_jenis");
$dk = mysql_fetch_array($qjp12);

$dtkon = mysql_fetch_array(mysql_query("SELECT * FROM tb_konsumen WHERE kd_konsumen = '$_SESSION[nama1]'"));

if (isset($_POST['pilih'])) {
	$_SESSION['nama1'] = $_POST['kon'];
	if (empty($_SESSION['kode'])) {
		$_SESSION['kode'] = rand(1,100);
		header("Location: ?p=transaksi");
	}

	// =======================

} elseif (isset($_POST['edit'])) {
	$_SESSION['nama1'] = $_POST['ekon'];
	if (mysql_query("DELETE FROM tb_dtransaksi WHERE kd_transaksi = '$_SESSION[kode]'")) {
		if (!empty($_SESSION['kode'])) {
			$_SESSION['kode'] = rand(1,100);
			header("Location: ?p=transaksi");
		}
	}

	// =======================

} elseif (isset($_POST['tambah'])) {
	$df = mysql_fetch_array(mysql_query("SELECT * FROM tb_tarif WHERE kd_tarif = '$_POST[tarif]'"));

	if (mysql_query("INSERT INTO tb_dtransaksi VALUES
		('','$_SESSION[kode]','$_POST[tarif]','$_POST[berat]','$df[harga]')")) {
		header("Location: ?p=transaksi");
	}

	// =======================

} elseif (!empty($_GET['del'])) {
	if (mysql_query("DELETE FROM tb_dtransaksi WHERE kd_dtransaksi = '$_GET[del]'")) {
		header("Location: ?p=transaksi");
	}

	// =======================

} if (isset($_POST['simpanst'])) {
	if (mysql_query("INSERT INTO tb_transaksi VALUES
		('','$_POST[awal]','$_POST[akhir]','$dtkon[kd_konsumen]',
			'$_SESSION[admin]','$_POST[diskon]')")) {

			$k = mysql_query("SELECT * FROM tb_transaksi WHERE kd_konsumen = '$dtkon[kd_konsumen]'
			AND kd_karyawan = '$_SESSION[admin]' ORDER BY kd_transaksi DESC");

		$dgh = mysql_fetch_array($k);

		if (mysql_query("UPDATE tb_dtransaksi SET kd_transaksi = '$dgh[kd_transaksi]' 
			WHERE kd_transaksi = '$_SESSION[kode]'")) {
			$_SESSION['kode'] = '';
			$_SESSION['nama1'] = '';
			header("Location: ?p=struk&id=$dgh[kd_transaksi]");
		}
		
	}

	// =======================

} elseif (isset($_POST['batal'])) {
	if (mysql_query("DELETE FROM tb_dtransaksi WHERE kd_transaksi = '$_SESSION[kode]'")) {
		$_SESSION['nama1'] = '';
		$_SESSION['kode'] = '';
		header("Location: ?p=transaksi");	
	}
}
?>