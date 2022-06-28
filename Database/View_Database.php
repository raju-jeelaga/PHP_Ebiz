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
		<div>
			<fieldset>
				<form class="" action="View_Database.php" method="GET">
					<input type="text" name="Search" value="" placeholder="Search by name / id"><br><br>
					<input type="submit" name="SearchButton" value="Search record">
				</form>
			</fieldset>
		</div>
		<?php if (isset($_GET['SearchButton'])){
			$Search = $_GET['Search'];
			global $ConnectingDB;
			$sql = "SELECT * FROM emp_sheet WHERE name=:searcH OR emp_id=:searcH";
			$stmt = $ConnectingDB->prepare($sql);
			$stmt->bindValue(':searcH', $Search);
			$stmt->execute(); ?>
			

				<table width="1000" border="5" align="center">
					<caption>Search Result</caption>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>EMP_ID</th>
						<th>Desig</th>
						<th>Salary</th>
						<th>Address</th>
						<th>Search Again</th>
					</tr>
					<?php 
						while ( $DataRows = $stmt->fetch()){
						$ID 		= $DataRows["id"];
						$Name 		= $DataRows["name"];
						$EMP_ID 	= $DataRows["emp_id"];
						$Desig 		= $DataRows["designation"];
						$Salary 	= $DataRows["salary"];
						$Address 	= $DataRows["address"]; 
					?>
						<tr>
							<td><?php echo $ID; ?></td>
							<td><?php echo $Name; ?></td>
							<td><?php echo $EMP_ID; ?></td>
							<td><?php echo $Desig; ?></td>
							<td><?php echo $Salary; ?></td>
							<td><?php echo $Address;?></td>
							<td> <a href="View_Database.php">Search Again</a> </td>
						</tr>
					<?php } ?>
				</table>
				</div>

		<?php //} 
	} ?>
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
					<th><a href="Update.php?id=<?php echo $ID; ?>">Update</a></th>
					<th><a href="Delete.php?id=<?php echo $ID; ?>">Delete</a></th>
				</tr>
				<?php } ?>
		</table>

	</body>
</html>