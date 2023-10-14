<?php
    include ("assignmentconf.php");

    $title = $_POST['title'];
    $content = $_POST['content'];
    $query = "Insert into announcement(ID,Title, Announcement) VALUES (1, '$title', '$content')";
    $result = mysqli_query($con, "SELECT * FROM announcement WHERE ID = 1");
    $row = mysqli_num_rows($result);
    $update_query = "Update announcement set Title = '$title', Announcement = '$content' WHERE ID = 1";

    if (isset($_POST['submit'])){

        if ($row > 0){
            mysqli_query($con, $update_query);
            echo "<script>alert('UpdateD Successfully!');</script>";
            
            echo '<script type="text/javascript">


                window.location.href = "news.php";
                </script>';

        }else{
            
            mysqli_query($con, $query);
            echo "<script>alert('Update Successfully!');</script>";
            
            echo '<script type="text/javascript">


                window.location.href = "news.php";
                </script>';
        }
    }

?>