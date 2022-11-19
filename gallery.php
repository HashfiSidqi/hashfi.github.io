<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Alzara-Wedding</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
	<!-- Stylesheets -->
	<link href="assets/css/bootstrapp.css" rel="stylesheet">
	<link href="assets/css/fluidbox.min.css" rel="stylesheet">
	<link href="assets/css/font-icons.css" rel="stylesheet">
	<link href="assets/css/styless.css" rel="stylesheet">
	<link href="assets/css/responsivee.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="image/logoo.png">

</head>

<body>
	<?php require_once('Admin/Api/koneksi.php'); ?>
	<!-- start = Menu -->
	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
		<header>


			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<div data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
				</button>
				<a class="logo" href="#"><a class="navbar-brand page-scroll" href="#"><img src="assets/images/logg.png" alt="Logo"></a>
			</div>
			<div class="container">
				<!-- <a class="logo" href="#"><a class="navbar-brand page-scroll" href="#"><img src="image/title.png" alt="Logo"></a> -->
				<!-- <a class="logo" href="#"><img src="image/title.png" alt="Logo"></a> -->
				<ul class="main-menu visible-on-click" id="main-menu">
					<li><a href="index.php">BERANDA</a></li>
					<!-- <li><a href="http://localhost:8080/Alzara-Wedding/#WeddingTeam">WEDDING TEAM</a></li> -->
					<li><a href="#gallery">GALERI</a></li>
					<li><a href="http://localhost:8080/Alzara-Wedding/#kontak">KONTAK KAMI</a></li>
					<li><a href="http://localhost:8080/Alzara-Wedding/#alamat">ALAMAT</a></li>
					<li><a href="paket.php">PAKET PERNIKAHAN</a></li>
					<li><a href="simulasi.php">SIMULASI</a></li>
					<!-- <li><a href="aboutApps.php">TENTANG APLIKASI</a></li> -->
					<!-- <li><a href="Login.php">MASUK</a></li> -->
				</ul>
			</div>
	</nav>
	</header>
	<!-- end = menu -->


	<!-- start = konten save the date -->
	<?php
	$judul = mysqli_query($conn, "SELECT * FROM judul");
	while ($infoResepsi = mysqli_fetch_array($judul)) {
	?>
		<div class="main-slider" style="background:url(Admin/fileUpload/<?php echo $infoResepsi['fileGambar']; ?>); background-size:cover;">
			<div class="display-table center-text">
				<div class="display-table-cell">
					<div class="slider-content">
						</br>
						<h1 class="title"><?php echo $infoResepsi['judul']; ?></h1>
						<h2 class="title">Planner • Package • Organizer</h2>
					<?php
				}
					?>
					</div>
				</div>
			</div>
		</div>
		<!-- end = konten save the date -->

		<!-- <div class="video-container" background-size:cover;>
											<iframe allowfullscreen="" class="YOUTUBE-iframe-video" data-thumbnail-src="https://i.ytimg.com/**/********/*.jpg" frameborder="0" height="259" src="Admin/fileUpload/ALZARA-WEDDING_mp4.mp4" width="460" background-size:cover;></iframe>
										</div> -->

		<!-- <div class="video-container">
											<iframe width="560" height="315" src="Admin/fileUpload//ALZARA-WEDDING_mp4.mp4" frameborder="0"  allowfullscreen ></iframe>
										</div> -->

		<!-- start = gallery prewedding -->
		<section class="section galery-area center-text" id="gallery">

			<div class="container">
				<div class="row">

					<div class="col-sm-12">

						<div class="heading">
							<h2 class="title">Gallery Alzara</h2>
							<span class="heading-bottom"><i class="icon icon-star"></i></span>
						</div>
						<video width="1000" controls preload="metadata">
							<source src="Admin/fileUpload/ALZARA-WEDDING_mp4.mp4" type="video/mp4" />
							<source src="Admin/fileUpload/ALZARA-WEDDING_mp4.webm" type="video/webm" />
							<source src="Admin/fileUpload/ALZARA-WEDDING_mp4.ogv" type="video/ogg" />
						</video>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>
						<div class="image-gallery">

							<!-- start = untuk menampilkan foto -->
							<!-- nanti setting ukuran 600x400 -->
							<div class="row">
								<?php
								$galeri = mysqli_query($conn, "SELECT * FROM galery");
								while ($infoGaleri = mysqli_fetch_array($galeri)) {
								?>
									<?php
									$judul = $infoGaleri['judulPhoto'];
									// if (empty($judul)) {
									// echo "</br></br></br></br></br></br></br>";	
									// }else if (!empty($judul)){
									echo "<h3 class='desc margin-bottom'>" . $judul . "</h3>";
									// }
									?>
									<div class="col-md-4 col-sm-6">

										<a href="Admin/fileUpload/Galeri/<?php echo $infoGaleri['namaFile']; ?>" data-fluidbox><img class="margin-bottom" src="Admin/fileUpload/Galeri/<?php echo $infoGaleri['namaFile']; ?>" style="width:350px; height:350px;"></a>
										</br></br></br></br></br>
									</div>
								<?php
								}
								?>

							</div>
							<!-- end = untuk tampilkan foto -->


							<div class="heading" align="center">
								<h2 class="title">Alzara Wedding Team</h2>
								<span class="heading-bottom"><i class="icon icon-star"></i></span>
							</div>

							<!-- start = konten bagian cerita  -->
							<div class="wedding-details margin-bottom">
								<?php
								$cerita = mysqli_query($conn, "SELECT * FROM cerita");
								while ($infoCerita = mysqli_fetch_array($cerita)) {
								?>
									<?php
									$id = $infoCerita['idCerita'];
									if ($id % 2 == 0) {
									?>
										<div class="w-detail right">
											<img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita']; ?>">
										</div>
									<?php
									} else if ($id % 2 == 1) {
									?>
										<div class="w-detail left">
											<img src="Admin/fileUpload/<?php echo $infoCerita['gambarCerita']; ?>">
										</div>
									<?php
									}
									?>

								<?php
								}
								?>

							</div>

						</div>
					</div>
				</div>
		</section>
		<!-- end = galery prewedding -->

		<!-- <video autoplay loop muted>
    <source src="cat-herd.webm" type="video/webm" /> -->
		<!-- <source src="Admin/fileUpload//ALZARA-WEDDING_mp4.mp4"> -->
		<!-- <source src="cat-herd.mp4" type="video/mp4" /> -->
		<!-- </video>  -->

		<!-- start = footer  -->
		<footer>
			<div class="container center-text" id="sosmed">

				<div class="logo-wrapper">
					<a class="logo" href="#"><img src="assets/images/logg.png" alt="Logo Image"></a>
					<!-- <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> <i class="icon icon-star"></i> -->
				</div>
				</br>
				<ul class="social-icons">
					<?php
					$sosmed = mysqli_query($conn, "SELECT * FROM sosmed");
					while ($infoSosmed = mysqli_fetch_array($sosmed)) {


					?>
						<li><a href="<?php echo $infoSosmed['telpon']; ?>" target="_blank"><img src="image/what.png" style="width: 30px; height: 30px;"><i class=></i></a></br>WhatsApp</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li><a href="<?php echo $infoSosmed['email']; ?>" target="_blank"><img src="image/email.png" style="width: 30px; height: 30px;"><i class=></i></a></br>Email</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li><a href="<?php echo $infoSosmed['ig']; ?>" target="_blank"><img src="image/ig.png" style="width: 30px; height: 30px;"><i class=></i></a></br>Instagram</li>
					<?php
					}
					?>
				</ul>
				<!-- <ul class="footer-links">
				<li><a href="index.php">BERANDA</a></li>
				<li><a href="#sambuta">SAMBUTAN</a></li>
				<li><a href="#ceritaKita">CERITA KITA</a></li>
				<li><a href="#gallery">GALERI</a></li>
				<li><a href="listTamu.php">TAMU UNDANGAN</a></li>
			</ul> -->
				<p class="copyright"> Copyright &copy;<a href="https://www.instagram.com/alzaraweddingplanner/" target="_blank">ALZARA WEDDING PLANNER</a>
			</div>
		</footer>
		<!-- end = footer -->

		<script src="assets/js/jquery-3.1.1.min.js"></script>
		<script src="assets/js/tether.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="assets/js/jquery.fluidbox.min.js"></script>
		<script src="assets/js/scripts.js"></script>

		<!-- GetButton.io widget -->
		<script type="text/javascript">
			(function() {
				var options = {
					whatsapp: "+628111666664", // WhatsApp number
					call_to_action: "Hubungi Kami", // Call to action
					position: "right", // Position may be 'right' or 'left'
					pre_filled_message: "Halo Alzara, ingin tanya soal wedding..", // WhatsApp pre-filled message
				};
				var proto = document.location.protocol,
					host = "getbutton.io",
					url = proto + "//static." + host;
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = url + '/widget-send-button/js/init.js';
				s.onload = function() {
					WhWidgetSendButton.init(host, proto, options);
				};
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			})();
		</script>
		<!-- /GetButton.io widget -->

		<!-- BUTTON LAIN
	
	<a href="https://api.whatsapp.com/send?phone=6281289122055&text=Hallo,%20Kak%20Saya%20Mau%20Konsultasi" target="_blank">
			<img src="image/buton.png" class="wabutton" alt="Whatsapp-Button" />
		</a>
		<style>
			.wabutton {
				width: 190px;
				height: 35px;
				position: fixed;
				bottom: 20px;
				right: 0px;
				z-index: 100;
			}
		</style> -->

</body>

</html>