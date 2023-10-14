<?php
    include("assignmentconf.php");
    session_start();
?>

<!DOCTYPE html>
<html>
    <?php
        //session_start();//session start here if didnt hv login    
        $login_check = "show-login-btn";

        if(isset($_SESSION['username'])){
                
            $login_check = "hide-login-btn";
            if($_SESSION['username'] == "admin"){

                //show management form
                $teacher_display = "show-management-form";
                
                //show login

            }else{
                //hide form
                $teacher_display = "hide-management-form";
            }
        
        }
        session_abort();  
    
    ?>
    <head>
    	<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="news.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="navbar.css">
        <title>Quizz for Students</title>
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
            width:500px;
            height:600px; 
            font-size:24px; 
            font-family:'Times New Roman';
            margin:auto;
            resize:none;
            box-shadow:5px 8px #0096FF;
        }

        button{
            cursor:pointer;
        }

        .stylingwordcount{
            font-size:30px;
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
                background-color: #A7C7E7;
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

            .buttondesign{
                background-color:cornsilk;
                font-size:18px;
                font-family:'Comic Sans MS';
                padding:5px;
                border-radius:10px;
                border-color:antiquewhite;
                margin: 10px 10px;             
            }

            .buttondesign:hover{
                background-color:lavenderblush;
            }

            .addTopic{
                background-color: salmon;
                font-size:24px;
                border-radius:5px;
                border-color:lightsalmon;
            }

            #title{
                font-family:'Comic Sans MS';
                padding:5px;
                font-size:20px;
            }
    </style>
    </head>
    

    <body onload="displayTotalQuiz()">
    <!--Marquee Tag-->
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
		<li style="background-color:orange"><a href="quiz.php">Quiz</a></li>
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

     <!--</nav>-->

        <div class = "quiz-container" >
            <div class ="center" >
                <div id="blank">
                    <h3 id ="quiz-title">Try out this quiz for students!</h3>
                    <div id = "question-section">
                        
                    </div>
                    <h3 id="totalmarks" style="position:absolute; bottom: 10%; right:20%; visibility:hidden;"></h3>  
                </div>
                <button class="update-btn quiz-btn" id ="start-quiz-btn" onclick="startQuiz()">Start</button>
                <input type= "hidden" id = "no" value = "1">
                <button class="update-btn quiz-btn" id ="quiz-next-btn" onclick="nextQuiz()">Next</button>
                <button class="update-btn quiz-btn" id ="quiz-prev-btn" onclick="previousQuiz()">Previous</button>
                <button class="update-btn quiz-btn" id ="show-ans-btn" onclick="showAnswer() ">Show Answer</button>
                <button class="update-btn quiz-btn" id ="submit-ans-btn" onclick="showMarks()">Submit</button>
                <button class="update-btn quiz-btn" id="retrybtn" onclick="window.location.reload();">Retry</button>
            </div>
            <div id ="displaymarks">
                
            </div>
        </div>
        <?php if(isset($_SESSION['username'])): ?>
        <div class = "teacher-quiz <?php echo $teacher_display ?>">
            <div class = "quiz-form" style="resize:vertical">
            <h2>Manage Quiz</h2>
            <form action="manage_quiz.php" method="post">
                <div>
                    <label id="label-quiz">Question:</label>
                    <textarea rows="4" cols="10" id ="quiz-form-text" name="question" required></textarea>
                    <label id="label-quiz">Answer:</label>
                    <input type="text" id ="quiz-form-text" name ="answer1" autocomplete ="off" required>
                    <label id="label-quiz">Choice 1:</label>
                    <input type="text" id ="quiz-form-text" name ="answer2" autocomplete ="off" required>
                    <label id="label-quiz">Choice 2:</label>
                    <input type="text" id ="quiz-form-text" name ="answer3" autocomplete ="off" required>
                    <input type="submit" class="update-btn" name ="submit-btn" value="Add" style="width:200px; margin-top:10px; margin-left:20px;">
                </div>
                </form>
            </div>
            <div class = "quiz-form2" style="resize:vertical">
            <form action="manage_quiz.php" method="post">
                <div>
                    <label id="label-quiz">Question:</label>
                    <input type="text" name = "question-id"style="display:inline-block; width:40px;" placeholder="No." required>
                    <h4 style="display:inline-block;" id="label-form"></h4>
                    <textarea rows="4" cols="10" id ="quiz-form-text" name ="question2" required></textarea>
                    <label id="label-quiz">Answer:</label>
                    <input type="text" id ="quiz-form-text" name ="ans1" required autocomplete ="off">
                    <label id="label-quiz">Choice 1:</label>
                    <input type="text" id ="quiz-form-text" name ="ans2" required autocomplete ="off">
                    <label id="label-quiz">Choice 2:</label>
                    <input type="text" id ="quiz-form-text" name ="ans3" required autocomplete ="off">
                    <input type="submit" class="update-btn" name ="modify-btn" value="Modify" style="width:200px; margin-top:10px; margin-left:20px;">
                </div>
                </form>
            </div>
        </div>
        <?php endif ?>

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
            var num = document.getElementById('no').value;
            const selected_ans = ["Skipped","Empty"];
            const answer_check = ["Skipped","Empty"];
            
            //start quiz 
            function startQuiz(){
                document.getElementById("quiz-title").style.display = "none";
                document.getElementById("show-ans-btn").style.visibility = "visible";
                document.getElementById("submit-ans-btn").style.visibility = "visible";
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("question-section").innerHTML = this.responseText;
                    document.getElementById("question-section").style.visibility = "visible";
                    document.getElementById("start-quiz-btn").style.visibility = "hidden";
                    document.getElementById("quiz-next-btn").style.visibility = "visible";
                    
                }
            };
            xmlhttp.open("GET","quizz.php?n=1",true);
            xmlhttp.send();
            };
            
            function showAnswer(){
                document.getElementById("totalmarks").style.visibility = "hidden";
                document.getElementById("show-ans-area").style.visibility = "visible";

            }

            //Next quiz 
            function nextQuiz(){
                var total_question = document.getElementById('total_question').value;
                answer_check[num] =  document.getElementById("show-ans-area").innerHTML;
                //check question is not answered
                if(selected_ans[num] == null){

                    selected_ans[num] = "Empty";
                    

                }
                
                if(num < total_question){
                    document.getElementById('no').value = num++;
                    var xmlhttp = new XMLHttpRequest();

                    xmlhttp.onreadystatechange = function() { 
                        
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("question-section").innerHTML = this.responseText;
                            document.getElementById("question-section").style.visibility = "visible";
                            document.getElementById("start-quiz-btn").style.visibility = "hidden";
                            document.getElementById("quiz-next-btn").style.visibility = "visible";
                            document.getElementById("quiz-prev-btn").style.visibility = "visible";
                            
                        }
                        
                        var rad_val1 = document.getElementById('rd-btn1').value;
                        var rad_val2 = document.getElementById('rd-btn2').value;
                        var rad_val3 = document.getElementById('rd-btn3').value;
                        if(selected_ans[num] == rad_val1){
                        
                            document.getElementById("rd-btn1").checked = true;

                        }else if(selected_ans[num] == rad_val2){

                            document.getElementById("rd-btn2").checked = true;

                        }else if(selected_ans[num] == rad_val3){

                            document.getElementById("rd-btn3").checked = true;

                        }else{

                        }
                    };
                        xmlhttp.open("GET","quizz.php?n="+num,true);
                        xmlhttp.send();
                }

            }

            //Back to previous quiz
            function previousQuiz(){
            
                if(num > 1){
                    num--;
                    
                    document.getElementById("quiz-prev-btn").style.visibility = "visible";
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        
                        
                        
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("question-section").innerHTML = this.responseText;
                    }
                        var rad_val1 = document.getElementById('rd-btn1').value;
                        var rad_val2 = document.getElementById('rd-btn2').value;
                        var rad_val3 = document.getElementById('rd-btn3').value;
                        if(selected_ans[num] == rad_val1){
                        
                            document.getElementById("rd-btn1").checked = true;

                        }else if(selected_ans[num] == rad_val2){

                            document.getElementById("rd-btn2").checked = true;

                        }else if(selected_ans[num] == rad_val3){

                            document.getElementById("rd-btn3").checked = true;

                        }else{

                        }
                    };
                    xmlhttp.open("GET","quizz.php?n="+num,true);
                    xmlhttp.send();
                }
                else{
                    
                    if (num <1){
                        num++;
                        document.getElementById("quiz-prev-btn").style.visibility = "visible";
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            var rad_val1 = document.getElementById('rd-btn1').value;
                            var rad_val2 = document.getElementById('rd-btn2').value;
                            var rad_val3 = document.getElementById('rd-btn3').value;

                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("question-section").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET","quizz.php?n=1",true);
                        xmlhttp.send();
                    }
            }

            }

           //Add choice to array
            function submitAns(){
                
                var rbtn1 = document.getElementById("rd-btn1").checked;
                var rbtn2 = document.getElementById("rd-btn2").checked;
                var rbtn3 = document.getElementById("rd-btn3").checked;
                var ans1  = document.getElementById('rd-btn1').value;
                var ans2  = document.getElementById('rd-btn2').value;
                var ans3  = document.getElementById('rd-btn3').value;

                if(rbtn1){
                    
                    selected_ans[num] = ans1;
                    
                }else if(rbtn2){

                    selected_ans[num] = ans2;

                }else if (rbtn3){

                    selected_ans[num] = ans3;

                }else{

                    alert("Empty");

                }

            }

            function showMarks(){
                var correct = 0;
                var count_empty = 0;
                const empty_question =[];
                answer_check[num] =  document.getElementById("show-ans-area").innerHTML;
                document.getElementById("show-ans-area").style.visibility = "hidden";
                var total_question = document.getElementById('total_question').value;
                var displaymarks = correct + "/" + total_question;
                document.getElementById("totalmarks").style.visibility = "visible";
                document.getElementById("retrybtn").style.visibility = "visible";

                for(var i = 1; i <= total_question; i++){

                        if(selected_ans[i] == answer_check[i].split(":").pop()){
                            correct++;
                            
                        }
                        if(selected_ans[i] == "Empty"){
                            count_empty++;
                            empty_question.push(i);
                        }

                        //check undefined
                        if(typeof selected_ans[i] == 'undefined'){

                            count_empty++;
                            empty_question.push(i);
                        }

                 

                }
              
                //Display empty question
                if( count_empty > 0  ){
                    document.getElementById("totalmarks").innerHTML = "Please dont leave them empty! Question" + empty_question;
                    document.getElementById("totalmarks").style.visiblity = "visible";
                }else{
                    
                    document.getElementById("totalmarks").style.visiblity = "hidden";
                   
                    document.getElementById("displaymarks").innerHTML = "Total Marks:" +  correct + "/" + total_question;

                     
                    document.getElementById("displaymarks").style.display = "block";
                    $("#displaymarks").animate({
                    left: '250px',
                    top:'100px',
                    height: '10%',
                    height:'40%',
                    width: '40%',
                    }, );
                      

                }
               
            }

            //display total question
            function displayTotalQuiz() {
               
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("question-section").innerHTML = this.responseText;
                        
                    } 
                    var total_question = document.getElementById('total_question').value;
                    document.getElementById("label-form").innerHTML = "/" + total_question;
                  };
                xmlhttp.open("GET","quizz.php?",true);
                xmlhttp.send();
                

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