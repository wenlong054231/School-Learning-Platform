<?php
    include("assignmentconf.php");
    session_start();

    if(!isset($_SESSION['username'])){
        echo "<script>alert('Required to login to access this page');window.location.href='login.php';</script>";
    }

    if(isset($_POST["btnSave"]))
    {
        $id = $_POST["id"];
        $updatedwiki = $_POST["wiki"];                      
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $latestupdate = $_SESSION["username"]."&nbsp;&nbsp;".date("d-m-Y h:ia");
        
        $sql = "UPDATE wiki SET wiki = '$updatedwiki', LastUpdate = '$latestupdate' WHERE ID = '$id'";

        if(!mysqli_query($con,$sql))
        {
            die("Error ".mysqli_error($con));
        }
        else
        {
            echo "<script>alert('Wiki Updated'); window.location.href='excelipedia.php';</script>";
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
    <link href="jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="navbar.css">
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

        #wiki{
            width: 700px;
            height:500px; 
            font-size:24px; 
            font-family:'Times New Roman';
            margin:auto;
            resize:none;
            box-shadow:0px 0px 5px 5px #0ff;
        }

        button{
            cursor:pointer;
        }

        .stylingwordcount{
            font-size:24px;
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
            /* Style the top navigation bar */

            .navbar {
                display: flex;
                background-color: #333;
                font-size:14px;
            }
                /* Style the navigation bar links */

            .navbar a {
                color: white;
                padding: 7px 15px;
                text-decoration: none;
                text-align: center;
            }
                /* Change color on hover */

            .navbar a:hover {
                background-color: #ddd;
                color: black;
            }

            .navbar a:active{
                background-color:aquamarine;
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
                background-color: darkturquoise;
                padding: 10px;
            }

            .rightside{
                flex:20%;
                background-color: #f2f2f2;
                padding: 10px;
            }
            /* Fake image, just for this example */

            .fakeimg {
                background-color: #aaa;
                width: 100%;
                padding: 20px;
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
    <?php
        include("assignmentconf.php");

        $id = intval($_GET["id"]);

        $sql = "SELECT * FROM wiki WHERE ID =".$id;

        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result)
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

    <!--Navigation Bar -->
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

    <div class="row">
            <div class="side" style="background-color:#CCCCFF;">
                <h2>Hot Topics</h2>
                <img src="monkeypox2.jpg" style="width:100%" />
                <p style="text-align:justify">The name monkeypox originates from the initial discovery of the virus in monkeys in a Danish 
                laboratory in 1958. The first human case was identified in a child in the Democratic Republic of the Congo in 1970.</p>
                <h3>About Monkeypox</h3>
                <p style="text-align:justify">Monkeypox can be contained in countries outside of Africa where the virus is not usually detected, the World Health Organization (WHO) says.
                More than 100 cases of the virus - which causes a rash and a fever - have been confirmed in Europe, the Americas and Australia.</p>
                <img src="monkeypox1.jpg" style="width:100%" />
             </div>
        
            <div class="main" style="text-align:center">
                <div style="margin: auto;text-align:center">
                    <br />
                    <span style="font-size:20px;font-style:italic">Last Updated by <?php echo $row["LastUpdate"];?></span>
                    <p id="count-words"></p>
                    <p id="max-words"></p>
                    <form action="wikiwiki.php" method="post">
                        <p style="font-size:30px;"><?php echo $row["wikititle"];?></p>

                        <input type="hidden" name="id" value="<?php echo $row["ID"];?>" />
                        <textarea style="background-color:aliceblue;border-color:aliceblue;border-radius:10px" id="wiki" name="wiki" onkeyup="countWords(this)"><?php echo $row["wiki"];?></textarea>
                        <br/><br/>
                        <button style="font-size:30px;background-color:coral;border-radius:10px;border-color:coral;" type="submit" name="btnSave" id="btnSave">Save</button>
                        <button style="font-size:30px;background-color:tomato;border-radius:10px;border-color:tomato" type="reset" name="btnReset">Reset Changes</button>
                    </form>
                </div>
            </div>

            <div class="rightside" style="background-color:#CCCCFF;">
                <h2>Hot Topics</h2>
                <h4>Inequality</h4>
                <img src="inequality.jpg" style="width:100%"/>
                <p style="text-align:justify">On a global scale, the focus on inequality tends to be in terms of the distribution of wealth. 
                According to a Global Wealth Report, 44 percent of global net worth is held by only 0.7 percent of adults. 
                This suggests that there is a significant division between economic classes around the world. </p> 
                <a href="https://borgenproject.org/tag/global-issues/">For more information</a>
            </div>
        </div>

    <script type="text/javascript">
        function countWords(self) {
            var spaces = self.value.match(/\S+/g);
            var words = spaces ? spaces.length : 0;

            document.getElementById("count-words").innerHTML = "<i class='stylingwordcount'>" + words + " words</i>";

            if (words > 800) {
                document.getElementById("btnSave").disabled = true;
                document.getElementById("max-words").innerHTML = "<b style='font-size:34px;color:red;'>You Have Exceeded 800 words max</b>";
            }
            else {
                document.getElementById("btnSave").disabled = false;
                document.getElementById("max-words").innerHTML = "";
            }
        }
    </script>

    <!--Footer -->
    <div class="footer">
        <a href="https://www.facebook.com/EduexcelAcademy" class="fa fa-facebook"></a>
        <span>@copyright edueXcel 2020-2022</span>
        <a href="https://www.instagram.com/edexcel_/" class="fa fa-instagram"></a>
    </div>

</body>
</html>