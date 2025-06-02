<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
 

include('header.php');

?>
    <div style="display:flex; justify-content:flex-start; align-items:center; gap:16px; margin: 10px 30px 0 30px;">
        <a href="../index.php" style="background:#7209b7; color:#fff; padding:6px 18px; border-radius:20px; font-weight:600; font-size:1.1em; letter-spacing:1px; text-decoration:none;">Home</a>
        <a href="logout.php" style="background:#7209b7; color:#fff; padding:6px 18px; border-radius:20px; font-weight:600; font-size:1.1em; letter-spacing:1px; text-decoration:none;">Logout</a>
        <span style="margin-left:auto; background: linear-gradient(90deg, #00c6ff 0%, #0072ff 100%); color:#fff; padding:8px 28px; border-radius:22px; font-weight:800; font-size:1.15em; letter-spacing:2px; box-shadow:0 2px 12px rgba(0,114,255,0.13); border:2px solid #fff; text-shadow:0 2px 8px rgba(0,114,255,0.13); filter:brightness(1.08);">ADMIN</span>
    </div>
    <div style="text-align:center; margin: 30px 0 20px 0;">
        <h2 style="display:inline-block; font-size:1.6em; color:#3a0ca3; font-weight:700; background:#fff; padding:18px 36px; border-radius:12px; box-shadow:0 2px 16px rgba(58,12,163,0.10); margin:0;">Welcome To Admin Dashboard</h2>
    </div>
    <?php
    ?>    
    <div class="dashboard">
        <table style="width:50%;" align="center">
            <tr>
                <td> 1.</td><td><a href="addstudent.php">Insert Student</a></td>
            </tr>
            <tr>
                
                <td> 2.</td><td><a href="updatestudent.php">Update Student</a></td>
            </tr>
            <tr>
                <td> 3.</td><td><a href="deletestudent.php">Delete Student</a></td>
            </tr>

</body>
</html>
