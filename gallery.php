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
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="jquery-1.12.3.min.js"></script>
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
						<h2>Gallery</h2>
					</header>
					<br>
					<br>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 800px; margin: 0 auto">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="2.jpg" alt="">
						      <div class="carousel-caption">
						        <h3>Best Player</h3>
						      </div>
						    </div>
						    <div class="item">
						      <img src="3.jpg" alt="">
						      <div class="carousel-caption">
						        <h3>Best Manager</h3>
						      </div>
						    </div>
						    <div class="item">
						      <img src="1.jpg" alt="">
						      <div class="carousel-caption">
						        <h3>Murni Ekonomi Juara</h3>
						      </div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					

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
		  <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


	</body>
</html>