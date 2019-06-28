<?php require 'header.php'; ?>

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
									<img class="img-fluid" src="img/banner/arsenal.png" alt="">
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
									<img class="img-fluid" src="img/banner/arsenal.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<?php
include "koneksi.php";

$query = mysqli_query($koneksi,"SELECT * FROM pertandingan where liga = 'liga1' limit 8");?>
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
							<img class="img-fluid" src="img/product/liga1/<?php echo $data['gambar'];?>" alt="">
							<div class="product-details">
								<h6><?php echo $data["partai_pertandingan"];?></h6>
								<div class="price">

									Rp&nbsp;<h6><?php echo $data["harga_tiket"];?></h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">

									<a href="pemesanan.php?kode_pertandingan=<?=$data['kode_pertandingan'];?>&liga= liga 1" class="social-info">
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
include "koneksi.php";

$query = mysqli_query($koneksi,"SELECT * FROM pertandingan where liga = 'liga2' limit 8");?>
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
							<img class="img-fluid" src="img/product/liga2/<?php echo $data['gambar'];?>" alt="">
							<div class="product-details">
								<h6><?php echo $data["partai_pertandingan"];?></h6>
								<div class="price">

									Rp&nbsp;<h6><?php echo $data["harga_tiket"];?></h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">
									<a href="pemesanan.php?kode_pertandingan=<?=$data['kode_pertandingan'];?>&liga= liga 2" class="social-info">
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
include "koneksi.php";

$query = mysqli_query($koneksi,"SELECT * FROM pertandingan where liga = 'pialapresiden' limit 8");?>
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
							<img class="img-fluid" src="img/product/pialapresiden/<?php echo $data['gambar'];?>" alt="">
							<div class="product-details">
								<h6><?php echo $data["partai_pertandingan"];?></h6>
								<div class="price">

									Rp&nbsp;<h6><?php echo $data["harga_tiket"];?></h6>
									<!-- <h6 class="l-through">$210.00</h6> -->
								</div>
								<div class="prd-bottom">
									<a href="pemesanan.php?kode_pertandingan=<?=$data['kode_pertandingan'];?>&liga= pialapresiden" class="social-info">
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
			</div>s

	</section>
	<!-- end product Area -->

<?php include "footer.php"; ?>	
</body>

</html>