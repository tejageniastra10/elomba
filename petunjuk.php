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
	<body>
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
						<li><a href="index.php">Homepage</a></li>
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
					<span class="tag"><img src="sipkom/himakom.png" style="width: 150px; margin: 0 auto"></span>
					<span class="tag"><img src="sipkom/transistor.png" style="width: 150px; margin: 0 auto"></span>
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
					<header>
						<h2>Instruction</h2>
						<span class="byline">Alur Pendaftaran Transistor Cup</span>
					</header>
					<h1>Step 1</h1>
						<p>- Tim yang ingin mengikuti kompetisi Transistor Cup dapat mendaftarkan timnya terlebih dahulu kepada panitia sesuai dengan prosedur.</p>
					<h1>Step 2</h1>
						<p>- Untuk mendapatkan username dan password peserta terlebihi dahulu melunasi biaya pendaftaran yang sudah ditetapkan.</p>
						<p>- Jika belum dapat melunasi biaya dapat mengajukan DP terlebihi dahulu sesuai dengan kesepakatan dengan panitia.</p>		
					<h1>Step 3</h1>
						<p>- Setelah mendapatkan username dan password, kunjungi homepage Transistor Cup lalu masukkan username dan password yang telah diberikan pada halaman login.</p>
						<p>- Klik menu SIPKOM atau Sistem Informasi dan Pendaftaran Kompetisi untuk mendaftarkan anggota tim anda.
					<h1>Step 4</h1>
						<p>- Mengisi identitas anggota tim, harap mengisi identitas dengan benar sesuai dengan peraturan yang telah ditetapkan.</p>
						<p>- Anda dapat mengedit ataupun menghapus anggota tim yang telah terdaftar.</p>

				</section>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;More Matches , More Experience , And Become Powerful.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

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