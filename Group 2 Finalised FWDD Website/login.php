<?php
    include("assignmentconf.php");
    session_start();

    if(isset($_POST["signin"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE sName = '$username' AND sPassword = '$password'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        if($row != NULL)
        {
            if(($row["sName"] == $username) && ($row["sPassword"] == $password)){
                $_SESSION['username'] = $username;
				$_SESSION['userID'] = $row["ID"];
                echo "<script>alert('Login Successfully!');</script>";
                echo "<script>window.location.href='home.php';</script>";
            }
        }
        else{
            echo "<script>alert('Incorrect username or password! Pls Try Again!');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
    }
?>

<?php
    include("assignmentconf.php");
    if(isset($_POST["regBtn"]))
    {
        $studName = $_POST["txtStudentName"];
        $password = $_POST["txtPassword"];
        $studNum = $_POST["txtStudentNum"];
        $dob = $_POST["txtDOB"];
        $email = $_POST["txtEmail"];
        $contactNum = $_POST["txtContactNum"];

        $sql = "INSERT INTO user (sName, sPassword, sNumber, sDOB, sEmail, sContact) VALUES ('$studName', '$password', '$studNum', '$dob', '$email', '$contactNum')";

        if(!mysqli_query($con,$sql)){
            die("Error, ".mysqli_error($con));
        }
        else{
            echo "<div id='adddialogbox' style='font-size:20px;display:none'>Register successfully!</div>";
        }
        mysqli_close($con);
    }

?>

<!--<!DOCTYPE HTML>-->
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

button:hover{
	background-color:indianred;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
	border-radius:5px;
	border-color: #eee;
	
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>
</head>
<body>
<h2>Welcome do EduExcel</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post">
			<!--Create Account-->			
			<input type="text" name="txtStudentName" placeholder="Full Name (ex:Sam Leong)" pattern="^(?!.*[^a-zA-Z ])(?=[A-Z].*)(?!.* {2}.*)(?!.*[A-Z]{2}.*)(?!.*[a-z][A-Z].*)(?!.*[A-Z] .*)(?!.* [a-z].*).{2,49}[a-z]$" required />
			<!--print("Incorrect Name!!! Name format is as below:\n-Only Accept Upper case, lower case and space (3-50 characters)")
            print("-Must begin with upper case")
            print("-Upper case must be followed by lower case")
            print("-Upper case cannot be in between two lower cases")
            print("-Must begin with upper case after spacing")
            print("-Double spacing is not allowed")
            print("-Must end with lower case\n")-->

			<input type="password" name="txtPassword" placeholder="Password (ex:gjwf2Rnve)" pattern="^(?!.*[^a-zA-Z0-9])(?=(.*[0-9]){1})(?!(.*[0-9]){2,})(?=.*[a-z])(?=(.*[A-Z]){1})(?!(.*[A-Z]){2,}).{8,12}$" required />
			<!--print("Invalid password!!! Password format is as below:")
            print("-Accept 8-12 characters consisting of")
            print("-a must of only 1 upper case,")
            print("-a must of only 1 number")
            print("-and the rest lower cases (No symbols allowed)\n")-->

			<input type="text" name="txtStudentNum" placeholder="TP No: (ex:TPXXXXXX)" pattern="^[T][P][0-9]{6}$" required />
			<input type="date" name="txtDOB" value="txtDOB" required />
			<input type="email" name="txtEmail" id="txtEmail" placeholder="Email (ex:example_123@gmail.com)" pattern="^[a-zA-Z](?!.*[^a-zA-Z0-9_@.])(?!(.*[@]){2,})(?!(.*[.]){2,})(?!(.*[_]){2,})(?=(.*[0-9]){0,})(?=(.*[A-Z]){0,}).{6,18}[a-zA-Z0-9]@gmail.com" required />
			<!--print("Invalid email!!! Email format is as below:")
            print("-Must begin with an alphabet(Upper case or Lower case)")
            print("-Must end with upper case, lower case or number (Cannot end with underscore)")
            print("-Accept Upper case, lower case, numbers, underscore (Only allow one underscore)")
            print("-No space is allowed")
            print("-@ and . reserved for (example: @gmail.com)")
            print("-Only accept 8-20 characters (Ex: X@gmail.com where X accepts 8-20 characters)")
            print("-Accept gmail only\n")  -->

			<input type="tel" name="txtContactNum" placeholder="Phone Number (ex:012-4949032)" pattern="^[0][1][2-9]-[0-9]{7}$|^[0][1][1]-[0-9]{8}$" required />
			<br />
			<button type="submit" name="regBtn">Register</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<!--Sign IN-->
			<h1>Sign in</h1>
			<input type="text" name="username" id="username" placeholder="Username" required />
			<input type="password" name="password" id="password" placeholder="Password" required /><br />
			<button name="signin" type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
	
	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>

<!-- styling dialog box-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $(document).ready(function () {
        $('#adddialogbox').dialog({
            title: 'Message',
            draggable: false,
            resizable: false,
            modal: true,
            width: 300,
            height: 200,
            buttons: {
                OK: function () {
                    $(this).dialog("close");
                }
            }
        });
    });
</script>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>