<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIDEBAR COBA</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="sidebar_cobastyle.css">
</head>
<body>
	
	<input type="checkbox" id="check">
	<!-- Header Start -->

	<header>
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn"></i>			
		</label>
	</header>

	<!-- Sidebar Start -->
	<div class="sidebar">
		<center>
			<img src="filegambar/yovie1.jpg" class="profile_image">
			<h4 style="color: #19B3D3; margin-top: 0; margin-bottom: 1px;">Yovie</h4>
			<h3 style="color: #ccc; margin-top: 0; margin-bottom: 5px;">Andrian</h3>
		</center>
		<a href="?url=dashboard" style="display: block; width: 100%; line-height: 60px; text-decoration: none; padding-left: 40px; box-sizing: border-box; transition: 0.5s; transition-property: background;">
			<i class="fas fa-desktop"></i>
			<span>Boutique Profil</span>
		</a>

		<a href="?url=admin" style="display: block; width: 100%; line-height: 60px; text-decoration: none; padding-left: 40px; box-sizing: border-box; transition: 0.5s; transition-property: background;">
			<i class="fas fa-shopping-bag"></i>
			<span>Daftar Pembeli</span>
		</a>
		<a href="?url=produk" style="display: block; width: 100%; line-height: 60px; text-decoration: none; padding-left: 40px; box-sizing: border-box; transition: 0.5s; transition-property: background;">
			<i class="fas fa-store"></i>
			<span>Daftar Produk</span>
		</a>
		<a href="utama.php" style="display: block; width: 100%; line-height: 60px; text-decoration: none; padding-left: 40px; box-sizing: border-box; transition: 0.5s; transition-property: background;">
			<i class="fas fa-home"></i>
			<span>Back To Home</span>
		</a>
	</div>



	<!-- Sidebar End -->
	<div class="content">

		
		<?php 
			include 'proses_admin.php';
		?>

		
	</div>


</body>
</html>	