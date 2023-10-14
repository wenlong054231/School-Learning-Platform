<?php
    include ("assignmentconf.php");
    $title = mysqli_query($con, "SELECT Title FROM announcement WHERE ID = 1");
    $announcement = mysqli_query($con, "SELECT Announcement FROM announcement WHERE ID = 1");
    $result1 = mysqli_fetch_assoc($title);
    $result2 = mysqli_fetch_assoc($announcement);


    while($row = mysqli_fetch_array($announcement)) {
        echo  $row['Title'] ;

      }

?>
