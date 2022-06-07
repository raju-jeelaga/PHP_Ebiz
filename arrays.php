<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
<title>Arrays</title>
<meta charset="utf-8"> 
<!-- Responsive meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
 <body>
	<div class="container">
		<?php
		$name = array("Raju", "Jeelaga");

		echo $name[1];

		$Items = array("Biryani", "chicken", array("India", "Pak", "USA"), "Pepsi");

		echo $Items[2][2];

		$Items[30] = "Apple";

		$Items[99] = "Tiger";

		echo "<pre>";
		print_r($Items);
		echo "</pre>";

		echo "<hr>";

		$Flowers = array("A" => "Rose", "B" => "Sun Flower", "C" => "Moon Flower");

		echo $Flowers["C"];

		echo "<hr>";

		$Food = array("India" => " Biryani", "USA" => "Cool Drink");

		echo "I Will Eat " . $Food["India"] . " and Drink " . $Food["USA"]; 

		?>


	</div>
</body>
</html>
