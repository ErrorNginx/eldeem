<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome Eldeem</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="media ELDEEM" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/ldm_trans.png' ?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
	<?php
	error_reporting(0);
	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	?>

</head>

<body>


	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<div class="nav-menu-container">
				<div class="header-inner">
					<h1><a href="<?php echo base_url() . '' ?>">Eldeem<span>.</span></a></h1>
					<nav role="navigation">
						<ul>
							<li><a href="<?php echo base_url() . '' ?>">Home</a></li>
							<li><a href="<?php echo base_url() . 'artikel' ?>">Blog</a></li>
							<li><a href="<?php echo base_url() . 'gallery' ?>">Gallery</a></li>
							<li><a href="<?php echo base_url() . 'about' ?>">About</a></li>
							<li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/walpaper1.jpg' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2>Lembaga Dakwa Mahasiswa</h2>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/test.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2>Lembaga Dakwa Mahasiswal</h2>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/test.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2>Lembaga Dakwa Mahasiswat</h2>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<!--==========================
		Featured Services Section
		============================-->
		<section id="featured-services">
			<div class="container">
				<div class="row">

					<div class="col">
						<i class="ion-ios-speedometer-outline"></i>
						<h1 class="text-center"><a href="">visi</a></h1>
						<p class="text-center">Menjadi unsur peubah menuju terciptanya masyarakat kampus dan sekitarnya yang berpegang teguh pada nilai - nilai alquran dann as-sunah</p>
					</div>

					<div class="col">
						<i class="ion-ios-stopwatch-outline"></i>
						<h1 class="text-center"><a>misi</a></h1>
						<p class="text-center">1. Membentuk kader-kader rabbani yang muntijah</p>
						<p class="text-center">2. Membentuk jaringan dakwah strategis disetiap element intra dan ekstra kampus</p>
						<p class="text-center">3. Memberikan kontribusi positif bagi perkembangan dakwah lingkungan kampus dan masyarakat luar.</p>
						<p class="text-center">4. Memberikan konstribusi positif bagi kemajuan moralitas, intelektualitas, dan kredibilitas kampus</p>

					</div>
				</div>
			</div>
		</section><!-- #featured-services -->

		<div id="fh5co-why-us" class="animate-box">
			<div class="container">
				 <div class="header text-center">
                        <h3 class="title">NILAI Lembaga Dakwah Mahasiswa</h3>
                        <hr size="10px" width="25%">
                    </div>
				<div class="row">

					<div class="col-md-3 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/30.svg' ?>" class="img-responsive"></span>
						<h3>Islam</h3>
						<p>Al-Qur’an dan Sunnah sebagai Pedoman Hidup.</p>
						
					</div>
					<div class="col-md-3 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/18.svg' ?>" class="img-responsive"></span>
						<h3>Ukhuwah</h3>
						<p>Persaudaraan Islam untuk saling menjaga dan menguatkan dalam keimanan.</p>
						
					</div>
					<div class="col-md-3 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/27.svg' ?>" class="img-responsive"></span>
						<h3>Intelek</h3>
						<p>Memiliki Wawasan yang luas dan Keilmuan yang mendalam.</p>
						
					</div>

					<div class="col-md-3 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/7.svg' ?>" class="img-responsive"></span>
						<h3>Indonesia</h3>
						<p>Putra Putri indonesia yang senantiasa akan merawat dan mengharumkan bangsa Indoensia.</p>
						
					</div>
				</div>
			</div>
		</div>


		<div class="fh5co-section-with-image">

			<img src="<?php echo base_url() . 'theme/images/image_1.jpg' ?>" alt="" class="img-responsive">
			<div class="fh5co-box animate-box">
				<h2>Kegiatan UKM LDM UIN Bandung</h2>
				<p>Yuk cek, kegiatan akan datang Di LDM </p>
				<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Lets Go <i class="icon-arrow-right"></i></a></p>
			</div>

		</div>



		<div id="fh5co-blog" class="animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>ARTIKEL TERBARU LEMBAGA DAKWAH MAHASISWA</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php
					foreach ($post->result_array() as $j) :
						$post_id = $j['tulisan_id'];
						$post_judul = $j['tulisan_judul'];
						$post_isi = $j['tulisan_isi'];
						$post_author = $j['tulisan_author'];
						$post_image = $j['tulisan_gambar'];
						$post_tglpost = $j['tanggal'];
						$post_slug = $j['tulisan_slug'];
						?>
						<div class="col-md-4">
							<a class="fh5co-entry" href="<?php echo base_url() . 'artikel/' . $post_slug; ?>">
								<figure>
									<img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" alt="" class="img-responsive">
								</figure>
								<div class="fh5co-copy">
									<h3><?php echo $post_judul; ?></h3>
									<span class="fh5co-date"><?php echo $post_tglpost . ' | ' . $post_author; ?></span>
									<?php echo limit_words($post_isi, 20) . '...'; ?>
								</div>
							</a>
						</div>
					<?php endforeach; ?>

					<div class="col-md-12 text-center">
						<p><a href="<?php echo base_url() . 'artikel' ?>" class="btn btn-primary btn-outline with-arrow">Let's Go <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>


		<?php $this->load->view('v_footer'); ?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>