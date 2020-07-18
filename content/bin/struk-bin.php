<?php 
$qry1 = mysql_query("SELECT * FROM tb_konsumen, tb_transaksi 
	WHERE tb_konsumen.kd_konsumen = tb_transaksi.kd_konsumen
	AND tb_transaksi.kd_transaksi = '$_GET[id]'");
$dtq1 = mysql_fetch_array($qry1);

$qry2 = mysql_query("SELECT * FROM tb_dtransaksi, tb_tarif, tb_jenis
					WHERE tb_dtransaksi.kd_tarif = tb_tarif.kd_tarif
					AND tb_jenis.kd_jenis = tb_tarif.kd_jenis
					AND tb_dtransaksi.kd_transaksi = '$_GET[id]'");

while ($dtq2 = mysql_fetch_array($qry2)) {
	$tot += $dtq2['berat'] * $dtq2['harga'];
}
?>