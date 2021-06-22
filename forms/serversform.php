<link href="../css/style_servers.css" rel="stylesheet" type="text/css">
<?php
	include("conectform.php");
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM servers WHERE username='$username'";
	$verify = $conect->query($sql);
	if(mysqli_num_rows($verify) > 0){
		while($result = mysqli_fetch_array($verify)){
			echo '<input id="listserv" type="button" value="'.strtoupper($result['nameserver']).'"><br>';
		}
	}
?>