<?php
    include("assignmentconf.php");
    session_start();
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
        html{
            background:url('worldmap.jpg') no-repeat center center fixed;
            background-size:cover;
        }

        input[type=text], input[type=email], input[type=tel]{
            width:80%;
            font-size:20px;
            font-family:'Times New Roman';
            padding:10px;
            border-radius:10px;
            box-shadow: 0px 0px 24px 0px blue;
        }

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

        /* Create two unequal columns that sits next to each other */ /* Sidebar/left column */

        .splitintohalf{
            flex:50%;
            padding:20px;
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
        <div class="rightside" style="background-color:gold;text-align:center;padding: 10px 0px">
            <p style="font-size:16px;font-style:italic">Certified by MOE</p>
            <img src="MOE3.jpg" width="115" height="50" style="mix-blend-mode:multiply;" />            
        </div>
     </div>

    <!--Navigation Bar -->
    <nav>
		<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="uploadfile.php">Study Materials</a></li>
		<li><a href="excelipedia.php">eXcelipedia</a></li>	
		<li><a href="quiz.php">Quiz</a></li>
		<li><a href="news.php">News &#38; Announcement</a></li>
		<li style="background-color:orange"><a href="ContactUs.php">Contact Us</a></li>
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

    
    <!--The flexible grid (content) -->
    <div style="text-align:center;color:ghostwhite">
        <h1 style="font-family:'Comic Sans MS'">GET IN TOUCH WITH US</h1>
        <h3>Call US at: +03-0423423</h3>
        <h3>Email US at: <a style="color:orangered;font-style:italic" href="mailto: edueXcel@gmailcorp.com">edueXcel@gmailcorp.com</a></h3>
        <h2>WE ARE LOCATED AT</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1517.769480290153!2d100.29683453729695!3d5.392800305744633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac22a3364b857%3A0x568e0dd44bbe535d!2sEduexcel%20Academy%20%2F%20Eduexcel%20Tuition%20Centre!5e0!3m2!1sen!2smy!4v1653411019967!5m2!1sen!2smy" 
                width="500" height="300" style="border:0;border-radius:5px;box-shadow:0px 0px 20px lavenderblush" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
        <form id="feedForm" method="post">
            <div class="row">
                    <div class="splitintohalf" style="text-align:right" >
                        <input type="text" id="username" name="username" placeholder="Full Name (ex: Lau Xin Yi)" pattern="^(?!.*[^a-zA-Z ])(?=[A-Z].*)(?!.* {2}.*)(?!.*[A-Z]{2}.*)(?!.*[a-z][A-Z].*)(?!.*[A-Z] .*)(?!.* [a-z].*).{2,49}[a-z]$" required/><br /><br/><br /><br />
                        <input type="tel" id="telephone" name="telephone" placeholder="Enter your Phone Number (ex: 012-4242221)" pattern="^[0][1][2-9]-[0-9]{7}$|^[0][1][1]-[0-9]{8}$" required/><br /><br /><br /><br />
                        <input type="email" id="email" name="email_check" placeholder="Enter your Email (ex: example_123@gmail.com)" pattern="^[a-zA-Z](?!.*[^a-zA-Z0-9_@.])(?!(.*[@]){2,})(?!(.*[.]){2,})(?!(.*[_]){2,})(?=(.*[0-9]){0,})(?=(.*[A-Z]){0,}).{1,18}[a-zA-Z0-9]@gmail.com" required/><br />
                        <span style="color:floralwhite" id="msg"></span>
                    </div>
                    <div class="splitintohalf"> 
                        <textarea id="feedback" name="feedback" required placeholder="Comment your feedback here..." style="width:80%; height:250px; font-size:20px;padding:10px;font-family:'Times New Roman';border-radius:10px;
                         box-shadow: 0px 0px 24px 0px green; resize:none"></textarea>
                    </div>
            </div>
            <div style="text-align:center">
                <button id="feed" name="save" type="submit" style="font-size:30px; font-family: 'Times New Roman'; border-radius:5px; border-color:aliceblue;background-color:aliceblue;">Confirm</button>
            </div>
            <div id="error_msg" style="text-align:center;color:white"></div>
        </form>
        <br />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $('document').ready(function () {
            var email_state = false;

            $('#email').blur(function () {
                var emailAdd = $('#email').val();
                if (emailAdd == '') {
                    email_state = false;
                    return;
                }

                $.ajax({
                    url: 'processfeed.php',
                    type: 'post',
                    data: {
                        'email_check': 1,
                        'email': emailAdd
                    },
                    success: function (response) {
                        if (response == 'not_available') {
                            email_state = false;
                            $('#msg').text("Email already exist!");
                        } else if (response == 'available') {
                            email_state = true;
                            $('#msg').text("Email available");
                        }
                    }
                });
            });

            $('#feed').click(function (e) {
                var user_name = $('#username').val();
                var emailAdd = $('#email').val();
                var telAdd = $('#telephone').val();
                var feedAdd = $('#feedback').val();

                var $feedForm = $('#feedForm');
                if (!$feedForm[0].checkValidity()) {
                    $feedForm.find(':submit').click();
                }

                if (email_state == false) {
                    $('#error_msg').text('Fix the errors first');
                    e.preventDefault();
                } else {
                    $('#error_msg').text("");

                    $.ajax({
                        url: 'processfeed.php',
                        type: 'post',
                        data: {
                            'save': 1,
                            'email': emailAdd,
                            'username': user_name,
                            'telephone': telAdd,
                            'feedback': feedAdd
                        },
                        success: function (response) {
                            alert(response);

                            $('#username').val('');
                            $('#email').val('');
                            $('#telephone').val('');
                            $('#feedback').val('');
                        }
                    });
                }
            });
        });
    </script>



    <!--Footer -->
    <div class="footer">
        <a href="https://www.facebook.com/EduexcelAcademy" class="fa fa-facebook"></a>
        <span>@copyright edueXcel 2020-2022</span>
        <a href="https://www.instagram.com/edexcel_/" class="fa fa-instagram"></a>
    </div>

</body>
</html>