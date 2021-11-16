<?php
        $host="localhost";
        $user="root";
        $pwd="";
        $database="mydb";
        $connect = mysqli_connect($host,$user,$pwd,$database);
       ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Reset Password</title>
</head>
<body>
<div class="login-page">
<div class="form">
    <form class="login-form" action="reset.php" method="POST">
        <label for="psw"><b>New Password</b></label></br>
        <input  type="password" placeholder="Enter your new password" name="password" required></br></br>
        <button  type="submit" value="submit">Apply</button></br>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            session_start();
            $email = $_SESSION['eml'];
            $password= $_POST['password'];
            $con = mysqli_connect('localhost','root','','mydb');
            $q = mysqli_query($con,"update students set password='$password' where email='$email'");
            if($q)
            {
                echo '<script>alert("password is changed successfully")</script>';
                header('location:login.php');
            }else{
                echo '<script>alert("cannot change the password")</script>';
                header('location:login.php');
            }
        }
        ?>
    </form>    
</div>
</div>
</body>
</html>