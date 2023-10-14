<?php
    include ("assignmentconf.php");

        $all_question_query = mysqli_query($con, "SELECT Question FROM quiz");
        $total_question =mysqli_num_rows($all_question_query);
        echo "<input type= 'hidden' id = 'total_question' value = '".$total_question."'>";

    if(isset($_REQUEST['n'])){
        
        $n = $_REQUEST['n'];
        echo "Question ";
        echo $n;
        echo " / ";
        echo $total_question;
        echo "<br>";
        $question_query = mysqli_query($con, "SELECT Question FROM quiz WHERE Qnumber = $n");
        $option_query = mysqli_query($con, "SELECT Answer, Answer2, Answer3 FROM quiz WHERE Qnumber = '$n'");

        
    }else{
        $question_query = mysqli_query($con, "SELECT Question FROM quiz WHERE Qnumber = 1");
        $option_query = mysqli_query($con, "SELECT Answer, Answer2, Answer3 FROM quiz WHERE Qnumber = 1");

    }

    $question_result = mysqli_fetch_assoc($question_query);
    
    
    $row = mysqli_fetch_assoc($option_query);
    $row1 =mysqli_num_rows($option_query);
    
    if(isset($_REQUEST['n'])){
        
        foreach ($question_result as $question) {   
            echo $question;
        }
        $a = array();

        do{
            $order = rand(1,3);

            if (!in_array($order,$a)){

                array_push($a,$order);
                         
                if( $order == 1){
                    echo "<br>";
                    echo "<input type='radio' name ='radio-btn' id ='rd-btn1' onchange = 'submitAns()' value =".$row['Answer'].">";
                    echo "<label>".$row['Answer']."</label>";

                }elseif( $order == 2){
                    echo "<br>";
                    echo "<input type='radio' name ='radio-btn' id ='rd-btn2' onchange = 'submitAns()' value =".$row['Answer2'].">";
                    echo "<label>".$row['Answer2']."</label>";
    
                }elseif ( $order == 3){
                    echo "<br>";
                    echo "<input type='radio' name ='radio-btn' id ='rd-btn3' onchange = 'submitAns()' value =".$row['Answer3'].">";
                    echo "<label>".$row['Answer3']."</label>";
    
                }
            }

        }while(array_sum($a) < 6);
               
        echo "<br>";
        echo "<br>";
        echo "<h3 id ='show-ans-area'>Answer :".$row['Answer']."</h3>";
        
    }


    //next question

    
   
    // $update_query = "Update announcement set Title = '$title', Announcement = '$content' WHERE ID = 1";

   

    
    
?>