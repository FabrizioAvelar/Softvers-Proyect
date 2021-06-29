<?php
	session_start();
	if(!isset($_SESSION['username'])){
		session_destroy();
		header("location: contact.php");
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
				<input type="button" id="listmenu" value="INICIO" onclick="location.href='loggedmain.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="SERVERS">
			</li>
			<li>
				<input type="button" id="listmenu" value="ACERCA DE">
			</li>
			<li>
				<div id="logo">
					<a href="loggedmain.php"><img src="../img/gamevers_logo_web_sf.png" width="400px"></a>
				</div>
			</li>
			<li>
				<input type="button" id="listmenu" value="CONTACTO" onclick="location.href='contact.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="MIS SERVIDORES" onclick="location.href='servers.php'">
			</li>
			<li class="myDropdown">
				<input type="button" class="dropbtn" id="listmenu" value="<?php echo(strtoupper($_SESSION['username'])); ?>" onClick="myFunction()">
				<div id="ulnav" class="dropdown-content">
					<input type="button" id="listmenus" value="PERFIL">
					<input type="button" id="listmenus" value="CONFIGURACION">
					<input type="button" id="listmenus" value="SALIR" onClick="location.href='../forms/logoutform.php'">
				</div>
			</li>
		</ul>
	</nav>
	<section>
		<form action="" method="post" id="action">
			<ul>
				<li>
					<label for="name">Nombre</label><br>
					<input type="text" name="name" id="name" placeholder="Nombre"><br>
				</li>
				<li>
					<label for="subjet">Asunto</label><br>
					<input type="text" name="subjet" id="subjet" placeholder="Asunto"><br>
				</li>
				<li>
					<label for="email">Correo electronico</label><br>
					<input type="mail" name="email" id="email" placeholder="Correo electronico"><br>
				</li>
				<li>
					<label for="message">Mensaje</label><br>
					<textarea class="message" name="message"></textarea>
				</li>
				<li>
					<input type="submit" name="submit" id="submit" value="Ingresar">
				</li>
			</ul>
		</form>
	</section>
</body>
<script src="../js/eventsserver.js"></script>	
</html>