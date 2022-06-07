<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>Branching Statements</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">
	<h1>Branching Statements</h1>

	<?php
		$Names = array("Raju", "Jeelaga", "Kumar", "Ebiz", "test", "works");

		for ($i=0; $i <=5 ; $i++) { 
			if($Names[$i] == "Ebiz"){
				continue;
			}
			echo $Names[$i]. "<br>";
		}
		//echo $Names[$i];


	?>
	<h1>User Define Functions</h1>

	<?php
		function addition(){
			echo "Hello World";
		}
		echo addition();

		echo '<hr>';

		function addition_of_two_numbers($a, $b){
			$result = $a + $b;
			echo "Addition of two numbers is " . $result . "";
		}

		echo addition_of_two_numbers(22, 884);

		echo '<hr>';

		function using_return_function($x,$y){
			$final = $x + $y;
			return $final;
		}

		$total = using_return_function(99,56);
		$total1 = using_return_function($total,100);

		echo "Total Count is ".$total1;

	?>

</div>

</body>

</html>