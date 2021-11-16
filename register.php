<?php 
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
                    header('location:signup.html');
                }else
                {
                    echo '<script>alert("Query Error")</script>';
                    header("Refresh:0; url=index.html");
                
                }
            }else{
                echo '<script>alert("username already exists")</script>';
                header("Refresh:0; url=index.html");
            }
    }
    mysqli_close($connect);
?>