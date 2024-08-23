<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";

    $id_gift = $_POST['id_gift'];
    $name = $_POST['name'];
    $diem = $_POST['diem'];
    $time_start = $_POST['time_start'];
    $so_luong = $_POST['so_luong'];

    if($name==""||$diem==""||$time_start==""||$so_luong==""){    
    }
    else{

    $sql = "UPDATE tbl_qua_tang SET name ='".$name."', diem ='".$diem."', time_start ='".$time_start."',
    so_luong ='".$so_luong."' WHERE id_gift=".$id_gift;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    }

    // header("Location: /da_web_nc/view/views_su_kien/sk_tich_diem/sk_tich_diem.php");
?>