<?php

if (isset($_GET['url'])) {
	$url=$_GET['url'];

	switch ($url) {
		case 'dashboard':
		include 'dashboard.php';
			break;

		case 'admin':
		include 'admin1.php';
			break;

		case 'produk':
		include 'produk.php';
			break;
		
		default:
		echo"Selamat Datang Admin";
			break;
	}
}


?>