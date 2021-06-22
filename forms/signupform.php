<?php
	if(isset($_POST['submit'])){
		if((strlen($_POST['username']) >= 1) && (strlen($_POST['password']) >= 1) && (strlen($_POST['rPassword']) >= 1) && (strlen($_POST['email']) >= 1) && (strlen($_POST['phone']) >= 1)){
			include("conectform.php");
			$username = $_POST['username'];
			$password = $_POST['password'];
			$rPassword = $_POST['rPassword'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$cryptpass = hash('sha512', $password);
			$sql = "SELECT * FROM users WHERE username='$username'";
			$verify = $conect->query($sql);
			
			if(mysqli_num_rows($verify) == 0){
				if(isset($_POST['terms'])){
					$terms = 1;
				}
				else{
					$terms = 0;
				}
				if($password == $rPassword){
					if(strlen($password) >= 6 && strlen($password) <= 30){
						$sql = "SELECT * FROM users WHERE email='$email'";
						$verify = $conect->query($sql);
						if(mysqli_num_rows($verify) == 0){
							if(strlen($phone) == 10){
								$sql = "SELECT * FROM users WHERE phone='$phone'";
								$verify = $conect->query($sql);
								if(mysqli_num_rows($verify) == 0){
									if($terms == 1){
										$sql = "INSERT INTO users(username, password, email, phone, terms) VALUES ('$username', '$cryptpass', '$email', '$phone', true)";
										if (mysqli_query($conect, $sql)) {
											?>
												<h2 align="center" style="color: #70b62c;">Se ha registrado correctamente</h2>
											<?php
										} else {
											 ?>
												<h2 align="center" style="color: #830002;">ha habido un error, intentelo mas tarde</h2>
											<?php
										}
									}
									else{
										?>
											<h2 align="center" style="color: #830002;">Debes aceptar los terminos y condiciones</h2>
										<?php
									}
								}else{
									?>
										<h2 align="center" style="color: #830002;">El numero de telefono ya esta en uso</h2>
									<?php
								}
							}else{
								?>
									<h2 align="center" style="color: #830002;">El numero de telefono debe tener 10 digitos</h2>
								<?php
							}
						}else{
							?>
								<h2 align="center" style="color: #830002;">El correo ya esta en uso</h2>
							<?php
						}
					}else{
						?>
							<h2 align="center" style="color: #830002;">La contraseña debe contener entre 6 y 30 caracteres</h2>
						<?php
					}
				}else{
					?>
						<h2 align="center" style="color: #830002;">Las contraseñas no coinciden</h2>
					<?php
				}
			}else{
				?>
						<h2 align="center" style="color: #830002;">El usuario ya existe</h2>
				<?php
			}
		}else{
			?>
				<h2 align="center" style="color: #830002;">Debes llenar todos los campos</h2>
			<?php
		}
	}
?>