<?php
require_once('Include/DB.php');
$SearchQueryParameter = $_GET['id'];
	if(isset($_POST['Submit'])){
		$Name = $_POST["Name"];
		$EN  = $_POST["EN"];
		$Desig  = $_POST["Desig"];
		$Salary  = $_POST["Salary"];
		$Address  = $_POST["Address"];
		global $ConnectingDB;
		$sql = "DELETE * FROM emp_sheet WHERE id='$SearchQueryParameter'";
		$Execute = $ConnectingDB->query($sql);
		if($Execute){
			echo '<script>window.open("View_Database.php?id=Record Deleted Successfully","_self")</script>';
		}
	}
?>
<!DOCTYPE>
<html>
	<head>
		<title>Delete Data into Database</title>
		<link rel="stylesheet" href="Include/style.css">
	</head>
	<style media="screen">
	/* fieldset{
			background-image: url("Include/images/ems1.jpg");
			background-repeat: repeat-x;
	}
	body{
			background-image: url("Include/images/2.jpg");
			background-repeat: repeat;
	} */
	</style>
	<body>
<?php
	global $ConnectingDB;
	$sql = " SELECT * FROM emp_sheet WHERE id='$SearchQueryParameter' ";
	$stmt = $ConnectingDB->query($sql);
	while( $DataRows = $stmt->fetch()){
		$ID 		= $DataRows["id"];
		$Name 		= $DataRows["name"];
		$EMP_ID 	= $DataRows["emp_id"];
		$Desig 		= $DataRows["designation"];
		$Salary 	= $DataRows["salary"];
		$Address 	= $DataRows["address"];
	}
?>
<div>
	<form class="" action="Delete.php?id=<?php echo $SearchQueryParameter; ?>" method="post">
		<fieldset>
			<span class="FieldInfo">Employee Name:</span>
			<br>
			<input type="text" name="Name" value="<?php echo $Name; ?>">
			<br>
			<span class="FieldInfo">Employee ID:</span>
			<br>
			<input type="text" name="EN" value="<?php echo $EMP_ID; ?>">
			<br>
			<span class="FieldInfo">Designation:</span>
			<br>
			<input type="text" name="Desig" value="<?php echo $Desig; ?>">
			<br>
			<span class="FieldInfo">Salary:</span>
			<br>
			<input type="text" name="Salary" value="<?php echo $Salary; ?>">
			<br>
			<span class="FieldInfo">Address:</span>
			<br>
			<textarea name="Address" rows="8" cols="80"> <?php echo $Address; ?></textarea>
			<br>
			<input type="submit" name="Submit" value="Delete your record">
		</fieldset>
	</form>
</div>

	</body>
</html>















