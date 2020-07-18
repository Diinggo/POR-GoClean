<?php 
if (isset($_GET['del'])) {
	if (mysql_query("DELETE FROM tb_dtransaksi WHERE kd_transaksi = '$_GET[del]'")) {
		if (mysql_query("DELETE FROM tb_transaksi WHERE kd_transaksi = '$_GET[del]'")) {
			header("Location: ?p=data-transaksi");
		}
	}
}
?>