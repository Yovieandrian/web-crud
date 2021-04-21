<?php
	include('koneksi.php');
	if (isset($_POST['pesan'])) {

		$nama_pembeli = $_POST['nama_pembeli'];
		$nomor_telp = $_POST['nomor_telp'];
		$kode_barang = implode('<br>', $_POST['kode_barang']);
		$deskripsi = $_POST['deskripsi'];
		$alamat = $_POST['alamat'];

		$sql = "INSERT INTO tabel_pesan (nama_pembeli, nomor_telp, kode_barang, deskripsi, alamat)
						VALUE ('$nama_pembeli', '$nomor_telp', '$kode_barang', '$deskripsi', '$alamat')";
		$query = mysqli_query($koneksi, $sql);

		if ($query) {
			echo"<script>alert('Pesanan sudah masuk'); window.location='utama.php';</script>";
		}

		else {
			header('Location: utama.php/status=gagal');
		}

}
else {
	die("Akses Ditolak !");
}


?>