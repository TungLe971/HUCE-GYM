<!-- Kết nối CSDL -->
<?php
    session_start();
    include "../connection.php";
    $value = $_POST['value'];
    // cắt giá trị ra chuc_vu: Quan Ly => chuc_vu và quan ly
    $mangChuoi = explode(" ",$value,3);
    $tieu_de = $mangChuoi[0]." ".$mangChuoi[1];
    $gia_tri = $mangChuoi[2];
    switch($tieu_de)
    {
        case "Chức vụ:":
            $tieu_de="chuc_vu";
            break;
        case "Họ tên:":
            $tieu_de="name";
            break;
        case "Mật khẩu:":
            $tieu_de="password";
            break;
        case "Tài khoản:":
            $tieu_de="username";
            break;
    }
    $_SESSION['user']=$gia_tri;
    $sql = "UPDATE account SET ".$tieu_de."='".$gia_tri."' WHERE id='".$_SESSION['id']."'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>