<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("location: loggedmain.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../css/style_nav.css" rel="stylesheet" type="text/css">
<link href="../css/style_login.css" rel="stylesheet" type="text/css">
<title>Login</title>
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
		<form method="post" id="action">
			<ul>
				<li>
					<input type="text" name="username" id="username" placeholder="Usuario"><br>
				</li>
				<li>
					<input type="password" name="password" id="password" placeholder="Contraseña"><br>
				</li>
				<li>
					<input type="submit" name="submit" id="submit" value="Ingresar">
				</li>
			</ul>
		</form>
	</section>
	<?php
			include("../forms/loginform.php");
		?>
</body>
</html>