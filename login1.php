<!DOCTYPE html>
<html >
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Selamat datang</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Random Login Form</title>

    
    
    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(fix.jpg);
	background-size: cover;
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 300px);
	z-index: 2;
}
@font-face{
         font-family: "Font transformer";
         src: url('Transformers Movie.ttf');
         }

.header div{
	float: left;
	color: #fff;
	font-family: 'Font transformer', sans-serif;
	font-size: 35px;
	font-weight: 200;
	
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login button[type=submit]{
	width: 250px;
	height: 30px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login button[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>
 
<?php 
	session_start();
			if(isset($_SESSION['username'])) 
			{
				header('location:index.php?fail=0'); 
			}
			require_once("koneksi.php");
		?>
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Transistor <span>Cup</span></div>
		</div>
		<br>
		<form class="form-inline" action="proseslogin.php" method="post">
		<div class="login">
				<input id="username"  type="text" placeholder="username" name="username"><br>
				<input id="password"  type="password" placeholder="password" name="password"><br>
				<button id="submit" type="submit" value="Login">Log in</button>
				<br><br>
			<?php
				if(!isset($_GET['failed']))
				{
					echo'';
				}
				else if($_GET['failed']==1)
				{
					echo '<b>Username atau password tidak boleh kosong !</b>';
				}
				else if($_GET['failed']==2)
				{
					echo '<b>Username belum terdaftar</b>';
				}
				else if ($_GET['failed']==3)
				{
					echo '<b>Username atau password salah</b>';
				}
				else if ($_GET['failed']==5)
				{
					echo '<b>Harap log in terlebih dahulu</b>';
				}
			?>
		</div>
		</form>

		
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    
  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-1.12.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
