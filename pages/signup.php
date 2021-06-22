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
				<a href="login.php">LOGIN</a>
			</li>
			<li>
				<a href="signup.php">SIGNUP</a>
			</li>
		</ul>
	</nav>
	<section>
		<form method="post" id="action">
			<ul>
				<li>
					<label for="username">Usuario</label><br>
					<input type="text" name="username" id="username" placeholder="Usuario"><br>
				</li>
				<li>
					<label for="password">Contraseña</label><br>
					<input type="password" name="password" id="password" placeholder="Contraseña"><br>
				</li>
				<li>
					<label for="rPassword">Repetir contraseña</label><br>
					<input type="password" name="rPassword" id="rPassword" placeholder="Repetir contraseña"><br>
				</li>
				<li>
					<label for="email">Correo electronico</label><br>
					<input type="email" name="email" id="email" placeholder="Correo electronico"><br>
				</li>
				<li>
					<label for="phone">Celular</label><br>
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