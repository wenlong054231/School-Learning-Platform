<?php
    include ("assignmentconf.php");
    
    if (isset($_POST['submit-btn'])){

        $question = $_POST['question'];
        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        $answer3 = $_POST['answer3'];

        $total_query = mysqli_query($con, "SELECT Qnumber FROM quiz");
        $row = mysqli_fetch_assoc($total_query);
        $row1 =mysqli_num_rows($total_query);
        $number = $row1 + 1;
        $insert_query = "INSERT INTO quiz(ID, Qnumber,Question, Answer, Answer2, Answer3) VALUES (NULL,'$number','$question','$answer1','$answer2','$answer3')";
        mysqli_query($con, $insert_query);

        if(mysqli_affected_rows($con) <=0)
            {
                echo "<script>alert('Failed to add question! Please Try Again!');";
                die("window.history.go(-1);</script>");
            }

                echo '<script>alert("Question added successfully!");</script>';
                echo "<script>window.location.href='quiz.php';</script>";
                

    }else if(isset($_POST['modify-btn'])){
        $number = $_POST['question-id'];
        $question = $_POST['question2'];
        $answer1 = $_POST['ans1'];
        $answer2 = $_POST['ans2'];
        $answer3 = $_POST['ans3'];
        $result = mysqli_query($con, "SELECT * FROM quiz WHERE ID = '$id'");
        $row = mysqli_num_rows($result);
        $update_query = "Update quiz set Question = '$question', Answer = '$answer1', Answer2 ='$answer2', Answer3 ='$answer3' WHERE Qnumber = '$number'";

        if ($row > 0){
            mysqli_query($con, $update_query);
            echo "<script>alert('UpdateD Successfully!');</script>";
            
            echo '<script type="text/javascript">


                window.location.href = "quiz.php";
                </script>';

        }else{
            
            mysqli_query($con, $update_query);
            echo "<script>alert('Update Successfully!');</script>";
            
            echo '<script type="text/javascript">


                window.location.href = "quiz.php";
                </script>';
        }
    }
?>