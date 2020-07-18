<?php 
if (isset($_POST['login'])) {

	if (mysql_num_rows(mysql_query("SELECT * FROM tb_karyawan 
		WHERE username = '$_POST[user]' 
		AND password = '$_POST[pass]'"))>0) {

		if ($_POST['capt'] = $_SESSION['c']) {
			if ($qry = mysql_query("SELECT * FROM tb_karyawan 
			WHERE username = '$_POST[user]' 
			AND password = '$_POST[pass]'")) {

				$dt = mysql_fetch_array($qry);
				$_SESSION['admin'] = $dt['kd_karyawan'];
				$_SESSION['tipe'] = $dt['username'];
				header("Location: ./");
			}
		} else {

			$msg = "Captcha Salah";
		}

	} else {
		$msg = "Username Dan Password Salah";
	}
}
?>