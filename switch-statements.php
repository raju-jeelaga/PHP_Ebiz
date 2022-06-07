<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>Switch Statements</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">
	<h1>Switch Statements</h1>
	<?php
	$weather = "cloudy";

	switch ($weather) {
		case 'Rainy':
			echo "The Weather is Rainy";
		break;

		case 'sunny':
			echo "The Weather is Very Hot";
		break;

		case 'cloudy':
			echo "Rain will come";
		break;
		default:
			echo "The Weather is very pleasent";
		break;
	}

	echo "<hr>";

	$i = 2;
	switch ($i) {
	    case 0:
	        echo "i equals 0";
	    case 1:
	        echo "i equals 1";
	    case 2:
	        echo "i equals 2";
	}

	?>

</div>

</body>

</html>