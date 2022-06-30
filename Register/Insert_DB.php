<?php 
require_once('Include/DB.php');
$NameError = '';
$PhoneError = '';
$EmailError = '';
function Test_User_Input($Data){
	return $Data;
}
if (isset($_POST["Submit"])){

		// For Name
		if(empty($_POST["Name"])){
			$NameError = "Name is Required";
		} else {
			$Name=Test_User_Input($_POST["Name"]);
			if(!preg_match('/^[a-zA-Z\. ]*$/', $Name)){
				$NameError = "Only Letters and White spaces are allowed";
			}
		}

		// For Phone
		if(empty($_POST["Phone"])){
			$PhoneError = "Phone Number is Required";
		} else {
			$Phone=Test_User_Input($_POST["Phone"]);
			if(!preg_match('/^[0-9]+$/', $Phone)){
				$PhoneError = "Only Numbers are allowed";
			}
		}

		// Email Validation
		if(empty($_POST["Email"])){
			$EmailError = "Email is Required";
		} else {
			$Email = Test_User_Input($_POST["Email"]);
			if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)){
				$EmailError="Invalid Email Format";
			}
		}


	if(!empty($_POST['Name']) && !empty($_POST['Phone']) && !empty($_POST['Email']) && !empty($_POST['Position']) && !empty($_POST['Address'])){
		if( (preg_match('/^[a-zA-Z\. ]*$/', $Name) == true) && (preg_match("/^[0-9]+$/",$Phone) == true) && (preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)== true) ){
			$Name 		= $_POST['Name'];
			$Phone 		= $_POST['Phone'];
			$Email 		= $_POST['Email'];
			$Position 	= $_POST['Position'];
			$Address 	= $_POST['Address'];
			global $ConnectingDatabase;
			$sql = "INSERT INTO register_form(name,phone,email,position,address)
			VALUES(:namE,:phoneE,:emaiL,:positioN,:addresS)";
			$stmt = $ConnectingDatabase->prepare($sql);
			$stmt->bindValue(':namE',$Name);
			$stmt->bindValue(':phoneE',$Phone);
			$stmt->bindValue(':emaiL',$Email);
			$stmt->bindValue(':positioN',$Position);
			$stmt->bindValue(':addresS',$Address);
			$Execute = $stmt->execute();
			if ($Execute) {
				echo '<span class="success"> Record Has been Addedd Successfully</span>';
			}
		} else {
			echo '<span class="FieldInfoHeading">Please add the Correct Data and submit again</span>';
		}
	} else {
		echo '<span class="FieldInfoHeading">Please Add Fields and submit</span>';
	}
}

?>
<!DOCTYPE>
<html>
	<head>
		<title>Insert Data into Database</title>
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
			<form class="" action="Insert_DB.php" method="post">
				<fieldset>
					<span class="FieldInfo">Name:</span>
					<br>
					<input type="text" name="Name" value="">
					<br>
					<span class="Error">*<?php echo $NameError; ?></span><br>	
					<span class="FieldInfo">Phone:</span>
					<br>
					<input type="tel" name="Phone" value="">
					<br>
					<span class="Error">*<?php echo $PhoneError; ?></span><br>	
					<span class="FieldInfo">Email:</span>
					<br>
					<input type="email" name="Email" value="">
					<br>
					<span class="Error">*<?php echo $EmailError; ?></span><br>	
					<span class="FieldInfo">Position:</span>
					<br>
					<input type="text" name="Position" value="">
					<br>
					<span class="FieldInfo">Address:</span>
					<br>
					<textarea name="Address" rows="8" cols="80"></textarea>
					<br>
					<input type="submit" name="Submit" value="Submit your Record">
				</fieldset>
			</form>
		</div>
	</body>
</html>