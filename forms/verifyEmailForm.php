<?php

	require_once "../vendor/phpmailer/phpmailer/src/PHPMailer.php";
	require_once "../vendor/phpmailer/phpmailer/src/SMTP.php";
	require '../vendor/autoload.php';
	include("../forms/conectform.php");
	
	$hash = hash('sha512', rand(1, 100));
	session_start();
	$link = '<a href="http://gamevers.com.mx/forms/verEmailForm.php?username='.$_SESSION['username'].'&code='.$hash.'/VerifiedBySoftvers">PRESIONA AQUI PARA VERIFICAR E-MAIL</a>';
	$username = $_SESSION['username'];
	$sql = "UPDATE users SET veremailcode = '$hash' WHERE username='$username'";
	$verify = $conect->query($sql);
		
		$sql = "SELECT email FROM users WHERE username='$username'";
		$verify = $conect->query($sql);
		if(mysqli_num_rows($verify) > 0){
			$result = mysqli_fetch_array($verify);
		}



	/*$phpmailer = new PHPMailer();
	$phpmailer->isSMTP();
	$phpmailer->Host = 'smtp.mailtrap.io';
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 2525;
	$phpmailer->Username = '516355e6e178b1';
	$phpmailer->Password = '71f4a6ebbf5e07';

	$phpmailer->From = 'verify@softvers.mx';
	$phpmailer->addAddress($result);


	$phpmailer->Subject = 'Verifica tu correo ahora mismo';
	$phpmailer->Body = $link;

	if($phpmailer->Send() == false){
		echo ('nelson');
	}else{
		echo('Simona');
	}*/

	



    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->Host = "smtp.mailtrap.io";
    $mail->Port = 2525; // or 587
    $mail->IsHTML(true);
    $mail->Username = "516355e6e178b1";
    $mail->Password = "71f4a6ebbf5e07";
    $mail->SetFrom("verify@softvers.mx");
    $mail->Subject = "Verifica tu correo ahora mismo";
    $mail->Body = $link;
    $mail->AddAddress($result['email']);

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        header("location: ../pages/loggedmain.php");
     }

?>