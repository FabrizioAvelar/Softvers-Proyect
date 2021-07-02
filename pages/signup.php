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
<link href="../css/style_signup.css" rel="stylesheet" type="text/css">
<title>SignUp</title>
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
				<input type="button" id="listmenu" value="SERVERS" onclick="location.href='serviceout.php'">
			</li>
			<li>
				<input type="button" id="listmenu" value="ACERCA DE" onclick="location.href='serviceout.php'">
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
					<input type="password" name="rPassword" id="rPassword" placeholder="Repetir contraseña"><br>
				</li>
				<li>
					<input type="email" name="email" id="email" placeholder="Correo electronico"><br>
				</li>
				<li>
					<input type="tel" name="phone" id="phone" placeholder="Celular"><br>
				</li>
				<li>
					<input type="checkbox" name="terms">
					<label for="terms">Acepto los <a href="">terminos y condiciones</a></label><br>
				</li>
				<li>
					<input type="submit" name="submit" id="submit" value="Registrarme">
				</li>
			</ul>
		</form>
	</section>
	<?php
		include("../forms/signupform.php");
	?>
</body>
</html>