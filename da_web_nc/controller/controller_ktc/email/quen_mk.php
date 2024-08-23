<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    session_start();
    include_once "../../connection.php";
    $gmail = $_POST["gmail"];
    $sql = "SELECT * FROM account";
    $query = mysqli_query($mysqli, $sql);
    $_SESSION["gmail"]=$gmail;
    $_SESSION["check_email"] = "Email không tồn tại!";
    while ($rows = mysqli_fetch_array($query)) {
        if($rows["username"]==$gmail)
        {

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kienpndev@gmail.com';                     //SMTP username
    $mail->Password   = 'hxgnuwozosbemtjg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kienpndev@gmail.com', 'HUCE GYM - OTP');
    $mail->addAddress("$gmail", 'Code Easy-Kien');     //Add a recipient
    $mail->addReplyTo('kienpndev@gmail.com', 'Code Easy');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your OTP';
    $_SESSION['OTP'] = rand(100000,999999);
    $mail->Body    = $_SESSION['OTP'];
    $mail->send();
    header("Location: ../../../view/views_ktc/doi_mk.php");
} catch (Exception $e) {
    echo "Sent Failed";
}
$_SESSION["check_email"] = "";
    break;
        }
    }
    if($_SESSION["check_email"] != "")
    {
        header("Location: ../../../view/views_ktc/quen_mk.php");
    }
    
?>