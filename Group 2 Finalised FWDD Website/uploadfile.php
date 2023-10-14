<?php
    include("assignmentconf.php");
    session_start();

    if(!isset($_SESSION['username'])){
        echo "<script>alert('Required to login to access this page');window.location.href='login.php';</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="navbar.css">
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
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

            #title{
                font-family:'Comic Sans MS';
                padding:5px;
                font-size:20px;
            }

            .stylefileinput{
                margin:0px 0px 0px 80px;
            }

            input{
                display: none;
            }
            label{
                cursor:pointer;
            }
            #imageName{
                color:green;
            }

            .uploadedfiledesign{
                text-decoration:none;
                padding:2px 10px;
                border-color:bisque;
                border-radius:5px;
                background-color:bisque;
                color:black;
            }
    </style>
</head>



<body style="background-color:#ededed;">
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
	<li style="background-color:orange"><a href="uploadfile.php">Study Materials</a></li>
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

    <br />
    <div style="margin:auto;width:50%;background-color:floralwhite;padding:20px;border-radius:20px"> 
        <p style="text-align:center; font-family:'Times New Roman';font-size:30px;margin:auto;padding:15px">Study Materials</p>

    <?php
        if($_SESSION['username'] == "admin"){
            ?>
            <div style="text-align:center">
            <form style="text-align:center" method="post" enctype="multipart/form-data" action="Newupload.php">
                <label for="inputTag">
                Select File<br/>
                <i style="font-size:30px;margin:0px 10px 0px 0px" class="fa fa-2x fa-camera"></i>
                <input class="stylefileinput" id="inputTag"  type="file" name="file" required /><br /><br />
                <span id="imageName"></span>
                </label>
                <br />
                <button style="font-size:20px; background-color:cornsilk;font-family:'Times New Roman';border-color:cornsilk;border-radius:5px" type="submit" name="submit">UPLOAD</button>
            </form>
            </div>
        <?php
        }
        ?>

    <!-- Display uploaded files-->
        <p style="text-align:center">Uploaded Files</p>
        
            <?php
            $sql= "SELECT * FROM uploadfile ORDER BY ID DESC";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) >0){
                ?>
                <table style="text-align:center;margin:auto">
                    <thead >
                        <tr style="font-size:20px;font-weight:bold;border-color:burlywood;background-color:burlywood">
                            <th style="border-radius:5px;padding:10px">File</th>
                            <th style="border-radius:5px";padding:10px>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php
                while ($row = mysqli_fetch_array($result)){
                ?>
                    <tr style="padding:10px">
                        <td style="padding:15px" width="400" class="uploadedfiledesign"><a class="uploadedfiledesign" href="Uploads/<?php echo $row['Document']?>" download=""><?php echo $row['Document'];?></a></td>
                        <td style="padding:15px" width="300" class="uploadedfiledesign"><?php echo $row['Uploaddate'];?></td>
                    </tr>
                <?php
                }
                ?>
                    </tbody>
                    </table>
            <?php
            }
            ?>
        </div>
    <br />
            
    
    <!--Footer -->
    <div class="footer">
        <a href="https://www.facebook.com/EduexcelAcademy" class="fa fa-facebook"></a>
        <span>@copyright edueXcel 2020-2022</span>
        <a href="https://www.instagram.com/edexcel_/" class="fa fa-instagram"></a>
    </div>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

   <script>
        let input = document.getElementById("inputTag");
        let imageName = document.getElementById("imageName")

        input.addEventListener("change", ()=>{
            let inputImage = document.querySelector("input[type=file]").files[0];

            imageName.innerText = inputImage.name;
        })
   </script>

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