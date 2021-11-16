<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="test.php" method="POST">
            <label for="text"><b>Username</b></label></br>
            <input type="text" placeholder="Enter username" name="user" id="user" required></br></br>

            <label for="bth"><b>Birthday</b></label></br>
            <input type="date" placeholder="Enter your birthday" name="bth" id="bth" min="1970-01-01" max="2005-01-01" required></br></br>

            <label for="email"><b>Email</b></label></br>
            <input type="email" placeholder="Enter your email" name="email" id="email" required></br></br>

            <label for="psw"><b>Password</b></label></br>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required></br></br>
    
            <button type="submit" value="submit">Sign Up</button></br></br>
            <b class="message">already have an account? <a href="login.html">login</a></b>
            </form>
            <?php 
            echo '<script>alert("error")</script>';
    $host="localhost"; //or 127.0.0.1
    $user="root";
    $pwd="";
    $database="mydb";
    $connect = mysqli_connect($host,$user,$pwd,$database);
    if(!$connect)
    {
        die("Cannot connect to database:".mysqli_connect_error());
    }else
    {
        echo '<script>alert("error2")</script>';
        $username= filter_input(INPUT_POST,'user'); //or $_GET["user"]; or $_POST["user"];
        $birth= filter_input(INPUT_POST,'bth');
        $email= filter_input(INPUT_POST,'email');
        $password= filter_input(INPUT_POST,'psw');
        $check = mysqli_query($connect,"select * from students where username='$username'");
            if(!$check)
            {
                //$hashpass = password_hash($password,PASSWORD_BCRYPT);
                $insert = "insert into students(`username`, `password`, `email`, `birthday`) 
                values('$username','$password','$email','$birth')";
                $query = mysqli_query($connect,$insert);
                if($query)
                {
                    //header('location:signup.html');
                }else
                {
                    echo '<script>alert("error")</script>';
                }
            }else{
                echo '<script>alert("username already exists")</script>';
            }
    }
    mysqli_close($connect);
?>
        </div>
    </div>
</body>
</html>