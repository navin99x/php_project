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
<br><h1 align="center">Update Data Of Students</h1><br>
<table align="center">
<form action="updatestudent.php" method="post">
    <tr>
        <th>
            Enter Standard
        </th>
        <td>
            <input type="number" name="standard" placeholder="Enter Standard" required="required"/>
        </td>
    
        <th>
            Enter Student Name
        </th>
        <td>
            <input type="text" name="stuname" placeholder="Enter Student Name" required="required"/>
        </td>
    
        <td colspan="2"><input type="submit" name="submit" value="Search"/></td>
    </tr>
    
    
</form>
</table>
<br>

<table align="center" width="80%" border="1" style:"margin-top:10px;">
    <tr style="background-color:#000; color:#fff; ">
        <th>No.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Edit</th>
    </tr>
    
    <?php

    if(isset($_POST['submit'])){
        include('../dbcon.php');

        $standard = $_POST['standard'];
        $name=$_POST['stuname'];

        $sql = "SELECT * FROM `student` WHERE `standard`='$standard' AND `name`LIKE '%$name%'"; 

        $run=mysqli_query($con, $sql);

        if(mysqli_num_rows($run)<1){
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
        }
        else{
            $count=0;
            while($data=mysqli_fetch_assoc($run)){
                $count++;
                ?>
                <tr align="center">
                    <td><?php echo $count;?></td>
                    <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"/> </td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['rollno']; ?></td>
                    <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                </tr>

        <?php
            }
        }
    }
?>
    
</table>

