<?php include("fonction.php"); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="There are some <?php echo $categ['Nom'] ?> for you">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title><?php echo $categ['Nom']; ?> Post(s)</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/All.css">
	</head>
	<body>
		<header>

			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -46px; width: 16px; height: 16px;"></a></li>
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/img/css_sprites.png" style="object-fit: none; object-position: -46px -46px; width: 16px; height: 16px;"></a></li>
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/img/css_sprites.png" style="object-fit: none; object-position: -46px -10px; width: 16px; height: 16px;"></a></li>
								<li><a href="#"><img src="<?php echo base_url(); ?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 16px; height: 16px;"></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="#"><span>Ratsimbazafy Andry Promo 10A num 46</span></a></li>
								<li><a href="#"><span class="lnr lnr-envelope"></span><span>andrypatrick8@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="<?php echo base_url(); ?>Home">
								<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/banner-ad.jpg" alt="Banner">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="<?php echo base_url(); ?>Home">Home</a></li>
							<li class="menu-has-children"><a href="">Post category</a>
								<ul>
									<?php foreach ($listeCateg as $liste) { ?>
										<li><a href="<?php echo base_url(); ?>Category/<?php echo $liste['Nom'] ?>-<?php echo $liste['IdCategorie']; ?>"><?php echo $liste['Nom']; ?></a></li>
									<?php } ?>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>

		<div class="site-main-container">
			<!-- Start top-post Area -->
			<!-- End top-post Area -->

			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h1 class="cat-title"><?php echo $categ['Nom']; ?> Post(s)</h1>
									<?php foreach ($listePost as $liste) { ?>
										<div class="single-latest-post row align-items-center">
										<div class="col-lg-5 post-left">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/<?php echo $liste['Image']; ?>.jpg" alt="<?php echo $liste['Titre']; ?>">
											</div>
											<ul class="tags">
												<li><a href="<?php echo base_url(); ?>Category/<?php echo $liste['NomCategorie'] ?>-<?php echo $liste['IdCategorie']; ?>"><?php echo $liste['NomCategorie']; ?></a></li>
											</ul>
										</div>
										<?php
											$string = transformSpace($liste['Titre']);
										?>
										<div class="col-lg-7 post-right">
											<a href="<?php echo base_url(); ?>Post/<?php echo $string ?>-<?php echo $liste['IdPost'] ?>">
												<h4><?php echo $liste['Titre']; ?></h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
											</ul>
											<p class="excert">
												<?php echo $liste['SousTitre']; ?>
											</p>
										</div>
									</div>
									<?php } ?>
							</div>
							<!-- End latest-post Area -->

							<!-- Start banner-ads Area -->
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							<!-- End relavent-story-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h1 class="title">Random post</h1>
									<div class="editors-pick-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/<?php echo $randomPost['Image']; ?>.jpg" alt="<?php echo $randomPost['Titre']; ?>">
											</div>
											<ul class="tags">
												<li><a href="<?php echo base_url(); ?>Category/<?php echo $randomPost['NomCategorie'] ?>-<?php echo $randomPost['IdCategorie']; ?>"><?php echo $randomPost['NomCategorie']; ?></a></li>
											</ul>
										</div>
										<?php
											$string = transformSpace($randomPost['Titre']);
										?>
										<div class="details">
											<a href="<?php echo base_url(); ?>Post/<?php echo $string ?>-<?php echo $randomPost['IdPost'] ?>">
												<h4 class="mt-20"><?php echo $randomPost['Titre']; ?></h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
											</ul>
											<p class="excert">
												<?php echo $randomPost['SousTitre']; ?>
											</p>
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget social-network-widget">
									<h6 class="title">Social Networks</h6>
									<ul class="social-list">
										<li class="d-flex justify-content-between align-items-center fb">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-facebook" aria-hidden="true"></i>
												<p>983 Likes</p>
											</div>
											<a href="#">Like our page</a>
										</li>
										<li class="d-flex justify-content-between align-items-center tw">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-twitter" aria-hidden="true"></i>
												<p>983 Followers</p>
											</div>
											<a href="#">Follow Us</a>
										</li>
										<li class="d-flex justify-content-between align-items-center yt">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
												<p>983 Subscriber</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
										<li class="d-flex justify-content-between align-items-center rs">
											<div class="icons d-flex flex-row align-items-center">
												<i class="fa fa-rss" aria-hidden="true"></i>
												<p>983 Subscribe</p>
											</div>
											<a href="#">Subscribe</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="footer-bottom row align-items-center">
					<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->
		<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="<?php echo base_url(); ?>assets/js/easing.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/superfish.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/mn-accordion.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	</body>
</html>
