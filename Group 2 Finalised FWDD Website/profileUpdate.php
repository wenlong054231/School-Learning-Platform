<?php
	include "assignmentconf.php";
	$studName = $_POST["txtStudentName"];
    $password = $_POST["txtPassword"];
    $studNum = $_POST["txtStudentNum"];
    $dob = $_POST["txtDOB"];
    $email = $_POST["txtEmail"];
    $contactNum = $_POST["txtContactNum"];

	$sql = "UPDATE user SET sPassword='$password', sNumber='$studNum', sDOB='$dob', sEmail='$email', sContact='$contactNum' WHERE sName= '$studName'";
	
	mysqli_query($con, $sql);

	echo '<script>alert("Data updated successfully!");</script>';
	echo "<script>window.location.href='home.php';</script>";
	mysqli_close($con);
?>	
