<!DOCTYPE html>

<html class="no-js" lang="en">
	<head>
    <title>Regular Expression</title>
    <meta charset="utf-8"> 
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
	<div class="container">

		<h3>preg_match() function:</h3>
		<?php
			$pattern = "/ca[kf]e/";
			$text = "He was eating cake in the cafe.";
			if(preg_match($pattern, $text)){
			    echo "Match found!";
			} else{
			    echo "Match not found.";
			}

			echo "<hr>";



		?>
		<h3>preg_match_all() function:</h3>

		<?php
			$pattern = "/ca[kf]e/";
			$text = "He was eating cake in the cafe.";
			$matches = preg_match_all($pattern, $text, $array);
			echo $matches . " matches were found.";

			echo "<hr>";
			$pat = "/pl[a]c/";
			$txt = "Good place is hyderbad plac";
			$mtch = preg_match_all($pat, $txt, $arra);
			echo $mtch;


			echo "<hr>";
		?>

		<h3>preg_replace() function:</h3>

		<?php
			$pattern = "/\s/";
			$replacement = "-";
			$text = "Earth revolves around\nthe\tSun";
			// Replace spaces, newlines and tabs
			echo preg_replace($pattern, $replacement, $text);
			echo "<br>";
			// Replace only spaces
			echo str_replace(" ", "-", $text);
		?>



		<h3>Other Examples</h3>

		<?php
			// $text = "";
			// //$regux = "";
			// $word = "I am working in Ebiz solutions";
			// $output = preg_match((["A-Z"]), $word);
			// echo $output;
			echo "<hr>";

      
    // get host name from URL  
    preg_match('@^(?:https://)?([^/]+)@i',  
        "https://www.regualrexpression.com/php-tutorial", $matches);  
    $host = $matches[1];  
  
    // get last two segments of host name  
    preg_match('/[^.]+\.[^.]+$/', $host, $matches);  
    echo "Domain name is: {$matches[0]}\n";  
  
		?>

	</div>
  </body>
  <style>
  	body{
  		background:#f1f1f1;
  	}
  </style>
</html>