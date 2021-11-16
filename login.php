<?php 
    $host="localhost";
    $user="root";
    $pwd="";
    $database="mydb";
    $connect = mysqli_connect($host,$user,$pwd,$database);
    if(!$connect)
    {
        die("Cannot connect to database:".mysqli_connect_error());
    }else{
        $username = filter_input(INPUT_POST,'username');
        $password = filter_input(INPUT_POST,'password');
        //$hashpass = password_hash($password,PASSWORD_BCRYPT);
        $query = mysqli_query($connect,"select * from students where username = '$username' and password = '$password'");
        
        $row = mysqli_fetch_array($query);
        if($row['username']==$username && $row['password']==$password)
        {
            echo "start";
            session_start();
            $_SESSION['user']=$row['username'];;
            $_SESSION['birth']=$row['birthday'];
            $_SESSION['email']=$row['email'];
            header('location:profil.php');
        }else
        {
            header('location:login.html');
        }
    }
?>