<?php

include('../dbcon.php');

    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['standard'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
    $id = $_POST['sid'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    
    
    
    $qry = "UPDATE `student` SET `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std', `rollno` = '$rollno', `image` = '$imagename' WHERE `id` = $id;";
   
    $run = mysqli_query($con,$qry);
    
    if($run == true){
        echo '<script>alert("Data Updated Successfully"); window.location.href = "updatestudent.php";</script>';
        exit();
    }

?>
