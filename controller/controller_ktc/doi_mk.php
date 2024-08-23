<?php
    session_start();
    //ket noi
    include_once "../connection.php";
    $otp = $_POST["maOTP"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $_SESSION["ssPass"] = "";
    $_SESSION["ssOTP"] = "";
    $_SESSION["ktraThanhCong"] = false;
    if($password==$confirm_password)
    {
        if($otp == $_SESSION["OTP"])
        {
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "UPDATE account SET password='".$password."' WHERE username='".$_SESSION["gmail"]."'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    $_SESSION["ktraThanhCong"]=true;
    header("Location: ../../view/views_ktc/dang_nhap.php");
    exit();
        }
        else
        {
            $_SESSION["ssOTP"] = "Mã OTP không chính xác!";
            header("Location: ../../view/views_ktc/doi_mk.php");
        }
    }
    else{
        $_SESSION["ssPass"] = "Password và confirm_password phải giống nhau!";
        header("Location: ../../view/views_ktc/doi_mk.php");
    }
?>