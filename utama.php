<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Halaman Utama</title>

    <style type="text/css">
		.header {
			background: url(filegambar/header4.jpg);
			background-size: cover;
			height: 190px;
			width: 100%;
			position: fixed;
			color: #CD853F;
			padding-top: 10px;
		}

		.container {
			display: block;
			max-width: 1200px;
			max-height: 4200px;
			margin-bottom: 22px;
			
		}


		.title {
			position: absolute;
			top: 20%;
			left: 29%;
		}

		.title h1{
			color: darkgrey;
			font-family: system-ui;
			font-size: 40px;
			text-shadow: 5px 3px 5px #CD853F;
			letter-spacing: 3px;
		}

		.title h4{
			text-align: center;
			color: #CD853F;
			text-shadow: 5px 3px 5px black;
			font-family: 'Pacifico', cursive;
		}


		.icon-media {
			width: 24px;
			height: 24px;
			margin-left: 2px;
			margin-right: 2px;
			align-items: center; 
		}

		.login-contact {
			margin-bottom: -75px;
			margin-right: 15px;
		}

		/*Logo brand*/
		.brand {
			margin-top: -10px;
		}

		.logo-brand {
			width: 200px;
			height: 135px;
			margin-top: 30px;
			margin-left: -5px;
			border-radius: 15%;
			background: rgba(3,3,3,0.8);
			opacity: 5;
			overflow: hidden;
			box-shadow: 7px 2px 28px #000;
			box-sizing: 20px;
		}

		/*pencarian*/
		.wrap-search {
			position: relative;
			margin-left: 70px;
			margin-right: 20px;
			margin-top: 120px;
			width: 650px;
			height: 37px;
			background: black;
			border-radius: 8px;
		}

		.wrap-icon-s {
			position: absolute;
			width: 60px;
			height: 87px;
			right: -2px;
			top: 20px;
			transform: translateY(-50%);
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.form-control {
			position: absolute;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			border: none;
			border-radius: 8px;
			background-color: darkgrey;
		}

		.form-control:focus {
			box-shadow: none;
			border-radius: 8px;
		}

		.form-control input::placeholder {
			color: black;
		}

		/*login - contact us*/
		.login-contact2 {
			text-align: center;
			margin-bottom: -15px;
		}

		.nav-header {
			display: block;
			justify-content: center;
			align-items: center;
			border-color: transparent;
		}

		.nav-header ul li{
			justify-content: center;
			display: block;
		}

		.nav-header ul li:hover{
			justify-content: center;
			display: block;
		}

		.nav-header ul li img{
			justify-content: center;
			align-items: center;
			width: 30px;
			height: 30px;
		}

		.nav-header ul li a{
			text-decoration: none;
			color: #CD853F
			justify-content: center;
		}

		.nav-header ul li ul li{
			flex-direction: row;
			display: flex;
			justify-content: center;
			width: auto;
			border-bottom: 0px;
		}

		.nav-header ul li ul li a{
			flex-direction: row;
			display: flex;
			justify-content: center;
		}

		.nav-header ul li ul li a .img-link{
			display: flex;
			justify-content: center;
			width: 25px;
			height: 25px;
		}

		.navigasi {
			padding-left: 0px;
			margin-top: 0px;
		} 

		/*Konten*/
		.content {
			position: relative;
			top: 190px;
		}   	

    </style>

</head>
<body>

<div class="header" style="z-index: 3; border-bottom: 8px solid lightgrey;">
	<div class="container">
		<!-- header paling atas -->
		<div class="d-flex justify-content-between align-items-center">
		</div>

		<!-- text judul brand -->
		<div class="title">
			<h1>Selamat Datang #kawanethnic</h1>
			<h4>Bangga Pakai Tenun Indonesia</h4>
		</div>

		<!-- Logo, search, login-contact2 -->
		<div class="d-flex justify-content-between align-items-center">

			<!-- Logo kiri atas pojok -->
			<div class="d-flex align-items-center">
				<div class="brand">
					<img class="logo-brand" src="filegambar/tenunindonesia2.png" alt="">
				</div>
			</div>

			<!-- Search Brand -->
			<div class="d-flex align-items-center">
				<div class="wrap-search">
					<input type="text" class="form-control" placeholder="Cari Produk">
					<div class="wrap-icon-s">
						<img class="icon-media" src="filegambar/search.png" alt="">
					</div>
				</div>
			</div>

			<!-- Login-contact2 -->
			<div class="login-contact2">
				<nav class="nav-header">
					<ul class="nav nav-tabs" style="border: none; margin-left: 50px;">
						<li class="nav-item">
							<a href="sidebar_coba.php?url=dashboard">
								<button class="btn btn-secondary" type="button" style="width: 150%;">
							     	<img class="icon-media1" src="filegambar/ava.png" alt="">
							     	- ADMIN
							  	</button>
							 </a>
						</li>
						<br>
						<br>
						<li class="dropdown" style="z-index: 3;">
						  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						     <img class="icon-media1" src="filegambar/logocontact1.png" alt="">
						     - CONTACT US
						  	</button>
						  	<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background: rgba(3,3,3,0.8);;">
						    	<li >
									<a class="dropdown-item" href="#"><img class="img-link" src="filegambar/gmail.png"></a>
								</li>
								<li>
									<a class="dropdown-item" href="https://api.whatsapp.com/send?phone=6283804171163&text=Hallo%20kak"><img class="img-link" src="filegambar/wa.png"></a>									
								</li>
								<li>
									<a class="dropdown-item" href="https://instagram.com/awanethniccraft?igshid=1we10h9wamoly"><img class="img-link" src="filegambar/instagram.png"></a>
								</li>
								<li>
									<a class="dropdown-item" href="#"><img class="img-link" src="filegambar/twitter.png"></a>
								</li>
								<li>
									<a class="dropdown-item" href="#"><img class="img-link" src="filegambar/fb.png"></a>
								</li>
						  	</ul>
						</li>
						<br>
						<br>
						<li class="nav-item">
							<a href="form_pesan.php">
								<button class="btn btn-secondary"  type="button" style="width: 163%;">
							     	<img class="icon-media1" src="filegambar/shop.png" alt="">
							     	- SHOP
							  	</button>
							 </a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="content" style="background-color: lightgrey">
	
	<!-- Carousel 3 Slide -->
	<div class="container">

		<div class="row wrap-carousel" style="border-radius: 0px; padding: 20px; height: 400px; z-index: -1;">
			<div class="col-12 h-100">

				<div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
  					<ol class="carousel-indicators" style="z-index: 1;">
    					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  					</ol>
  					<div class="carousel-inner h-100">
    					<div class="carousel-item active h-100">
      						<img class="d-block w-100 h-100" src="filegambar/carousel1.jpg" alt="First slide">
    					</div>
    					<div class="carousel-item h-100">
      						<img class="d-block w-100 h-80" src="filegambar/carousel2.jpg" alt="Second slide">
    					</div>
    					<div class="carousel-item h-100">
      						<img class="d-block w-100 h-100" src="filegambar/carousel5.jpg" alt="Third slide">
    					</div>
  					</div>
  					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
				</div>

			</div>
		</div>
	</div>
		
	<!-- Tentang Web Kami -->
	<div class="container">
		
		<div class="row about-me" style="background-color: white; padding: 15px; border-radius: 0px;">
			<div class="col-12 h-100">
				<h3><b>Hallo #kawanethnic</b></h3>
				<h4><b>Selamat Datang di Boutique Tenun Indonesia</b></h4>
				<p style="font-size: 18px; text-align: justify;">
					Boutique Tenun Indonesia ini adalah salah satu akun resmi online shop di platform website ini
					Boutique Tenun Indonesia adalah salah satu toko yang menyediakan Kain Tenun Ethnic Nusantara terlengkap dan dengan harga terjangkau
					Selain berjualan, kami memiliki tujuan untuk menumbuhkan rasa bangga akan produk lokal dan untuk melestarikan salah satu warisan budaya bangsa yaitu tenun.
				</p>

			</div>
		</div>



		<!-- Kategori Dan Accessories -->
		<div class="row mx-10 sale mt-3" style="background-color: white; padding: 15px; height: 350px; border-radius: 0px; flex-direction: column;">
			<div class="d-flex">
				<h5 class="mr-5" style="color: #CD853F;"><b>ACCESSORIES</b></h5>
			</div>

			<div class="row mt-2 ml-0 mr-0" style="height: 200px;">
				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/masker.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>15. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Masker Tenun Ethnic</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/ikattenun.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>15. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Ikat Tenun Ethnic</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/totebag.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>95. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>T.Bag Tenun Ethnic</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/blanket.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>215. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Blanket Tenun Ethnic</b></span>
					</div>
				</div>
			</div>
		</div>

		<div class="row mx-10 sale mt-3" style="background-color: white; padding: 15px; height: 350px; border-radius: 0px; flex-direction: column;">
			<div class="d-flex">
				<h5 class="mr-5" style="color: #CD853F;"><b>OUTFIT BY AWANETHNIC</b></h5>
			</div>

			<div class="row mt-2 ml-0 mr-0" style="height: 200px;">
				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/kemejamen.jpeg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>200. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Kemeja Pria Ethnic</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/outerwomen.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>200. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Outer Cewek Ethnic</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/couple1.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>350. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Couple Set 1</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/couple3.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>350. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Couple Set 2</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/couple4.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>350. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Couple Set 3</b></span>
					</div>
				</div>

				<div class="col-2 h-100">	
					<div class="wrap-img-sale">
						<img class="w-120 h-100" src="filegambar/couple2.jpg" alt="">
					</div>
					<div class="harga" style="text-align: center;">
						<b>
						<span>Rp.</span>
						<span>350. 000</span>
						</b>
					</div>
					<div class="nama-produk" style="text-align: center;">
						<span><b>Couple Set 4</b></span>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="background-color: lightgrey; padding: 15px; height: 50px; border-radius: 0px;">
				<p style="color: grey; text-align: center;"><b>copyright 2021 @yovieandrian | IG:@awanethniccraft</b></p>
		</div>
	</div>
</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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
	
