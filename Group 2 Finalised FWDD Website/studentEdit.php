<?php 
	 session_start();		 
	 if(!isset($_SESSION['username']))
	 {
	 	echo "<script>alert('Please login first!');
		window.location='login.php';
		</script>";
	 	session_write_close();
	 	exit();
	 }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="navbar.css">  
    <link rel="stylesheet" href="update.css">
    <style>
        .fa {
              padding: 8px 10px 5px 10px;
              font-size: 24px;
              width: 40px;
              height:40px;
              text-align: center;
              text-decoration: none;
              margin: 5px 2px;
              border-radius:10px;
         }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
             background-color: #3B5998;
             color: white;
        }

        .fa-instagram {
              background-color: rgb(131, 58, 180);
              color: white;
        }

        button{
            cursor:pointer;
        }

        @media screen and (max-width: 1000px){
				.row, .navbar{
					flex-direction: column;
				}
			}

            * {
                box-sizing: border-box;
            }
            /* Style the body */

            body {
                font-family: Arial;
                margin: 0;
            }
            /* Header/logo Title */

            .header {
                padding: 20px 60px 5px 60px;
                text-align: center;
                background: #1abc9c;
                color: white;   /*text*/
            }
			
            /* Column container */

            .row {
                display: flex;
                flex-wrap: wrap;
            }
            /* Create two unequal columns that sits next to each other */ /* Sidebar/left column */

            .side {
                flex: 20%;
                background-color: #f1f1f1;
                padding: 10px;
            }
            /* Main column */

            .main {
                flex: 60%;
                background-color: #A7C7E7;
                padding: 10px;
            }

            .rightside{
                flex:20%;
                background-color: #f2f2f2;
                padding: 10px;
            }
            /* Footer */

            .footer {
                padding: 2px;
                text-align: center;
                background: #ddd;
            }

            .active{
                background-color:aquamarine;
            }
    </style>
</head>

<body>
	<!--load data-->
	<?php 
	include "assignmentconf.php";
	$id = intval($_GET["id"]); //Primary Key value, from URL Parameter
	$sql = "SELECT * FROM user WHERE ID=" .$id;
	$result = mysqli_query ($con, $sql);
	while ($rows = mysqli_fetch_array ($result))
	{
		$studName = $rows["sName"];
	    $password = $rows["sPassword"];
	    $studNum = $rows["sNumber"];
	  	$dob = $rows["sDOB"];
	    $email = $rows["sEmail"];
	    $contact = $rows["sContact"];
	}
	?>

    <!--Note -->
    <div style="background:yellow;padding:2px">
        <marquee direction="right" style="font-size:20px; color:blue">WELCOME ALL TO edueXcel</marquee>
    </div>

    <!--Header -->
    <div class="row">
        <div class="side" style="padding: 20px 20px 0px 20px; background-color:gold;text-align:center">
            <img src="eduexcel3.png" style="mix-blend-mode:multiply" width="100" height="100" />
        </div>
        <div class="main" style="background-color:gold;text-align:center">
            <p style="font-family:'Comic Sans MS';font-size:30px;text-shadow: 2px 2px blue">Education is the Key to Success</p>
        </div>
        <div class="rightside" style="background-color:gold;text-align:center;padding:10px 0px">
            <p style="font-size:16px;font-style:italic">Certified by MOE</p>
            <img src="MOE3.jpg" width="115" height="50" style="mix-blend-mode:multiply;" />            
        </div>
     </div>
    <!--<div class="navbar">-->
	<nav>
		<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="uploadfile.php">Study Materials</a></li>
		<li><a href="excelipedia.php">eXcelipedia</a></li>	
		<li><a href="quiz.php">Quiz</a></li>
		<li><a href="news.php">News &#38; Announcement</a></li>
		<li><a href="ContactUs.php">Contact Us</a></li>
			<?php 		 
				 if(isset($_SESSION['username'])){ ?>
				 <li style="background-color:orange">
		  			<a href="#0">Profile</a>
		  			<ul>
		    			<li><a href="userEdit.php">Account</a></li>
		    			 <?php
		    			 if($_SESSION['username'] == 'admin'){ ?>
		 			   	<li style="background-color:orange"><a href="studentTable.php">Students</a></li>
		 			   	<?php } ?>
				    	<li><a href="logout.php">Log Out</a></li>
		  			</ul>
				</li>
			<?php } ?>
		</ul>
	</nav>
	
	<!---->
    <!--The flexible grid (content) -->

    <div style="width:50%; float: left;align-self: center;"></div>
    <div class="update">
    	<form action="profileUpdateAll.php" method="post">
			
			<h1>Update Profile</h1>  
			<hr>
				
			<label>Name: </label>
			<input type="text" name="txtStudentName" value="<?php echo $studName; ?>" readonly="readonly">
			<br><br>
			
			<label>Password: </label>
			<input type="password" name="txtPassword" pattern="^(?!.*[^a-zA-Z0-9])(?=(.*[0-9]){1})(?!(.*[0-9]){2,})(?=.*[a-z])(?=(.*[A-Z]){1})(?!(.*[A-Z]){2,}).{8,12}$" value="<?php echo $password; ?>" />
			<br><br>
			
			<label>TP No: </label>
			<input type="text" name="txtStudentNum" pattern="^[T][P][0-9]{6}$" value="<?php echo $studNum; ?>" />
			<br><br>
			
			<label>DOB: </label>
			<input type="date" name="txtDOB" value="<?php echo $dob; ?>" />
			<br><br>
			
			<label>Email: </label>
			<input type="email" name="txtEmail" id="txtEmail" pattern="^[a-zA-Z](?!.*[^a-zA-Z0-9_@.])(?!(.*[@]){2,})(?!(.*[.]){2,})(?!(.*[_]){2,})(?=(.*[0-9]){0,})(?=(.*[A-Z]){0,}).{3,18}[a-zA-Z0-9]@gmail.com" value="<?php echo $email; ?>"/>
			<br><br>
			
			<label>Phone Number: </label>
			<input type="tel" name="txtContactNum" pattern="^[0][1][2-9]-[0-9]{7}$|^[0][1][1]-[0-9]{8}$" value="<?php echo $contact; ?>"/>
			<br><br>
			
			<button type="submit" class="btn" name="regBtn">Update</button>
		</form>
    </div>   
    <!--Footer -->
    <div class="footer">
        <a href="https://www.facebook.com/EduexcelAcademy" class="fa fa-facebook"></a>
        <span>@copyright edueXcel 2020-2022</span>
        <a href="https://www.instagram.com/edexcel_/" class="fa fa-instagram"></a>
    </div>

</body>
</html>