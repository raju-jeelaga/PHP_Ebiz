<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>Array Functions</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">
	<?php
		$colors = array("Red", "Yellow", "Orange");
		//echo $colors; '<br>';
		array_pop($colors);
		//echo $colors; '<br>';
		print_r($colors);
		echo '<br>';
		array_push($colors, "Greens", "Black");
		print_r($colors);

		echo '<hr>';


		"Implode:";

		$quote = array("Never", "Give", "up",  "Raju");

		echo implode(" ", $quote);

		echo '<hr>';

		"Explode:";

		$quote1 = "I am working in Ebiz Company";

		print_r (explode(" ", $quote1)); ?>


</div>
</body>
</html>