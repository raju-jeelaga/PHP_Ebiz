<?php
require_once("Include/DB.php");
?>
<!DOCTYPE>
<html>
	<head>
		<title>View Data into Database</title>
		<link rel="stylesheet" href="Include/style.css">
		<style media="screen">
		/*fieldset{
				background-image: url("Include/images/ems1.jpg");
				background-repeat: repeat-x;
		}
		body{
				background-image: url("Include/images/2.jpg");
				background-repeat: repeat;
		}*/
		</style>
	</head>
	<body>
	<h2 class="success"> <?php echo @$_GET["id"]; ?> </h2>
	<div>
		<fieldset>
			<form class="" action="View_from_Database.php" method="GET">
				<input type="text" name="Search" value="" placeholder="Search by name / ssn"><br><br>
				<input type="submit" name="SearchButton" value="Search record">
			</form>
		</fieldset>
	</div>
	<?php 
		if(isset($_GET['SearchButton'])){
			global $ConnectingDB;
			$Search = $_GET['Search'];
			$sql = "SELECT * FROM emp_record WHERE ename=:searcH OR ssn=:searcH";
			$stmt=$ConnectingDB->prepare($sql);
			$stmt->bindValue(':searcH',$Search);
			$stmt->execute();
			while ( $DataRows = $stmt->fetch()) {
				$Id 		   = $DataRows['id'];
				$EName         = $DataRows["ename"];
				$SSN           = $DataRows["ssn"];
				$Department    = $DataRows["dept"];
				$Salary        = $DataRows["salary"];
				$HomeAddress   = $DataRows["homeaddress"]; 
			?>
			<div>


				<table width="1000" border="5" align="center">
					<caption>Search Result</caption>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>SSN</th>
						<th>Department</th>
						<th>Salary</th>
						<th>Home Address</th>
						<th>Search Again</th>
					</tr>
					<tr>
						<td><?php echo $Id; ?></td>
						<td><?php echo $EName; ?></td>
						<td><?php echo $SSN; ?></td>
						<td><?php echo $Department; ?></td>
						<td><?php echo $Salary; ?></td>
						<td><?php echo $HomeAddress;?></td>
						<td> <a href="View_From_Database.php">Search Again</a> </td>
					</tr>
				</table>
				</div>

			<?php }

		} 


	?>

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