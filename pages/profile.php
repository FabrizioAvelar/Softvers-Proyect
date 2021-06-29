<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location: ../index.php");
		session_destroy();
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../css/style_profile.css" rel="stylesheet" type="text/css">
<link href="../css/style_nav.css" rel="stylesheet" type="text/css">	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Main</title>
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
					<a href="lo"><img src="../img/gamevers_logo_web_sf.png" width="400px"></a>
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
	<aside id="asidepropieties">
		<ul id="select-propieties">
			<input type="button" id="listpropieties" value="PERFIL">
			<input type="button" id="listpropieties" value="VERIFICAR E-MAIL">
		</ul>
		<ul class="elements">
			<?php 
				
			?>
		</ul>
	</aside>
</body>
<script src="../js/eventsProfile.js"></script>
</html>