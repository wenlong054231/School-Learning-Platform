<?php
    include("assignmentconf.php");
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="navbar.css">  
	<link rel="stylesheet" href="home.css">
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
                background-color: #FFFFFF; /*later look here pls*/
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

	</style>
</head>
<body>
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

	<nav>
		<ul>
		<li style="background-color:orange"><a href="home.php">Home</a></li>
		<li><a href="uploadfile.php">Study Materials</a></li>
		<li><a href="excelipedia.php">eXcelipedia</a></li>	
		<li><a href="quiz.php">Quiz</a></li>
		<li><a href="news.php">News &#38; Announcement</a></li>
		<li><a href="ContactUs.php">Contact Us</a></li>
			<?php 		 
				 if(isset($_SESSION['username'])){ ?>
				 <li>
		  			<a href="#0">Profile</a>
		  			<ul>
		    			<li><a href="userEdit.php">Account</a></li>
		    			 <?php
		    			 if($_SESSION['username'] == 'admin'){ ?>
		 			   	<li><a href="studentTable.php">Students</a></li>
		 			   	<?php } ?>
				    	<li><a href="logout.php">Log Out</a></li>
		  			</ul>
				</li>
			<?php } ?>
		</ul>
		</nav>

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="school.jpg">
			<div class="about-text">
				<h2>EduExcel</h2>
				<h5><span>Background</span></h5>
				<p style="text-align:justify">EduExcel is a school which establish on year 2018, where currently having nearly 200 students who already enroll and as part of our school. The objective of our
				school is teacihng the student become confident, creative, responsible and self-indepent while dealing in different situation. We
				are not bias to teach student where every student will be treater fair and square. <b>Math</b> and <b>Science</b> is well-known
				subject of our school.</p>
			</div>
		</div>
	</section>

	<!-----service section start----------->
	<div class="staff" style="background-color:white">
		<div class="title">
			<h2 style="color:black">Our Staff</h2>
		</div>

		<div class="box">
			<div class="card">
				<img alt="CEO" src="CEOs.jpg" style="border-radius:50%;width:30%;height:30%" >
				<h5>Jason</h5>
				<div class="pra">
					<p><b>CEO</b></p>
					<p><b>40 Age</b></p>
				</div>
			</div>

			<div class="card">
				<img alt="head of school" src="headschool.jpg" style="border-radius:50%;width:30%;height:30%" >
				<h5>Daniel</h5>
				<div class="pra">
					<p>Head Of School</p>
					<p><b>35 Age</b></p>				
				</div>
			</div>

			<div class="card">
				<img alt="teacher" src="teacher.jpg" style="border-radius:50%;width:30%;height:30%" >
				<h5>May Wang</h5>
				<div class="pra">
					<p><b>Teacher</b></p>
					<p><b>27 Age</b></p>	
				</div>
			</div>
		</div>
	</div>


	<!------footer start--------->
    <div class="footer">
        <a href="https://www.facebook.com/EduexcelAcademy" class="fa fa-facebook"></a>
        <span>@copyright edueXcel 2020-2022</span>
        <a href="https://www.instagram.com/edexcel_/" class="fa fa-instagram"></a>
    </div>

</body>
</html>