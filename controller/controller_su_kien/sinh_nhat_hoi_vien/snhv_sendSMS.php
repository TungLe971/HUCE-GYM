<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    // Lấy dữ liệu
    session_start();
    include_once "../../connection.php";
    if(isset($_POST["view_select_id_hv"])){
        $idTen = $_POST["view_select_id_hv"];
    }
    else{
        $idTen = "";
    }
    
    if(isset($_POST["snhv__table--add_tieu_de"])){
        $tieuDe = $_POST["snhv__table--add_tieu_de"];
    }
    else{
        $tieuDe = "";
    }
    

    if(isset($_POST["snhv__table--add_noi_dung"])){
        $noiDung = $_POST["snhv__table--add_noi_dung"];
    }
    else{
        $noiDung = "";
    }
 


    $catChuoi = explode("-",$idTen,2);
    $id_hv = $catChuoi[0];

    $sql = "SELECT * FROM tbl_hoi_vien WHERE id_hv = ".$id_hv." ";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    $gmail = $row['email'];  
    

    //  Gửi gmail
require '../../controller_ktc/email/vendor/autoload.php';

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
    $mail->addAddress("$gmail", 'HUCE GYM - OTP');     //Add a recipient
    $mail->addReplyTo('kienpndev@gmail.com', 'HUCE GYM - OTP');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $tieuDe;
    $mail->Body    = $noiDung;
    $mail->send();
    header("Location: ../../../view/views_su_kien/sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php");
    $_SESSION['check_success'] = "true";
} catch (Exception $e) {
    $_SESSION['check_success'] = "false";
    echo "Sent Failed";
}

    
?>