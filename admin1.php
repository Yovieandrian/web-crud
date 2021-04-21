<?php 
	include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrilty="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<title>CRUD</title>
	<link rel="stylesheet" href="adminstyle.css">
</head>
<body style="background-color: #22242A">

<div class="container">
	<center><h1 style="text-transform: uppercase; color: #CD853F;">Data Pembeli</h1></center>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Pembeli</th>
				<th>Nomor Telp</th>
				<th>Kode Barang</th>
				<th>Deskripsi</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
 				$query = "SELECT * FROM tabel_pesan ORDER BY id ASC";
 				$result = mysqli_query($koneksi, $query);

 				if (!$result) {
 					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
 				}
 				$no = 1;

 				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['nama_pembeli']; ?></td>
				<td><?php echo $row['nomor_telp']; ?></td>
				<td><?php echo $row['kode_barang']; ?></td>
				<td><?php echo $row['deskripsi']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td>
					<a style="background-color: #CD853F; border-radius: 15%; padding: 10px; font-size: 14px; text-decoration: none; align-items: center;" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a style="background-color: darkred; border-radius: 15%; padding: 10px; font-size: 14px; text-decoration: none; align-items: center;" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin, ingin menghapus data ini?')" >Hapus</a>
				</td>

			</tr>
			<?php 
				$no++;
			}
			?>
		</tbody>
	</table>
</div>



 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

</body>
</html>