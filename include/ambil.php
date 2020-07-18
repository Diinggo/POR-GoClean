<?php
include 'koneksi.php';

$amb = mysql_query("SELECT * FROM tb_tarif WHERE kd_jenis = '$_POST[kjenis]'");

while ($dmb = mysql_fetch_array($amb)) { ?>
	<option value="<?php echo $dmb['kd_tarif'] ?>"><?php echo $dmb['nm_tarif'] ?></option>
<?php } ?>