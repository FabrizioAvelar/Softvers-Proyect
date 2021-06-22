<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("location: loggedcontact.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../css/style_nav.css" rel="stylesheet" type="text/css">
<link href="../css/style_contact.css" rel="stylesheet" type="text/css">
<title>Contacto</title>
</head>

<body>
	<nav>
		<input type="checkbox" id="cbxBar">
		<label for="cbxBar" class="drawner"><img src="../img/menubar.png" width="40px"></label>
		<img src="../img/gamevers_logo_web_sf.png" width="330px" id="logoCel">
		<ul class="ulMenu">
			<li>
				<input type="button" id="listmenu" value="INICIO" onclick="location.href='../index.php'">
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
				<input type="button" id="listmenu" value="CONTACTO" onclick="location.href='contact.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="LOGIN" onclick="location.href='login.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="SIGNUP" onclick="location.href='signup.php'">
			</li>
		</ul>
	</nav>
	<section>
		<form action="" method="post" id="action">
			<ul>
				<li>
					<label for="name">Nombre</label><br>
					<input type="text" name="name" id="name" placeholder="Juan Perez"><br>
				</li>
				<li>
					<label for="subjet">Asunto</label><br>
					<input type="text" name="subjet" id="subjet" placeholder="Detalles"><br>
				</li>
				<li>
					<label for="email">Correo electronico</label><br>
					<input type="mail" name="email" id="email" placeholder="juan@ejemplo.com"><br>
				</li>
				<li>
					<label for="message">Mensaje</label><br>
					<textarea class="message" name="message"></textarea>
				</li>
				<li>
					<input type="submit" name="submit" id="submit" value="Enviar">
				</li>
			</ul>
		</form>
	</section>
</body>
</html>