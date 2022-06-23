<?php
require_once("Include/DB.php");

?>
<!DOCTYPE>
<html>
	<head>
		<title>View Data into Database</title>
		<link rel="stylesheet" href="Include/style.css">
	</head>
	<body>
	

	<table width="1000" border="5" align="center">
			<caption>View From Database</caption>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>SSN</th>
				<th>Department</th>
				<th>Salary</th>
				<th>HomeAddress</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
	<?php 
		global $ConnectingDB;
		$sql = "SELECT * FROM emp_record";
		$stmt = $ConnectingDB->query($sql);
		while( $DataRows = $stmt->fetch()){
			$Id = $DataRows["id"];
			$Ename = $DataRows["ename"];
			$SSN = $DataRows["ssn"];
			$Department = $DataRows["dept"];
			$Salary = $DataRows["salary"];
			$HomeAddresss = $DataRows["homeaddress"]; ?>
		<tr>
			<th><?php echo $Id; ?></th>
			<th><?php echo $Ename; ?></th>
			<th><?php echo $SSN; ?></th>
			<th><?php echo $Department; ?></th>
			<th><?php echo $Salary; ?></th>
			<th><?php echo $HomeAddresss; ?></th>
			<th><a href="Update.php?id=<?php echo $Id; ?>">Update</a></th>
			<th><a href="Delete.php?id=<?php echo $Id; ?>">Delete</a></th>
		</tr>

		<?php } ?>
	</table>


	</body>
</html>