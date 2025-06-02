<?php

session_start();

if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>
<html lang="en_US">
    <head>
        <meta charset ="UTF-8">
        <title> Admin Login </title>
        <link rel="stylesheet" href="css/style.css">
        <style>
            .login-container {
                background: #fff;
                border-radius: 16px;
                box-shadow: 0 4px 24px rgba(58,12,163,0.10);
                max-width: 400px;
                margin: 3em auto 0 auto;
                padding: 2.5em 2em 2em 2em;
            }
            .login-container h1 {
                color: #3a0ca3;
                margin-bottom: 1.2em;
                font-size: 2em;
            }
            .login-container table {
                width: 100%;
                border: none;
                background: transparent;
                box-shadow: none;
            }
            .login-container td {
                border: none;
                padding: 0.7em 0.3em;
            }
            .login-container input[type="text"],
            .login-container input[type="password"] {
                width: 95%;
            }
            .login-container input[type="submit"] {
                width: 100%;
                margin-top: 1.2em;
            }
            .back-home {
                display: block;
                text-align: center;
                margin-top: 1.5em;
                color: #fff;
                background: linear-gradient(90deg, #4361ee 0%, #7209b7 100%);
                border-radius: 6px;
                padding: 0.7em 0;
                font-weight: 600;
                text-decoration: none;
                transition: background 0.2s;
            }
            .back-home:hover {
                background: linear-gradient(90deg, #7209b7 0%, #4361ee 100%);
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h1 align="center">Admin Login</h1>
            <form action="login.php" method="post">
                <table>
                    <tr>
                        <td>Username</td><td><input type="text" name="uname"></td>
                    </tr>
                    <tr>
                        <td>Password</td><td><input type="password" name="pass"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </form>
            <a href="index.php" class="back-home">Back to Home</a>
        </div>
    </body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['login'])){
    
    $username = mysqli_real_escape_string($con,$_POST['uname']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);
    
    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row>=1)
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
        
        
        $_SESSION['uid']=$id;
        
        header('location:admin/admindash.php');
        
    }
    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('login.php','_self')
</script>
        <?php
    }
}

?>