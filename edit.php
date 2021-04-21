<?php 
	include('koneksi.php');

	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		$query = "SELECT * FROM tabel_pesan where id = '$id'";
		$result = mysqli_query($koneksi, $query);

		if (!$result) {
			die("Query Error :".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
		}

		$data = mysqli_fetch_assoc($result);

		if (!count($data)) {
			echo"<script>alert('Data tidak ditemukan pada tabel');window.location='sidebar_coba.php?url=admin';</script>";
		}
	}

	else {
		echo"<script>alert('Masukkan ID yang ingin diedit');window.location='form_pesan.php';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDIT PRODUK</title>
	<style type="text/css">
		body {
			background: url('filegambar/projectku.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			font-family: "Trebuchet MS";
		}

		h1 {
			text-align: center;
			padding-top: 0;
			letter-spacing: 5px;
			color: #CD853F;
			text-shadow: 1px 3px 5px black;
			font-size: 42px;
		}

		.base {
			width: 800px;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;
			background: rgba(0, 0, 0, 0.5);
			box-shadow: 0px 0px 5px black;
		}

		label {
			margin-top: 10px;
			margin-bottom: 8px;
			float: left;
			text-align: left;
			width: 100%;
			font-size: 20px;
			color: #f8f8f8;
			text-shadow: 1px 3px 5px black;
		}

		input {
			padding: 6px;
			width: 100%;
			box-sizing: border-box;
			background-color: rgba(0, 0, 0, 0.5);
			border: none;
			outline-color: #CD853F;
			font-size: 18px;
			color: #CD853F;
		}

		button {
			background-color: #CD853F;
			color: #fff;
			padding: 10px;
			font-family: "Trebuchet MS";
			font-size: 18px;
			border: 0;
			margin-top: 20px;
			margin-left: 75%;
			width: 20%;
			font-size: 20px;
		}

		button:hover {
			background: #CD853F;
			outline: none;
			box-shadow: 0px 0px 10px #CD853F; 
		}

	</style>
</head>
<body>

	<center><h1>EDIT PRODUK <?php echo $data['nama_pembeli'] ?></h1></center>
	<form method="POST" action="proses_pesan.php" enctype="multipart/form-data">
	<section class="base">
		<div>
			<label>Nama Pembeli</label>
			<input type="text" name="nama_pembeli" autofocus="" required="" value="<?php echo $data['nama_pembeli'] ?>" />
			<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
		</div>
		<div>
			<label>Nomor Telp.</label>
			<input type="number" name="nomor_telp" value="<?php echo $data['nomor_telp'] ?>" />
		</div>
		<div>
			<label>Kode Barang</label>
				<label>
					<input style="width: 10%;" type="checkbox" value="Masker Tenun Ethnic - Rp.15.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Masker Tenun Ethnic - Rp.15.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Ikat Tenun Ethnic - Rp.15.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Ikat Tenun Ethnic - Rp.15.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Totebag Tenun Ethnic - Rp.95.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Totebag Tenun Ethnic - Rp.95.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Blanket Tenun Ethnic - Rp.215.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Blanket Tenun Ethnic - Rp.215.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Kemeja Pria Ethnic - Rp.200.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Kemeja Pria Ethnic - Rp.200.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Outer Cewek Ethnic - Rp.200.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Outer Cewek Ethnic - Rp.200.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Couple Set 1 - Rp.350.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Couple Set 1 - Rp.350.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Couple Set 2 - Rp.350.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Couple Set 2 - Rp.350.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Couple Set 3 - Rp.350.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Couple Set 3 - Rp.350.000
				</label>
				<br>
				<label>
					<input style="width: 10%;" type="checkbox" value="Couple Set 4 - Rp.350.000" name="kode_barang[]" value="<?php echo $data['kode_barang'] ?>" />
					Couple Set 4 - Rp.350.000
				</label>
		</div>
		<div>
			<label>Deskripsi</label>
			<input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>" />
		</div>
		<div>
			<label>Alamat</label>
			<input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" />
		</div>
		<div>
			<button type="submit" name="pesan">Pesan</button>
		</div>
	</section>
	</form>
	
</body>
</html>