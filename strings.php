<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>Strings</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
<div class="container">

	<?php  
  $combine = "";
		$pharse1 = "hello Every one";
		$pharse2 = " this is Raju From Ebiz 123";

		$combine = $pharse1 . $pharse2;

    //$combine  .= $pharse2;

    echo $combine;

    echo "</br>";
    echo "Upper Case :". ucfirst($combine);
    echo "<br>";
    echo "Upper Words :". ucwords($combine); 
    echo "<br>";
    echo "Lower Case :". strtolower($combine); 
    echo "<br>";
    echo "Lower Case :". strtoupper($combine);


    echo '<hr>';

    echo "Repeat:" . str_repeat($combine, 2);
    echo "<br>";

    echo "Make sub string from one point to another:" . substr($combine, 6, 15);
    echo "<br>";

    echo "find position at specific word: " . strpos($combine, "Raju");
    echo "<br>";

    echo "Find Character: " . strchr($combine, "Eb");

      echo '<hr>';

    echo "Total Length " . strlen($combine);
    echo "<br>";

    echo "Trim " . "A" .trim(" B C D ") . "E" ; 
    echo "<br>";

    echo "Find a Specific and show after". strstr($combine, "Raju");

    echo "<br>";

    echo "Replace a word with new : " . str_replace("Raju", " Rithvik", $combine);

	?>

</div>
  </body>
  <style>
  	body{
  		background:#f1f1f1;
  	}
  </style>
</html>