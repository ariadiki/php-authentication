<?php
$host="localhost"; //or 127.0.0.1
$user="root";
$pwd="";
$database="mydb";
$connect = mysqli_connect($host,$user,$pwd,$database);

session_start();
if(!isset($_SESSION['user']))
{
    header('location:login.html');
}
else{
$birth = $_SESSION['birth'];
$year = $birth[0].$birth[1].$birth[2].$birth[3];
$age = date("Y") - $year;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Profil</title>
</head>
<body>
    <div class="login-page">
    <div class="form">
    <h1>Welcome <?php echo $_SESSION['user']?></h1><br><br>
    <ul>
    <li><b>Age: </b><?php echo $age  ?></li>
    <li><b>Email: </b><?php echo $_SESSION['email']?></li>
    <li><b>Birthday: </b><?php echo $_SESSION['birth']?></li>
    </ul><br>
    <h2 class="message"><a href="logout.php">Logout</a></h2 >
      <?php
      if($_SESSION['user'] == "admin")
      {
        $query = "select * from students";
        $result = mysqli_query($connect,$query);
        echo '<br><h2>Students List:</h2>
        <ul>';
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<li><b>id:</b> '.$row['id'].'<br><b>username:</b> '.$row['username'].'<br><b>email:</b> '.$row['email'].'</li><br>';
        }
        echo '</ul>';
        }
      ?>  
      </div>
</div>
</body>
</html>
<?php
}
?>