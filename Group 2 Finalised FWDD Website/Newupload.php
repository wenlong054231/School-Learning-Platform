<?php
include("assignmentconf.php");
if(isset($_POST['submit'])){

    if(isset($_FILES['file'])){
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $uploaddate = date("d-m-Y h:ia");
        
        $target_dir = "uploads/";

        $target_file = $target_dir.basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
        $image = $_FILES['file']['name'];
    }

    $sql = "INSERT INTO uploadfile (Document,Uploaddate) VALUES (?,'$uploaddate')";

    $stmt = $con->prepare($sql);

    $stmt->bind_param('s',$image);


    if ($stmt->execute()) {
        echo "<script type='text/javascript'>alert('success');

        window.location.href='uploadfile.php';

        </script>";

        exit();

    } else {

        echo "<script type='text/javascript'>alert('Error!');

        window.location.href='uploadfile.php';

        </script>";
    }
}


?>