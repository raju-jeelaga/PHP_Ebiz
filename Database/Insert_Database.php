<?php 
require_once('Include/DB.php');
$NameError = "";
$IDError = "";
$SalaryError = "";
function Test_User_Input($Data){
	return $Data;
}
if (isset($_POST['Submit'])){

	if(empty($_POST["Name"])){
			$NameError = "Name is Required";
		} else {
			$Name=Test_User_Input($_POST["Name"]);
			if(!preg_match('/^[a-zA-Z\. ]*$/', $Name)){
				$NameError = "Only Letters and White spaces are allowed";
			}
		}

		if(empty($_POST["EN"])){
			$IDError = "Employeer ID is Required";
		} else {
			$EN=Test_User_Input($_POST["EN"]);
			if(!preg_match('/^[0-9]+$/', $EN)){
				$IDError = "Only Numbers are allowed";
			}
		}

		if(empty($_POST["Salary"])){
			$SalaryError = "Salary is Required";
		} else {
			$Salary=Test_User_Input($_POST["Salary"]);
			if(!preg_match('/^[0-9]+$/', $Salary)){
				$SalaryError = "Only Numbers are allowed";
			}
		}
	
	if (!empty($_POST["Name"])&&!empty($_POST["EN"])&&!empty($_POST["Desig"])&&!empty($_POST["Salary"])) {
	if( (preg_match('/^[a-zA-Z\. ]*$/', $Name) == true) && (preg_match("/^[0-9]+$/",$EN) == true) && (preg_match("/^[0-9]+$/",$Salary)== true) ){

		$Name 		= $_POST["Name"];
		$EN 		= $_POST["EN"];
		$Desig 		= $_POST["Desig"];
		$Salary 	= $_POST["Salary"];
		$Address 	= $_POST["Address"];
		global $ConnectingDB;
		$sql = "INSERT INTO emp_sheet(name,emp_id,designation,salary,address)
		VALUES(:namE,:eN,:desiG,:salarY,:addresS)";

		$stmt = $ConnectingDB->prepare($sql);

		$stmt->bindValue(':namE',$Name);
		$stmt->bindValue(':eN',$EN);
		$stmt->bindValue(':desiG', $Desig);
		$stmt->bindValue(':salarY',$Salary);
		$stmt->bindValue(':addresS',$Address);
		$Execute = $stmt->execute();
		if ($Execute) {
			echo '<span class="success"> Record Has been Addedd Successfully</span>';
		}
	} else {
		echo '<span class="FieldInfoHeading">Please add the Correct Data and submit again</span>';
	}
	}else {
		echo '<span class="FieldInfoHeading">Please Fill the details</span>';
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
			<form class="" action="Insert_Database.php" method="post">
				<fieldset>
					<span class="FieldInfo">Employee Name:</span>
					<br>
					<input type="text" name="Name" value="">
					<br>
					<span class="Error">*<?php echo $NameError;  ?></span><br>	
					<span class="FieldInfo">Employeer Number:</span>
					<br>
					<input type="text" name="EN" value="">
					<br>
					<span class="Error">*<?php echo $IDError;  ?></span><br>
					<span class="FieldInfo">Designation:</span>
					<br>
					<input type="text" name="Desig" value="">
					<br>
					<span class="FieldInfo">Salary:</span>
					<br>
					<input type="text" name="Salary" value="">
					<br>
					<span class="Error">*<?php echo $SalaryError;  ?></span><br>
					<span class="FieldInfo">Address:</span>
					<br>
					<textarea name="Address" rows="8" cols="80"></textarea>
					<br>
					<input type="submit" name="Submit" value="Submit your record">
				</fieldset>
			</form>
		</div>

	</body>
</html>