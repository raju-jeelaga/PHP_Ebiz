<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
<title>For Each Loop</title>
<meta charset="utf-8"> 
<!-- Responsive meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
 <body>
	<div class="container">
		<h1>For Each Loop</h1>
		<?php
			$Numbers = array("10", "256", "85", "523", "564", "999");

			foreach($Numbers as $Num){

				echo "Numbers " . $Num . "<br>";
			}

			echo "<hr>";


			$FoodItems = array(
				"item_number" => 427,
				"Place" => "India",
				"Language" => "Telugu",
				"like_food" => "Biryani",
				"soft_drink" => "pepsi",
				"amount" => 'sdfsdf'
			);

			foreach($FoodItems as $key=>$value){

				$Data = ucwords( str_replace("_", " ", $key) );

				if($key == "amount"){
					if(is_numeric($value)){

					} else{
						$value = "Not Determined";
					}
				}

				echo "Values are " . $Data . " : " .$value . "<br>";
			}


			echo "<hr>";


			$districts = array(
				"Krisha" => "Vijaywada",
				"Mirchi" => "Guntur",
				"Hitech_city" => "Hyderbad",
				"fish_yard" => "Vizag",
				"visit_price" => "sdfgsdfg"
			);

			

			foreach($districts as $famous => $dist ){

				$newData = ucwords( str_replace("_", " * ", $famous) );

				if( $famous == "visit_price"){
					if(is_numeric($dist)){
						
					} else {
						$dist = " Only Number will Display here";
					}
				}

				echo "Here are the AP Districts with famous Names - " . $newData . " : " . $dist . "<br>";
			}


			echo "<hr>";


			$session = array(
				"summer_session" => "Mango",
				"Winter_session" => "Grapes",
				"Rainy_session" => "Water Milloon",
				"price" => "27"
			);

			foreach ($session as $key1 => $value1) {
				$data1 = ucwords( str_replace("_", " - ", $key1) );

				if($key1 == "price"){
					if(is_numeric($value1)){

					} else {
						$value1 = " Not a Number";
					}
				}

				echo "Here is the Season Fruit : " . $data1 . " is for " . $value1 . "<br>";
				// code...
			}

		?>

	</div>
</body>
</html>