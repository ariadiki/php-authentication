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
    if(!empty($user)&&!empty($email)&&!empty($password))
    {
        $insert = "insert into students(`username`, `password`, `email`, `birthday`) 
        values('$username','$password','$email','$birth')";

        $query = mysqli_query($connect,$insert);
        if($query)
        {
            header('location:login.html');
        }else
        {
            echo "Error";
        }
    }else{
        echo "fill in text areas";
        die();
    }
    mysqli_close($connect);
}
?>
