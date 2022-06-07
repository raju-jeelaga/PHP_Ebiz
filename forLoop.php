<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>Foor Loop</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">

	<?php 
		$i = 1;

		for($i=1; $i<=10; $i++){
			echo $i . "is Diplaying here <br>";
		}

		echo "<hr>";

		$N = 4;

		for($i=1; $i<=10; $i++){

			$Result = $N * $i;

			echo "Result is " . $N . " * " . $i . " = " . $Result . "<br>";
		}


	?>
</div>

</body>

</html>