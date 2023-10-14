<?php
	$db = mysqli_connect('localhost', 'root', '', 'assignment');
		
	if (isset($_POST['email_check'])){
		$email = $_POST['email'];
		$sql = "SELECT * FROM feedback WHERE email='$email'";
		$results = mysqli_query($db,$sql);
		if (mysqli_num_rows($results)> 0){
			echo "not_available";
		}
		else {
			echo "available";
		}
		exit();
	}

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$telephone = $_POST['telephone'];
		$feedback = $_POST['feedback'];
		
		$query = "INSERT INTO feedback (fullname, email, telephone, feedback) VALUES ('$username', '$email', '$telephone', '$feedback') ";
		$results = mysqli_query($db,$query);
		echo 'Feedback made successfully!';
		exit();
	}
?>