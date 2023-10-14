<?php
    include("assignmentconf.php");
    session_start();

    if(!isset($_SESSION['username'])){
        echo "<script>alert('Required to login to access this page');window.location.href='login.php';</script>";
    }

    if(isset($_POST["btnAdd"]))
    {
        $newwiki = $_POST["title"];

        $sql = "INSERT INTO wiki (wikititle,wiki,LastUpdate) values ('$newwiki','','')";

        if(!mysqli_query($con,$sql))
        {
            die("Error ".mysqli_error($con));
        }
        else
        {
            echo "<div id='adddialogbox' style='font-size:20px;display:none'>Added Successfully!</div>";
        }
        mysqli_close($con);
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
		<li style="background-color:orange"><a href="excelipedia.php">eXcelipedia</a></li>	
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
	
	<!---->
        <!--The flexible grid (content) -->
        <div class="row">
            <div class="side" style="background-color:#87CEEB">
                <h2>Recent Topic</h2>
                <h4>Water Contamination and Shortage</h4>
                <img src="watercontamination.jpg" style="width:100%" />
                <p style="text-align:justify">2.1 billion people in countries undergoing urbanization have inaccessibility to clean drinking water as a result of 
                pollution, poverty and poor management of resources. Water resources are depleted by agriculture and industry energy production. 
                To put into perspective, agriculture accounts for <span style="background-color:chartreuse">70</span> percent of the reduction of water around the world, with <span style="background-color:chartreuse">75</span> percent of a 
                given countries water used for this purpose and depleted by contamination.</p>
             </div>
        
            <div class="main" style="text-align:center">
                <br />
                <?php
                    if($_SESSION['username'] == "admin"){
                        echo "<button id='addClick' class='addTopic'>Add New Topic</button>";
                    }
                ?>
                
                <div id="titlebox" style="display:none">
                    <br /><br />
                    <form action="excelipedia.php" method="post">
                        <span style="font-size:24px">Enter New Topic</span>
                        <input type="text" name="title" id="title" pattern="^(?!.* {2,}.*).{4,100}$" style="width:400px" required />
                        <button type="submit" name="btnAdd" class="addTopic">Add</button>
                    </form>
                </div>

                <h2>Topic Discussions</h2>
                <?php
                    include("assignmentconf.php");

                    $sql = "SELECT * FROM wiki";

                    $result = mysqli_query($con,$sql);

                    while($row = mysqli_fetch_assoc($result)){
                        echo '<button class="buttondesign" onclick="window.location.href=\'wikiwiki.php?id='.$row["ID"].'\'">'.$row["wikititle"].'</button>';
                    }
                ?>
            </div>

            <div class="rightside" style="background-color:#87CEEB">
                <h2>Recent Topic</h2>
                <h4>Violence</h4>
                <p style="text-align:justify">Violence is a global issue that exists in all shapes and sizes. Violence can be done towards a particular group like women or LGBT 
                members, or it is an act that can be a result of a mentally disturbed mind. There is also violence in response to economic stress. </p>
                <div style="text-align:justify;padding:0px">
                    -How is this violence used?<br>
                    -How is it being achieved/accessed?<br>
                    -Does the media have a role?<br>
                    -How much is the foundation for a particular act of violence is personal?
                </div>
                <br><br>
                <img src="violence.png" style="width:100%"/>
                <a href="https://news.un.org/en/story/2022/04/1115552">Click <u>here</u> for more information</a>
            </div>
        </div>

    <!--Footer -->
    <div class="footer">
        <a href="https://www.facebook.com/EduexcelAcademy" class="fa fa-facebook"></a>
        <span>@copyright edueXcel 2020-2022</span>
        <a href="https://www.instagram.com/edexcel_/" class="fa fa-instagram"></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#addClick").click(function () {
                $("#titlebox").toggle();
            });
        });
    </script>

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