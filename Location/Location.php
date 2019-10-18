<?php

	$error = "";

	if(isset($_POST['pswdSubmit'])) {

		if($_POST['InputPswd'] == "Amsterdam") {

			header("location:../Cryptic/Cryptic.php");
		} else {
			$error = "Incorrect Password!";
		}
	}

?>

<!doctype html>
<html lang="en">

<head>

 	<meta charset="utf-8">

	<title>GAME</title>
 	<meta name="game" content="The Game">
  	<meta name="Amlan" content="SitePoint">

  	<link rel="stylesheet" type="text/css" href="../css/index.css">
  	<link rel="stylesheet" type="text/css" href="./css/location.css">
  	<script src="../js/main.js" type="text/javascript"></script>

  	<link href='https://fonts.googleapis.com/css?family=Just Another Hand' rel='stylesheet'>
  	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

</head>

<body>

	<div id="container">

		<!--
			Look for a location.
		-->

		<div><p id="game-text">
			In this room you see a heavy door. It is locked.<br>
			When you inspect the door and the room you see that a wire is <br>connected from the door to a small terminal computer.
		</p></div>

		<div><p id="game-text">
			The computer seems to be on and ask's for a password.
		</p></div>

		<form method="POST" autocomplete="off">
			<div><input type="text" name="InputPswd"></div>
			<div>
				<button name="pswdSubmit" type="submit" class="button" value="Submit">Submit</button>
			</div>
		</form>

		<p id="pswdAlert"><?= $error ?></p>

		<div style="text-align: left;">
			<button type="button" id="back-button" onclick="goBack()">
			&#9754</button>
		</div>

	</div>

</body>
</html>
