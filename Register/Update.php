<?php 
require_once('Include/DB.php');
$SearchQueryParameter = $_GET['id'];
if(isset($_POST['Submit'])){
	$Name = $_POST['Name'];
	$Phone = $_POST['Phone'];
	$Email = $_POST['Email'];
	$Position = $_POST['Position'];
	$Address = $_POST['Address'];

	global $ConnectingDatabase;

	$sql = "UPDATE register_form SET name='$Name', phone='$Phone', email='$Email', position='$Position', address='$Address' WHERE id='$SearchQueryParameter'";
	$Execute = $ConnectingDatabase->query($sql);
	if($Execute){
		echo '<script>window.open("View_DB.php?id=Record Updated Successfully","_self")</script>';
	}
}
?>
<!DOCTYPE>
<html>
	<head>
		<title>Update Data into Database</title>
		<link rel="stylesheet" href="Include/style.css">
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
	</head>
	<body>
		<?php 
			global $ConnectingDatabase;
			$sql = "SELECT * FROM register_form where id='$SearchQueryParameter'";
			$stmt = $ConnectingDatabase->query($sql);
			while ( $DataRows = $stmt->fetch()){
				$ID = $DataRows['id'];
				$Name = $DataRows['name'];
				$Phone = $DataRows['phone'];
				$Email = $DataRows['email'];
				$Position = $DataRows['position'];
				$Address = $DataRows['address'];
			}
		?>
		<form class="" action="Update.php?id=<?php echo $SearchQueryParameter; ?> ?>" method="POST">
			<fieldset>
				<span class="FieldInfo">Name:</span>
				<br>
				<input type="text" name="Name" value="<?php echo $Name; ?>">
				<br>
				<span class="FieldInfo">Phone:</span>
				<br>
				<input type="text" name="Phone" value="<?php echo $Phone; ?>">
				<br>
				<span class="FieldInfo">Email:</span>
				<br>
				<input type="text" name="Email" value="<?php echo $Email; ?>">
				<br>
				<span class="FieldInfo">Position:</span>
				<br>
				<input type="text" name="Position" value="<?php echo $Position; ?>">
				<br>
				<span class="FieldInfo">Address:</span>
				<br>
				<textarea name="Address" rows="8" cols="80"> <?php echo $Address; ?></textarea>
				<br>
				<input type="submit" name="Submit" value="Update your record">
			</fieldset>
		</form>

	</body>
</html>