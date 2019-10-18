<!doctype html>
<html lang="en">

<head>

 	<meta charset="utf-8">

	<title>GAME</title>
 	<meta name="game" content="The Game">
  	<meta name="Amlan" content="SitePoint">

  	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/Shift.css">
  	<script src="../js/main.js" type="text/javascript"></script>

  	<link href='https://fonts.googleapis.com/css?family=Just Another Hand' rel='stylesheet'>
  	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

</head>

<body>

  <div class='container'>

    <div id='emptycontainer' ondrop='drop(event)' ondragover='allowDrop(event)'>

      <div class='statue' id='Red' draggable='true' ondragstart='drag(event)'></div>
      <div class='statue' id='Blue' draggable='true' ondragstart='drag(event)'></div>
      <div class='statue' id='Gold' draggable='true' ondragstart='drag(event)'></div>
      <div class='statue' id='Green' draggable='true' ondragstart='drag(event)'></div>
      <div class='statue' id='Violet' draggable='true' ondragstart='drag(event)'></div>

    </div>

    <div class='container-statues'>

      <div class='statue-container' id='id0' ondrop='drop(event)' ondragover='allowDrop(event)'>
      </div>

      <div class='statue-container' id='id1' ondrop='drop(event)' ondragover='allowDrop(event)'>
      </div>

      <div class='statue-container' id='id2' ondrop='drop(event)' ondragover='allowDrop(event)'>
      </div>

      <div class='statue-container' id='id3' ondrop='drop(event)' ondragover='allowDrop(event)'>
      </div>

      <div class='statue-container' id='id4' ondrop='drop(event)' ondragover='allowDrop(event)'>
      </div>

    </div>


  </div>

<script src="./js/Shift.js" type="text/javascript"></script>
</body>

</html>
