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
	<link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="overalldesign.css" />
	<style>

        button{
            cursor:pointer;
        }

        * {
            box-sizing: border-box;
        }
        /* Style the body */

        body {
            font-family: Arial;
            margin: 0;
        }

        /* Footer */
        .footer {
            padding: 2px;
            text-align: center;
            background: #ddd;
        }
    </style>
</head>

<body>
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
    	<div style="width:50%; float: left; align-self: center;"></div>
			<div class="table">  
                     <table >  
                          <thead> 
                               <tr>   
                                    <th>ID</th>  
                                    <th>Name</th>                              
                                    <th>TP Number</th>  
                                    <th>DOB</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Edit</th>
									<th>Delete</th>
                               </tr>
                          </thead>  
                          <?php  
						        include "assignmentconf.php"; 
								$sql = "SELECT * FROM user WHERE NOT sName ='admin' ORDER BY ID"; 
								$result = mysqli_query($con, $sql); 	
								if(mysqli_num_rows($result)<=0) 
								{
									die("<script>alert('No data from database!');</script>");
								}
								while($row = mysqli_fetch_assoc($result))
		                          {  
		                               echo '
		                               <tr>  
		                                    <td>'.$row["ID"].'</td>  
		                                    <td>'.$row["sName"].'</td>  
		                                    <td>'.$row["sNumber"].'</td>  
		                                    <td>'.$row["sDOB"].'</td>  
		                                    <td>'.$row["sEmail"].'</td>  
		                                    <td>'.$row["sContact"].'</td>   
		                                    <td id=\'ed\'><a href="studentEdit.php?id='.$row["ID"].'"><i id=\'icon\' class=\'fas fa-pen \'></i></a></td> 
		                                    <td id=\'ed\'><a href="userDelete.php?id='.$row["ID"].'" onclick=\'return confirm("Are you sure you want to delete user?")\'><i id=\'icon\' class=\'fas fa-trash\'></i></a></td> 
		                               </tr>  
		                               
		                               ';  
		                          }  
                          ?>  
                     </table>  
                </div>

    <!--Footer -->
	<div class="footer">
        <a href="https://www.facebook.com/EduexcelAcademy" class="fa fa-facebook"></a>
        <span>@copyright edueXcel 2020-2022</span>
        <a href="https://www.instagram.com/edexcel_/" class="fa fa-instagram"></a>
    </div>

</body>
</html>