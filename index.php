<?php
session_start();
error_reporting(0);
include 'include/koneksi.php';

if (empty($_SESSION['admin'])) {

	include 'include/bin/login-bin.php';
	include 'theme/head.php';
	include 'theme/slot.php';
	include 'include/login.php';
	include 'theme/foot.php';

} else {

	if (empty($_GET['p'])) {
		include 'theme/head.php';
		include 'theme/menu.php';
		include 'theme/slot.php';
		include 'content/home.php';
		include 'theme/foot.php';

	}elseif ($_GET['p'] == "logout") {

		include 'include/logout.php';

	} else {

		if (file_exists("content/".$_GET['p'].".php")) {
			include "content/bin/".$_GET['p']."-bin.php";
			include 'theme/head.php';
			include 'theme/menu.php';
			include 'theme/slot.php';
			include "content/".$_GET['p'].".php";
			include 'theme/foot.php';

		} else {

			header("Location: ./");

		}
	}
}
?>