<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>While Loop</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">

	<?php 
		$R = 1;

		$N = 2;

		while($R<=15){

			$value = $N * $R;

			echo "Result is " . $N . " * " . $R . " = " . $value . "<br>";
			//echo "Raju is working on Ebiz <br>";
			$R++;
		}

	?>

</div>

</body>

</html>