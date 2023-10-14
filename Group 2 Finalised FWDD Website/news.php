<?php
    include("assignmentconf.php");
    session_start();
?>

<!DOCTYPE html>
<html>
 <?php
        //session_start(); //session start here if dun hv login

        include ("news_display.php");
        
        $login_check = "show-login-btn";

        if(isset($_SESSION['username'])){

            $login_check = "hide-login-btn";

        }
        else{
            $_SESSION['username'] = NULL;
        }
    
    ?>

    <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="news.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="navbar.css"> 
    <link rel="stylesheet" href="overalldesign.css" />
    <title>News</title>     
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
    <body >
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
        <!--<nav>-->
        <nav>
		<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="uploadfile.php">Study Materials</a></li>
		<li><a href="excelipedia.php">eXcelipedia</a></li>	
		<li><a href="quiz.php">Quiz</a></li>
		<li style="background-color:orange"><a href="news.php">News &#38; Announcement</a></li>
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
            
        <!--</nav>-->
        
            <div class="flex">
                <div class="center">
                    <div id="top-content">
                        <h1>Announcement</h1>
                        <h2><?php echo $result1['Title']?></h2>
                        <p id="content">
                        <?php echo nl2br($result2['Announcement'])?>
                        </p>
                    </div>
                    <?php if ($_SESSION['username'] == "admin") : ?>
                    
                    <div style="display:flex; justify-content:center;">
                        <br>
                        <form action = "news_update.php" method="post" id="contentform"> 
                            <label>Title :</label>
                            <input type="text" id = "title" name="title" value= "<?php echo $result1['Title']?>">
                            <br>
                            <br>
                            <textarea  id ="announcement" name ="content" form ="contentform" rows="13" cols="60" wrap ="hard" style="text-align:left; line-height: 1.8;" ><?php echo $result2['Announcement'];?></textarea> 
                            <br>
                            <input type ="submit" class ="update-btn" name="submit" value = "Update">
                            
                        </form>
                        
                    </div>
                    <?php endif ?>
                </div>
            </div>


        <div class="sidepanel">
                <h1>Latest News</h1>
                <div style="float:left; ">
                    <ol>
                        <li><a href="uploadfile.php">Explore new study materials!</a></li>
                        <li><a href="quiz.php">Quizz collection for Students</a></li>
                        <li><a href="excelipedia.php">eXcelipedia for our member!</a></li>
                    </ol>
                </div>  

        </div>
        
        <div class = "right-side-bar">
            <h2>READ NEWS</h2>
            <h4 style="position:absolute; bottom:30%;">Click Here!</h4>
            <div class ="news-container">
                        <div id ="news-section">
                            <h2 >Student News</h2>
                        </div>
                        <script src="//rss.bloople.net/?url=https%3A%2F%2Fwww.thestar.com.my%2Frss%2FNews%2FEducation&limit=4&showicon=true&type=js"></script>
                        <button id ="close-btn">Close</button>
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
            
            $(".right-side-bar").click(function(){
                $(".news-container").animate({
                left: '250px',
                height: '100%',
                width: '60vw',
                }, );
            });
            
             $("#close-btn").click(function(e){
                e.stopImmediatePropagation(); // Prevent parent from executing
                $(".news-container").animate({
                right:'0',
                width: '10vw',
                });
                });
                
            
           

            
               

            // $(document).toggle(function(){
            // $(".right-side-bar").click(function(){
            //     $(".news-container").animate({
            //     left: '250px',
            //     height: '1vw',
            //     width: '60vw',
                
            //     });
            // });
            // });
        </script> 
            
        
    </body>

</html>