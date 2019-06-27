<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/pssi.png" width="150px" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Liga 1</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="jadwal1.php">Jadwal Pertandingan</a></li>
									<li class="nav-item"><a class="nav-link" href="kategori1.php">tiket liga 1</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Liga 2</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="jadwal2.php">Jadwal Pertandingan</a></li>
									<li class="nav-item"><a class="nav-link" href="kategori2.php">tiket liga 2</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Piala Presiden</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="Jadwalpres.php">Jadwal Pertandingan</a></li>
									<li class="nav-item"><a class="nav-link" href="kategoripres.php">tiket piala presiden</a></li>
								</ul>
							</li>
							
							<li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
						</ul> 
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="keranjang.php" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->