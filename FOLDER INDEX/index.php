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
				<a class="logo" href="#"><a class="navbar-brand page-scroll" href=""><img src="assets/images/logg.png" alt="Logo"></a>
			</div>
			<div class="container">
				<!-- <a class="logo" href="#"><a class="navbar-brand page-scroll" href="#"><img src="image/title.png" alt="Logo"></a> -->
				<!-- <a class="logo" href="#"><img src="image/title.png" alt="Logo"></a> -->
				<ul class="main-menu visible-on-click" id="main-menu">
					<li><a href="index.php">BERANDA</a></li>
					<!-- <li><a href="#WeddingTeam">WEDDING TEAM</a></li> -->
					<li><a href="#gallery">GALERI</a></li>
					<li><a href="#kontak">KONTAK KAMI</a></li>
					<li><a href="#alamat">ALAMAT</a></li>
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
					<?php
				}
					?>
					<h2 class="title">Planner ??? Package ??? Organizer</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- end = konten save the date -->

		<!-- start = konten sambutan -->
		<section class="section story-area center-text" id="sambutan">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">

						<div class="heading">

							</br>
							</br>
							</br>
							</br>
							<a class="logo" href="#"><img src="image/b1.png" alt="Logo"></a>
							<h2 class="title">Mengenal Konsep Pernikahan</h2>
							<span class="heading-bottom"><i class="icon icon-star"></i></span>
						</div>
						<!-- statrt = untuk menampilkan sambutan -->
						<?php
						$konsep_pernikahan = mysqli_query($conn, "SELECT * FROM konsep_pernikahan");
						while ($tampilpembukaan = mysqli_fetch_array($konsep_pernikahan)) {
						?>
							<!-- bagian pembuka sambutan-->
							<p class="desc margin-bottom"><?php echo $tampilpembukaan['awalan']; ?>
								</br>
								</br>
								<!-- bagian isi sambutan -->
								<?php echo $tampilpembukaan['isi']; ?>
								</br>
								</br>
								<!-- bagian penutup sambutan -->
								<?php echo $tampilpembukaan['penutupan']; ?>
							</p>
						<?php } ?>
						<!-- end = untuk menampilkan sambutan -->

					</div>
				</div>
			</div>
			<h3 class="title">____________________________________</h3>
		</section>
		<!-- end =konten sambutan -->

		<!-- start = konten sambutan -->
		<section class="section story-area center-text" id="sambutan">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">

						<div class="heading">
							<a class="logo" href="#"><img src="image/b2.png" alt="Logo"></a>
							<h2 class="title">Mengenal Dokumen Pernikahan</h2>
							<span class="heading-bottom"><i class="icon icon-star"></i></span>
						</div>
						<!-- statrt = untuk menampilkan sambutan -->
						<?php
						$dokumen_pernikahan = mysqli_query($conn, "SELECT * FROM dokumen_pernikahan");
						while ($tampilpembukaan = mysqli_fetch_array($dokumen_pernikahan)) {
						?>
							<!-- bagian pembuka sambutan-->
							<p class="desc margin-bottom"><?php echo $tampilpembukaan['awalan']; ?>
								</br>
								<!-- bagian isi sambutan -->
								<?php echo $tampilpembukaan['isi']; ?>
								</br>
								<!-- bagian penutup sambutan -->
								<?php echo $tampilpembukaan['penutupan']; ?>
							</p>
						<?php } ?>
						<!-- end = untuk menampilkan sambutan -->

					</div>
				</div>
			</div>
			<h3 class="title">____________________________________</h3>
		</section>
		<!-- end =konten sambutan -->

		<!-- start = konten sambutan -->
		<section class="section story-area center-text" id="sambutan">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">

						<div class="heading">
							<a class="logo" href="#"><img src="image/b3.png" alt="Logo"></a>
							<h2 class="title">Mengenal Wedding Planner</h2>
							<span class="heading-bottom"><i class="icon icon-star"></i></span>
						</div>
						<!-- statrt = untuk menampilkan sambutan -->
						<?php
						$wedding_planner = mysqli_query($conn, "SELECT * FROM wedding_planner");
						while ($tampilpembukaan = mysqli_fetch_array($wedding_planner)) {
						?>
							<!-- bagian pembuka sambutan-->
							<p class="desc margin-bottom"><?php echo $tampilpembukaan['awalan']; ?>
								</br>
								</br>
								<!-- bagian isi sambutan -->
								<?php echo $tampilpembukaan['isi']; ?>
								</br>
								</br>
								<!-- bagian penutup sambutan -->
								<?php echo $tampilpembukaan['penutupan']; ?>
							</p>
						<?php } ?>
						<!-- end = untuk menampilkan sambutan -->

					</div>
				</div>
			</div>
		</section>
		<!-- end =konten sambutan -->

		<!-- start = Coutdown acara dimulai resepsi -->
		<section class="section counter-area center-text" id="kontak">
			<div class="container">
				<div class="row">

					<div class="col-sm-12">
						<div class="heading">
							<h2 class="title">More Enquiry :</h2>
							<span class="heading-bottom"><i class="color-white icon icon-star"></i></span></br>
							<?php
							$sosmed = mysqli_query($conn, "SELECT * FROM sosmed");
							while ($infoSosmed = mysqli_fetch_array($sosmed)) {


							?>
								<a href="<?php echo $infoSosmed['telpon']; ?>" target="_blank">????08111666664</a>&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="<?php echo $infoSosmed['email']; ?>" target="_blank">???? alzarawedding@gmail.com</a>&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="https://www.google.com/maps/place/Jl.+Cipaku+Indah+II+No.11a,+Ledeng,+Kec.+Cidadap,+Kota+Bandung,+Jawa+Barat+40143/@-6.860848,107.596652,16z/data=!4m5!3m4!1s0x2e68e6b8b9357697:0xd1c71959b2822e26!8m2!3d-6.8608485!4d107.5966515?hl=id" target="_blank">???? Bandung - Cimahi</a>
							<?php } ?>



						</div>
					</div>

					<div class="col-sm-2"></div>
					<div class="col-sm-8">

						<div class="remaining-time">



						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- end = Coutdown acara dimulai resepsi -->


		<!-- start = konten cerita -->
		<section class="section w-details-area center-text" id="WeddingTeam">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">

						<div class="heading">
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
							<!-- end = konten bagain cerita -->

						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end = konten cerita -->

		<!-- start = wedding ceremoni -->
		<section class="section ceremony-area center-text" id="wedding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<div class="heading">
							<h2 class="title">Wedding & Ceremonies</h2>
							<span class="heading-bottom"><i class="color-white icon icon-star"></i></span>
						</div>

						<div class="ceremony margin-bottom">
							<?php
							$adat = mysqli_query($conn, "SELECT * FROM adat");
							while ($infoAdat = mysqli_fetch_array($adat)) {
								echo "<p class='desc'>" . $infoAdat['penjelasan'] . "</p>";
							}
							?>


						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end = wedding ceremoni -->


		<!-- start = gallery prewedding -->
		<section class="section galery-area center-text" id="gallery">
			<div class="container">
				<div class="row">

					<div class="col-sm-12">

						<div class="heading">
							<h2 class="title">Gallery Alzara</h2>
							<span class="heading-bottom"><i class="icon icon-star"></i></span>
						</div>
						<video width="1110" controls preload="metadata">
							<source src="Admin/fileUpload/ALZARA-WEDDING_mp4.mp4" type="video/mp4" />
							<source src="Admin/fileUpload/ALZARA-WEDDING_mp4.webm" type="video/webm" />
							<source src="Admin/fileUpload/ALZARA-WEDDING_mp4.ogv" type="video/ogg" />
						</video>

						<div class="image-gallery">

							<!-- start = untuk menampilkan foto -->
							<!-- nanti setting ukuran 600x400 -->
							<div class="row">
								<?php
								$galeri = mysqli_query($conn, "SELECT * FROM galery LIMIT 6");
								while ($infoGaleri = mysqli_fetch_array($galeri)) {


								?>
									<div class="col-md-4 col-sm-6">
										<a href="Admin/fileUpload/Galeri/<?php echo $infoGaleri['namaFile']; ?>" data-fluidbox><img class="margin-bottom" src="Admin/fileUpload/Galeri/<?php echo $infoGaleri['namaFile']; ?>" style="width:350px; height:400px;"></a>
									</div>
								<?php
								}
								?>


							</div>
							<!-- end = untuk tampilkan foto -->

							<a class="btn-2 margin-bottom gallery-btn" href="gallery.php">LIHAT SEMUA FOTO</a>

						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- end = galery prewedding -->


		<!-- satart = lokasi prewed -->
		<section class="contact-area" id="alamat">
			<div class="contact-wrapper section float-left">
				<div class="container">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<div class="heading">
								<h3 class="title">Alamat Lokasi</h3></br>
								<p>Jl. Cipaku Indah II No.11a, Ledeng, Kec. Cidadap, Kota Bandung, Jawa Barat 40143.</p>
								<span class="heading-bottom"><i class="icon icon-star"></i></span>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.248083092718!2d107.5944628141441!3d-6.860843169029363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6b8b9357697%3A0xd1c71959b2822e26!2sJl.%20Cipaku%20Indah%20II%20No.11a%2C%20Ledeng%2C%20Kec.%20Cidadap%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040143!5e0!3m2!1sid!2sid!4v1614208018101!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- start = foto gedung -->
			<!-- <div class="contact-wrapper section float-right">
			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<div class="margin-bottom">
							<img src="Admin/fileUpload/
							" style="width :535px; height :350px;">
						</div>
					</div>
				</div>
			</div>
		</div> -->
			<!-- end foto gedung -->


		</section>
		<!-- end = lokasi prewed -->


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



</body>

</html>