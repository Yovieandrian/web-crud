<?php 
	include('koneksi.php');

	$id = $_GET['id'];
	$query = "DELETE FROM tabel_pesan WHERE id ='$id' ";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
			die("Query Error :".mysqli_error($koneksi). " - ".mysqli_error($koneksi));
		}
	else {
		echo"<script>window.location='sidebar_coba.php?url=admin';</script>";
	}

?>