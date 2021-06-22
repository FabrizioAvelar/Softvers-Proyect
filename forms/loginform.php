<?php
	if(isset($_POST['submit'])){
		if((strlen($_POST['username']) >= 1) && (strlen($_POST['password']) >= 1)){
			include("conectform.php");
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = hash('sha512', $password);
			$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$verify = $conect->query($sql);
    		if(mysqli_num_rows($verify) == 1){
				$_SESSION['username'] = $username;
				?>
					<h2 align="center" style="color: #70b62c;">Se inicio sesion correctamente</h2>
				<?php
				header("location: ../pages/loggedmain.php");
			}else{
				?>
					<h2 align="center" style="color: #830002;">No se encontraron las credenciales</h2>
				<?php
			}
			
		}else{
			?>
				<h2 align="center" style="color: #830002;">Debes llenar todos los campos</h2>
			<?php
		}
	}
?>