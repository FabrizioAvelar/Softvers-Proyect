<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("location: pages/loggedmain.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/style_index.css" rel="stylesheet" type="text/css">
<link href="css/style_nav.css" rel="stylesheet" type="text/css">
<link href="css/slider.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Main</title>
</head>

<body>
	<nav>
		<input type="checkbox" id="cbxBar">
		<label for="cbxBar" class="drawner"><img src="img/menubar.png" width="40px"></label>
		<img src="img/gamevers_logo_web_sf.png" width="330px" id="logoCel">
		<ul class="ulMenu">
			<li>
				<input type="button" id="listmenu" value="INICIO" onclick="location.href='pages/login.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="SERVERS">
			</li>
			<li>
				<input type="button" id="listmenu" value="ACERCA DE">
			</li>
			<li>
				<div id="logo">
					<a href="../index.php"><img src="../img/gamevers_logo_web_sf.png" width="400px"></a>
				</div>
			</li>
			<li>
				<input type="button" id="listmenu" value="CONTACTO" onclick="location.href='pages/contact.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="LOGIN" onclick="location.href='pages/login.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="SIGNUP" onclick="location.href='pages/signup.php'">
			</li>
		</ul>
	</nav>
	<section>
		<div class="slideshow-container">

		  <div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			<img src="img/mine1.jpg" style="width:100%">
			<div class="text">NUEVOS SERVIDORES MINECRAFT DISPONIBLES</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
			<img src="img/mine2.jpg" style="width:100%">
			<div class="text">AHORA TIENES UN NUEVO MUNDO POR EXPLORAR</div>
		  </div>

		  <div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="img/mine3.jpg" style="width:100%">
			<div class="text">PROXIMAMENTE NUEVOS MUNDOS</div>
		  </div>

		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>
	</section>
</body>
<script src="js/slider.js"></script>
</html>