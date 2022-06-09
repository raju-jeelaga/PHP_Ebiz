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
		<?php //Numeric Array
			$numbers = array(55,12,45,123,456);

			foreach($numbers as $value){
				echo "Value is" . $value . "<br>";
			}

			echo "<hr>";
			
		//Associative Arrays
			$values = array( 1=> "one", 2=> "two", 3=>"Three");

			$values[4] = "four";
			$values[5] = "five";

			print_r($values);

			echo "<hr>";

			echo "<h1>Array Unset</h1>";

			$abc = array(1 => "One", 2 => "Two", 3 => "Three");
   			print_r($abc); 

   			echo "<br>";

   			unSet($abc[2]);

   			print_r($abc);

   			echo "<hr>";

			echo "<h1>Array Change key cases</h1>";

			$fruitsNames = array("f1" => "mango", "f2" => "Banana", "f3" => "apple" );

			$arrayCases = array_change_key_case($fruitsNames, CASE_UPPER);

			print_r($arrayCases);


		?>
	</div>
</body>
</html>