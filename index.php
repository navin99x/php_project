<html>
    <head>
        <meta charset ="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title> Student Management System</title>
        
    </head>
    <body>
        
        <div style="text-align:right; margin: 18px 40px 0 0;">
    <a href="login.php" style="display:inline-flex; align-items:center; gap:10px; background:#fff; color:#7209b7; border:2px solid #7209b7; padding:10px 26px; border-radius:22px; font-weight:700; font-size:1.08em; letter-spacing:1.1px; box-shadow:0 2px 10px rgba(114,9,183,0.10); text-shadow:none; text-decoration:none; transition:background 0.2s, color 0.2s, box-shadow 0.2s;">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" fill="#7209b7"/><path d="M12 12c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3 1.344 3 3 3zm0 2c-2.67 0-8 1.336-8 4v2h16v-2c0-2.664-5.33-4-8-4z" fill="#fff"/></svg>
        Admin Login
    </a>
</div>
        <h1 align="center"> Welcome To Student Management System</h1>
        
        
        <form method="post" action="index.php" >
            <table style="width:50%;" align="center" border="1">
                <tr>
                    <td colspan="2" align="center">Student Information</td>
                </tr>
                <tr>
                    <td>Choose Standard</td>
                    <td>
                        <select name="std">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="10">11th</option>
                            <option value="10">12th</option>
                        </select>
                                   
                    </td>
                </tr>
                <tr>
                    <td>Enter Rollno</td>
                    <td><input type="text" name="rollno"</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
                </tr>
            </table>
                                   
        </form>
            
            
        
        
        
    </body>
    
</html>

<?php

if(isset($_POST['submit'])){
    
    $standard= $_POST['std'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');
    
    showdetails($standard,$rollno);
    
    
    
    
    
    
}

?>