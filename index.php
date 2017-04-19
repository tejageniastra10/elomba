<!DOCTYPE HTML>
<!--
	Linear by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Home | Transistor Cup</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="home/js/skel.min.js"></script>
		<script src="home/js/skel-panels.min.js"></script>
		<script src="home/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="home/css/skel-noscript.css" />
			<link rel="stylesheet" href="home/css/style.css" />
			<link rel="stylesheet" href="home/css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">
	<?php
	session_start();
		if(isset($_SESSION['username'])) 
		{
			$username = $_SESSION['username']; 
      		$idtim    = $_SESSION['idtim'];
		}
		require_once("koneksi.php");
		?>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Homepage</a></li>
					<?php
					if(!isset($_SESSION['username']))
					{ ?>
						<li><a href="login1.php">Log in</a></li>
						<?php
					}
					else
					{
					?>
						<li><a href="#">Hi, <?=$username?></a></li>
						<li><a href="logout.php">Log Out</a></li>
					<?php } ?>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Transistor Cup</a></h1>
					<span class="tag"><span class="fa fa-map-marker"> Meazza Futsal, Jl. Teuku Umar Brt Denpasar, Bali</span></span><br>
					<span class="tag"><span class="fa fa-calendar"> 22 s/d 24 Juni 2016</span></span><br><br>
					<span class="tag"><img src="himakom.png" style="width: 100px; margin: 0 auto"></span>
					<span class="tag"><img src="transistor.png" style="width: 120px; margin: 0 auto"></span>
				</div>
			</div>
		</div>

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
					<h2>Selamat Datang</h2>
				</header>
				
				<hr />
				<div class="row">
					<section class="4u">
						<span class="pennant"><span class="fa fa-picture-o"></span></span>
						<h3>Gallery</h3>
						<p>Dokumentasi Transistor Cup 2016</p>
						<a href="gallery.php" class="button button-style1">GO !</a>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-gears"></span></span>
						<span class="pennant"><span class="fa fa-pencil"></span></span>
						<h3>SIPKOM</h3>
						<p>Sistem Informasi dan Pendaftaran Kompetisi</p>
						<a href="sipkom/sip.php" class="button button-style1">GO !</a>
					</section>
					<section class="4u">
						<span class="pennant"><span class="fa fa-question-circle"></span></span>
						<h3>Instruction</h3>
						<p>Petunjuk mengenai alur pendaftaran</p>
						<a href="petunjuk.php" class="button button-style1">GO !</a>
					</section>

				</div>
			</div>
		</div>

	<!-- Main -->

		<div id="main">
				<header>
					<center><h2>Fakta Menarik</h2></center>
				</header>
				<hr />
			<div id="content" class="container">
				
			<div class="row">
					<section class="6u">
						<a href="#" class="image full"><img src="Soccer-Background.jpg" alt=""></a>
						<header>
							<h2>Definisi Futsal</h2>
						</header>
						<p>Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki. Selain lima pemain utama, setiap regu juga diizinkan memiliki pemain cadangan. Tidak seperti permainan sepak bola dalam ruangan lainnya, lapangan futsal dibatasi garis, bukan net atau papan..</p>
					</section>				
					<section class="6u">
						<a href="#" class="image full"><img src="transistor.jpg" alt=""></a>
						<header>
							<h2>Transistor Cup</h2>
						</header>
						<p>Transistor Cup merupakan ajang kompetisi futsal yang merupakan program kerja dari Himpunan Mahasisiwa Jurusan Ilmu Komputer. Kompetisi ini bertujuan untuk mengembangkan bakat futsal pemain-pemain muda yang ada di Bali</p>
					</section>				
				</div>

				<div class="row">
					<section class="6u">
						<a href="#" class="image full"><img src="meazza.jpg" alt=""></a>
						<header>
							<h2>Meazza Futsal</h2>
						</header>
						<p>Meazza Futsal merupakan tempat berlangsungnya kompetisi futsal Transistor Cup tahun ini, beralamtkan di Jl. Teuku Umar Brt. No.88Z, Padangsambian Klod, Bali, Kota Denpasar, Bali.</p>
					</section>				
					<section class="6u">
						<a href="#" class="image full"><img src="afi.jpg" alt=""></a>
						<header>
							<h2>Liga Futsal Indonesia</h2>
						</header>
						<p>Liga Futsal Indonesia (LFI) atau Liga Futsal Nasional (Inggris: Indonesia Futsal League (IFL)) merupakan kompetisi utama futsal di tingkat nasional di Indonesia yang diselenggarakan oleh Badan Futsal Nasional PSSI. Kompetisi ini dimulai pada musim 2006-07.</p>
					</section>				
				</div>
			
			</div>
		</div>

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;More Matches , More Experience , And Become Powerful.&rdquo;</blockquote>
				</section>
			</div>
		</div>

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Contact Us</h2>
						<span class="byline">Ketua Panitia (081234567890)<br><br>Sekretaris (083654278676)</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-map-marker"><span></span></a></li>
						<h8>Kampus Ilmu Komputer Bukit - Jimbaran</h8>
				</section>
			</div>
		</div>

	
	</body>
</html>