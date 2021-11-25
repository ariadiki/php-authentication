<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'mailer/src/PHPMailer.php';
    require 'mailer/src/SMTP.php';
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'email@email.email';                     //SMTP username
    $mail->Password   = 'password';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;     
    $mail->isHTML(true);
    session_start();
    $rand = rand(10000,99999);
    $_SESSION['num']=$rand;
    $mail->setFrom('kizoing@gmail.com', 'ariadiki');
    $mail->addAddress($_POST['email']); //recipient email
    //body
    $mail->Subject = 'Verification Code';
    $mail->Body    = 'Your verification code is: <b>'.$rand.'</b>';
    $mail->send();
    //email sending
    $con = mysqli_connect('localhost','root','','mydb');
    $q = mysqli_query($con,"select * from students where email = '".$_POST['email']."'");
    if($q == false){
        $_SESSION['eml']=$_POST['email'];
        header('location:valid.php');
    }
    else{
        echo '<script>alert("Email not found")</script>';
        header('location:forget.php');
    }
    ?>
</body>
</html>
