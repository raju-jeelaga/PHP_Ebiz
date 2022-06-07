<!DOCTYPE>

<?php
if(isset($_POST['Submit'])) {
 $UserName = $_POST['Username'];
 $Password = $_POST['Password'];


 if($UserName == "Raju" && $Password == "123"){
 	echo "<h2>Welcome" .$UserName. "</h2>";
 } else{
 	echo "<h2>Login with Proper Name</h2>";
 }
} else {
	echo "<h2>Login Required</h2>";
}
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
<?php ?>
	<fieldset>
	    <legend>HTML 5 Form</legend>
	    <form action="Form.php" method="POST" >
			<label for="Username">Username:</label>
			<input id="Username" type="text" name="Username"><br><br>
			<label for="Password">Password:</label>&nbsp;
			<input id="Password" type="Password" name="Password"><br><br><br>
			<input type="Submit" name="Submit" value="Submitted">
	    </form>
	</fieldset> 
	</body>
</html>