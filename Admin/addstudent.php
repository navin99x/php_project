<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
  
?>

<?php
include('header.php');
?>
<div style="display:flex; justify-content:flex-start; align-items:center; gap:16px; margin: 10px 30px 0 30px;">
    <a href="../index.php" style="background:#7209b7; color:#fff; padding:6px 18px; border-radius:20px; font-weight:600; font-size:1.1em; letter-spacing:1px; text-decoration:none;">Home</a>
    <a href="admindash.php" style="background:#7209b7; color:#fff; padding:6px 18px; border-radius:20px; font-weight:600; font-size:1.1em; letter-spacing:1px; text-decoration:none;">Dashboard</a>
    <span style="margin-left:auto; background: linear-gradient(90deg, #00c6ff 0%, #0072ff 100%); color:#fff; padding:8px 28px; border-radius:22px; font-weight:800; font-size:1.15em; letter-spacing:2px; box-shadow:0 2px 12px rgba(0,114,255,0.13); border:2px solid #fff; text-shadow:0 2px 8px rgba(0,114,255,0.13); filter:brightness(1.08);">ADMIN</span>
</div>
<br><h1 align="center"> Add Students To The Records</h1><br>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
    
    <table align="center" border="1" style="width:70%; margin-top:40px;">
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter City" required></td>
        </tr>
        <tr>
            <th>Parents Contact no.</th>
            <td><input type="text" name="pcon" placeholder="Enter Parents Contact Number" required></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><input type="number" name="standard" placeholder="Enter Standard" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required> </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>

<?php

include('../dbcon.php');

if(isset($_POST['submit'])){
    
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['standard'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
        
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    
    
    
    $qry = "INSERT INTO `student`(`name`, `city`, `pcont`, `standard`, `rollno`,`image`) VALUES ('$name','$city','$pcon','$std','$rollno','$imagename')";
   
    $run = mysqli_query($con,$qry);
    
    if($run == true){
        ?>
        <script>
            alert('Data Inserted Successfully');
        </script>
        <?php
    }
    
        
}


?>
