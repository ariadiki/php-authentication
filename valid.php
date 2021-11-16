<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Validation</title>
</head>
<body>
<div class="login-page">
    <div class="form">
    <form class="login-form" action="valid.php" method="POST">
    <label for="email"><b>Verification Code</b></label></br>
    <input type="number" maxlenght="5" placeholder="Enter your code here" name="code" id="code" required></br></br>
    <button type="submit">Valid</button>
    <?php
        session_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $rand = $_SESSION['num'];
            $num = $_POST['code'];
            if($num == $rand)
            {
                header('location:reset.php');
            }
            else{
                echo '<script>alert("incorrect code")</script>';
            }
        }
    ?>  
</div>
</div>
</body>
</html>