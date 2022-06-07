<!DOCTYPE>

<html>
<head>
	<title>PHP FILE</title>
</head>
<body>
	<?php
		print_r($_POST);
	?>


	<?php
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Submit = $_POST['Submit'];

		echo "<hr>";

		// if(isset($Username) && !empty($Username)){
		// 	echo " User Name is set to " . $Username . "<br>";
		// } else {
		// 	echo "No Username Detected";
		// }

		// //echo "<hr>";

		// if(isset($Password) && !empty($Password)){
		// 	echo "Password is set to " . $Password . "<br>";
		// } else {
		// 	echo "No Password is Detected";
		// }

		if(isset($_POST['Username'])){
			$Username = $_POST['Username'];
			echo $Username; 
			echo "<br>";
		} else{
			$Username = "";
		}

		if(isset($_POST["Password"])){
			$Password = $_POST["Password"];
			echo $Password;
		} else{
			$Password = "";
		}

	?>

</body>
</html>