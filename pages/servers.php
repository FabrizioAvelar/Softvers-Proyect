<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location: ../index.php");
		session_destroy();
	}
?>

<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../css/style_servers.css" rel="stylesheet" type="text/css">
<link href="../css/style_nav.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://aurea.es/style.css?nocache=" type="text/css" media="screen" />

<title>Servers</title>
</head>

<body>
	<nav>
		<input type="checkbox" id="cbxBar">
		<label for="cbxBar" class="drawner"><img src="../img/menubar.png" width="40px"></label>
		<img src="../img/gamevers_logo_web_sf.png" width="330px" id="logoCel">
		<ul class="ulMenu">
			<li>
				<input type="button" id="listmenu" value="INICIO">
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
				<input type="button" id="listmenu" value="CONTACTO">
			</li>
			<li>
				<input type="button" id="listmenu" value="MIS SERVIDORES">
			</li>
			<li>
				<input type="button" id="listmenu" value="<?php echo(strtoupper($_SESSION['username'])); ?>" onClick="myFunction()">
				<ul id="ulnav">
					<input type="button" id="listmenus" value="PERFIL">
					<input type="button" id="listmenus" value="CONFIGURACION">
					<input type="button" id="listmenus" value="SALIR" onClick="location.href='../forms/logoutform.php'">
				</ul>
			</li>
		</ul>
	</nav>
	<section>
		<ul id="list">
			<?php
				include("../forms/serversform.php");
			?>
			<input type="button" id="listserv" value="+ AGREGAR SERVIDOR">
		</ul>
	</section>
	<aside id="asidepropieties">
		<ul id="select-propieties">
			<input type="button" id="listpropieties" value="SERVIDOR" onClick="server()">
			<input type="button" id="listpropieties" value="CONFIGURACION">
			<input type="button" id="listpropieties" value="JUGADORES" onClick="players()">
			<input type="button" id="listpropieties" value="CONSOLA">
			<input type="button" id="listpropieties" value="VERSION">
			<input type="button" id="listpropieties" value="ARCHIVOS">
			<input type="button" id="listpropieties" value="MUNDOS">
		</ul>
		<ul>
			
		</ul>
	</aside>
</body>
<script src="../js/eventsserver.js"></script>
</html>