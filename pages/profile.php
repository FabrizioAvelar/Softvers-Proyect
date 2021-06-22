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
					<input type="button" id="listmenus" value="SALIR">
				</ul>
			</li>
		</ul>
	</nav>
	<section>
		<div class="section">
			<form method="post" id="section">
				<ul>
					<li>
						<input type="submit" name="Informacion" value="Informacion">
					</li>
					<li>
						<input type="submit" name="Salir" value="Salir">
					</li>
				</ul>
			</form>
			<?php
				if(isset($_POST['Informacion'])){
					echo "Info xd";
				}
				if(isset($_POST['Salir'])){
					header("Location: ../forms/logoutform.php");
				}
			?>
		</div>
	</section>
</body>
</html>