<?php

	$error1 = "";
	$error2 = "";
	$error3 = "";
	$true = "Correct";

	if(isset($_POST['pswdSubmit'])) {

		$First = $_POST['FirstInput'];
		$Second = $_POST['SecondInput'];
		$Third = $_POST['ThirdInput'];

		if($First == "49") {
			$error1 = "Correct!";
		} else {
			$error1 = "Incorrect!";
		}

		if($Second == "115") {
			$error2 = "Correct!";
		} else {
			$error2 = "Incorrect!";
		}

		if($Third == "49") {
			$error3 = "Correct!";
		} else {
			$error3 = "Incorrect!";
		}

	if($error1&&$error2&&$error3 === "Correct!") {
			header("location:WorkInProgress.html");
		} else {
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

  	<link rel="stylesheet" type="text/css" href="./css/index.css">
  	<link rel="stylesheet" type="text/css" href="./css/location.css">
  	<script src="./js/main.js" type="text/javascript"></script>

  	<link href='https://fonts.googleapis.com/css?family=Just Another Hand' rel='stylesheet'>
  	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

</head>

<body>

	<div id="container">

		<!--
			Uneven
			Prime
			Square
		-->

		<div><p id="game-text">
			You hear a loud click. But the door is still closed.<br>
			The computer screen now shows a number sequence and ask's for input.
		</p></div>

		<form autocomplete= "off" method="POST">

			<div><p id="game-text">
				1, 4, 9, 16, 25, 36, ?
			</p></div>
			<div><input type="text" name="FirstInput"></div>
			<p id="pswdAlert"><?= $error1 ?></p>

			<div><p id="game-text">
				10, 15, 25, 35, 55, 65, 85, 95,  ?
			</p></div>
			<div><input type="text" name="SecondInput"></div>
			<p id="pswdAlert"><?= $error2 ?></p>

			<div><p id="game-text">
				1, 4, 9, 25, 36, ?
			</p></div>
			<div><input type="text" name="ThirdInput"></div>
			<p id="pswdAlert"><?= $error3 ?></p>

			<div>
				<button name="pswdSubmit" type="submit" class="button" value="Submit">Submit</button>
			</div>

		</form>

		<div style="text-align: left;">
			<button type="button" id="back-button" onclick="goBack()">
			&#9754</button>
		</div>

	</div>

</body>
</html>
