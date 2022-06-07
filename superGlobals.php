<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>Super Globals</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">
	<h1>Super Globals</h1>
		<?php
			$x = 22;
			$y = 27;

			function addition(){

				$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			addition();

			echo $z;

		?>

	</div>

</body>

</html>