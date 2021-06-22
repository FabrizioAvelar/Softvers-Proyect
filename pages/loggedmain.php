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
<link href="../css/style_index.css" rel="stylesheet" type="text/css">
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
				<a href="../index.php">INICIO</a>
			</li>
			<li>
				<a>SERVERS</a>
			</li>
			<li>
				<a>ACERCA DE</a>
			</li>
			<div id="logo">
				<a href="../index.php"><img src="../img/gamevers_logo_web_sf.png" width="400px"></a>
			</div>
			<li>
				<a href="contact.php">CONTACTO</a>
			</li>
			<li>
				<a href="servers.php">MIS SERVIDORES</a>
			</li>
			<li>
				<a href="profile.php">
					<?php
						echo(strtoupper($_SESSION['username']));
					?>
				</a>
			</li>
		</ul>
	</nav>
</body>
</html>