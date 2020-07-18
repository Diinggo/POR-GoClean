<?php
$qjp12 =  mysql_query("SELECT * FROM tb_jenis");
$dk = mysql_fetch_array($qjp12);

$qry = mysql_query("SELECT * FROM tb_konsumen, tb_transaksi WHERE tb_konsumen.kd_konsumen = tb_transaksi.kd_konsumen
AND kd_transaksi = '$_GET[id]'");
$dty = mysql_fetch_array($qry);

if (isset($_POST['batal'])) {
	header("Location: ?p=data-transaksi");

} elseif (isset($_GET['del'])) {
	if (mysql_query("DELETE FROM tb_dtransaksi WHERE kd_dtransaksi = '$_GET[del]'")) {
		header("Location: ?p=etransaksi&id=$_GET[id]");
	}

} elseif (isset($_POST['tambah'])) {
	$df = mysql_fetch_array(mysql_query("SELECT * FROM tb_tarif WHERE kd_tarif = '$_POST[tarif]'"));

	if (mysql_query("INSERT INTO tb_dtransaksi VALUES
		('','$_GET[id]','$_POST[tarif]','$_POST[berat]','$df[harga]')")) {
		header("Location: ?p=etransaksi&id=$_GET[id]");
	}

} elseif (isset($_POST['simpanet'])) {
	if (mysql_query("UPDATE tb_transaksi SET tgl_transaksi = '$_POST[awal]',
		tgl_ambil = '$_POST[akhir]', diskon = '$_POST[diskon]'
		WHERE kd_transaksi = '$_GET[id]'")) {
		header("Location: ?p=struk&id=$_GET[id]");
	}
}
?>