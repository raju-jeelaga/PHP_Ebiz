<?php 
require_once('Include/DB.php');
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
				<th>EMP ID</th>
				<th>Designation</th>
				<th>Salary</th>
				<th>Address</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
			<?php 
				global $ConnectingDB;
				$sql = "SELECT * FROM emp_sheet";
				$stmt = $ConnectingDB->query($sql);
				while ( $DataRows = $stmt->fetch()){
					$ID 		= $DataRows["id"];
					$Name 		= $DataRows["name"];
					$EMP_ID 	= $DataRows["emp_id"];
					$Desig 		= $DataRows["designation"];
					$Salary 	= $DataRows["salary"];
					$Address 	= $DataRows["address"];?>

				<tr>
					<th><?php echo $ID;?></th>
					<th><?php echo $Name;?></th>
					<th><?php echo $EMP_ID;?></th>
					<th><?php echo $Desig;?></th>
					<th><?php echo $Salary;?></th>
					<th><?php echo $Address;?></th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				<?php } ?>
		</table>
	</body>
</html>