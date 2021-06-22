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
				<input type="button" id="listmenu" value="LOGIN">
			</li>
			<li>
				<input type="button" id="listmenu" value="SIGNUP">
			</li>
		</ul>
	</nav>
</body>
</html>