<?php
	$username = $_GET['username'];
	$hash = $_GET['code'];
	include("../forms/conectform.php");
	$sql = "SELECT veremailcode FROM users WHERE username='$username'";
	$verify = $conect->query($sql);
    if(mysqli_num_rows($verify) == 0){
		header("location: ../pages/mailvalidated.php");
	}
	else{
		$result = mysqli_fetch_array($verify);
		if($result['veremailcode'].'/VerifiedBySoftvers' == $hash){
			$sql = "UPDATE users SET veremail = NOW() WHERE username='$username'";
			$verify = $conect->query($sql);
			echo('VERIFICAO');
		}
		else{
			echo('NOU');
		}
	}
?>