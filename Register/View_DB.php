<?php 
require_once('Include/DB.php');
?>
<!DOCTYPE>
<html>
	<head>
		<title>View Data From Database</title>
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
		<div>
		<fieldset>
			<form class="" action="View_DB.php" method="GET">
				<input type="text" name="Search" value="" placeholder="Search by name / Phone"><br><br>
				<input type="submit" name="SearchButton" value="Search record">
			</form>
		</fieldset>
		</div>
		<?php 
			if(isset($_GET['SearchButton'])){
				global $ConnectingDatabase;
				$Search = $_GET['Search'];
				$sql = "SELECT * FROM register_form where name=:searcH OR phone=:searcH";
				$stmt = $ConnectingDatabase->prepare($sql);
				$stmt->bindValue(':searcH',$Search);
				$stmt->execute();
			 ?>
			<table width="1000" border="5" align="center">
				<caption>Search Result</caption>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Position</th>
					<th>Address</th>
					<th>Search Again</th>
				</tr>
				<?php 
				 while( $DataRows = $stmt->fetch()){
				 	$ID = $DataRows['id'];
				 	$Name = $DataRows['name'];
				 	$Phone = $DataRows['phone'];
				 	$Email = $DataRows['email'];
				 	$Position = $DataRows['position'];
				 	$Address = $DataRows['address'];
				 ?>
				 <tr>
					<td><?php echo $ID; ?></td>
					<td><?php echo $Name; ?></td>
					<td><?php echo $Phone; ?></td>
					<td><?php echo $Email; ?></td>
					<td><?php echo $Position; ?></td>
					<td><?php echo $Address;?></td>
					<td> <a href="View_DB.php">Search Again</a> </td>
				</tr>
				<?php } ?>
			</table>
		<?php } else {
			//echo "Such type Results Not Founded, Please Try with Another Words";

		}?>
		<table width="1000" border="5" align="center">
			<caption>View From Database</caption>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Position</th>
				<th>Address</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		<?php 
		global $ConnectingDatabase;
		$sql = "SELECT * FROM register_form";
		$stmt = $ConnectingDatabase->query($sql);
		while ( $DataRows = $stmt->fetch()){
			$ID = $DataRows['id'];
			$Name = $DataRows['name'];
			$Phone = $DataRows['phone'];
			$Email = $DataRows['email'];
			$Position = $DataRows['position'];
			$Address = $DataRows['address']; ?>
			<tr>
				<th><?php echo $ID;?></th>
				<th><?php echo $Name;?></th>
				<th><?php echo $Phone;?></th>
				<th><?php echo $Email;?></th>
				<th><?php echo $Position;?></th>
				<th><?php echo $Address;?></th>
				<th><a href="Update.php?id=<?php echo $ID; ?>">Update</a></th>
				<th><a href="Delete.php?id=<?php echo $ID; ?>">Delete</a></th>
			</tr>
		<?php } ?>
	</body>
</html>