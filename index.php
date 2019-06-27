<!-- <?php

include_once("config.php");
?> -->

<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>pemesanan tiket bola</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<?php include 'header.php'; ?>

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h2>Football Ticket <br>League Indonesia!</h2>
									<p>Selamat Datang di Website Penjualan Tiket Sepak Bola</p>
									<p>Tak perlu ribet antri untuk bisa nonton tim kesayangan anda!</p>
									<!-- <div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div> -->
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									&nbsp;<img class="img-fluid" src="img/banner/arsenal.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 ">
								<div class="banner-content">
									<h2>Football Ticket <br>League Indonesia!</h2>
									<p>Selamat Datang di Website Penjualan Tiket Sepak Bola</p>
									<p>Tak perlu ribet antri untuk bisa nonton tim kesayangan anda!</p>
									<!-- div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div> -->
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									&nbsp;<img class="img-fluid" src="img/banner/arsenal.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
		<?php if ($_GET) { 
		$kode = $_GET['Pesan'];
		?>
	<div class="alert alert-primary" role="alert">
  		Tiket Anda Berhasil Terdaftar, <b style="color: #000">KODE PEMESANAN : <?= $kode ?></b>
	</div>
	<?php } ?>

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<?php
include "config.php";

$query = mysqli_query($mysqli,"SELECT * FROM pertandingan where liga = 'liga1' limit 8");?>
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>LIGA 1</h1>
							<p>Recomended ticket</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php if(mysqli_num_rows($query)>0){ ?>
						<?php
            while($data = mysqli_fetch_array($query)){
        ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="Liga 1/<?php echo $data['gambar'];?>" alt="">
							<div class="product-details">
								<h6><?php echo $data["partai_pertandingan"];?></h6>
								<div class="price">

									Rp&nbsp;<h6><?php echo $data["harga_tiket"];?></h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">

									<a href="pemesanan.php?tiket=<?= $data['kode_pertandingan'] ?>" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">pesan</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php }} ?>
					</div>
				</div>
			</div>
			<?php
include "config.php";

$query = mysqli_query($mysqli,"SELECT * FROM pertandingan where liga = 'liga2' limit 8");?>
				<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>LIGA 2</h1>
							<p>Recomended ticket</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php if(mysqli_num_rows($query)>0){ ?>
						<?php
            while($data = mysqli_fetch_array($query)){
        ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="Liga 2/<?php echo $data['gambar'];?>" alt="">
							<div class="product-details">
								<h6><?php echo $data["partai_pertandingan"];?></h6>
								<div class="price">

									Rp&nbsp;<h6><?php echo $data["harga_tiket"];?></h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">pesan</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php }} ?>
					</div>
				</div>
			</div>
		</div>	

		<!-- single product slide -->
		<?php
include "config.php";

$query = mysqli_query($mysqli,"SELECT * FROM pertandingan where liga = 'pialapresiden' limit 8");?>
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>PIALA PRESIDEN</h1>
							<p>Recomended ticket</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php if(mysqli_num_rows($query)>0){ ?>
						<?php
            while($data = mysqli_fetch_array($query)){
        ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="Piala Presiden/<?php echo $data['gambar'];?>" alt="">
							<div class="product-details">
								<h6><?php echo $data["partai_pertandingan"];?></h6>
								<div class="price">

									Rp&nbsp;<h6><?php echo $data["harga_tiket"];?></h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">pesan</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php }} ?>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Whatsapp : 	- 0822 3929 7595 DIKY<br>
										- 0878 3891 6161 YUNUS<br>
										- 0822 6634 4725 IQBAL<br>
							Instagram : - bolatiket

						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
?>