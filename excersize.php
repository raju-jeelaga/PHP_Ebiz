<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
<title>Excersize</title>
<meta charset="utf-8"> 
<!-- Responsive meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
 <body>
	<div class="container">
		<?php // compare the strings
			$str1 = "00004";
			$str2 = "008";
			$str3 = "00007-STR";

			if($str1 < $str2){
				echo $str1 . " is lesss than" . $str2;
			}

			echo "<br>";

			if($str3 < $str2){
				echo $str3 . " is lesss than" . $str2;
			}


			echo "<hr>";

			// Division of the tables using loop

			$start = 1;
			$end = 4;

			echo "<table>";
				// print("<tr>");
				// print("<th></th>");
				// for($count = $start; $count <= $end; $count++) 
				// print("<th>".$count."</th>");
				// print("</tr>");
				
				// for($count = $start; $count <= $end; $count++) 
				// {
				//   print("<tr><th>".$count."</th>");
				//   for($count2 = $start; $count2 <= $end; $count2++) 
				//   {
				// 	$result = $count / $count2; 
				// 	printf("<td>%.3f</td>", $result);
				//   }
				//   print("</tr> \n");
				// }
				echo "<tr>";
				echo "<th></th>";
				for($count = $start; $count <= $end; $count++);
				echo "<th>" . $count . "</th>";
				echo "<tr>";

				for($count = $start; $count <= $end; $count++){
					echo "<tr><th>" . $count . "</th>";
					for($count2 = $start; $count2 <= $end; $count2++){
						$result = $count / $count2;
					printf("<td>%.3f</td>", $result);
					}
					print("</tr> \n");
				}


			echo "</table>";

			echo "<hr>";

			// Table of 4

			$Num = 4;

			for($i=1; $i<=10; $i++){
				$Result = $Num * $i;

				echo "Result is" .$Num . "*". $i ."=" .$Result . "<br>";
			}
			//echo $Result;

			echo "<hr>";

			$T = 5;

			for($i=1; $i<=10; $i++){
				$output = $T * $i;
				echo "Result is " . $T . " * " . $i . " = " .$output. "<br>";
			}

			echo "<hr>";


			$fig = 7;
			$i=1;
			while($i<=10 ){
				$res = $fig * $i;
			
			echo " Output is " . $fig . " * " . $i . " = " . $res . "<br>";
			$i++; 
		} 
			
		echo "<hr>";




		
		?>
	</div>
</body>
</html>