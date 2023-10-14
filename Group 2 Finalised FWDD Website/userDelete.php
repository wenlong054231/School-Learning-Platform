
<?php
	include("assignmentconf.php");
	
	$id = intval($_GET["id"]); //Primary Key value, from URL Parameter
	
	$sql = "DELETE FROM user WHERE ID=".$id;
	
	$result = mysqli_query($con, $sql);
	
	mysqli_close($con);
	
	echo "<script>alert('Student deleted successfully!');window.location.href='studentTable.php';</script>";
?>

