<?php
    session_start();
    //ket noi
    include_once "../../connection.php";
    // lay CSDL
    $idnv = $_POST["bl__table--add_idnv"];
    $time_start = $_POST["bl__table--add_time_start"];
    $so_cong = $_POST["bl__table--add_so_cong"];
    $luong_tren_cong = $_POST["bl__table--add_luong_tren_cong"];
    $luong = $_POST["bl__table--add_luong"];
    $trang_thai = $_POST["bl__table--add_trang_thai"];
    // $_SESSION["bl_ktra"] = $idnv;
    // kiểm tra
    if($idnv == "" || $time_start == "" || $so_cong == "" || $luong_tren_cong == "" || $luong == "" || $trang_thai == "")
    {    
    }
    else{
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO luong(id_nv,time_start,so_cong,luong_tren_cong,luong,trang_thai) VALUES('".$idnv."','".$time_start."','".$so_cong."','".$luong_tren_cong."','".$luong."','".$trang_thai."')";
    echo $sql;
    echo 1;
    $query = mysqli_query($mysqli,$sql);
    
    }
    header("Location: ../../../view/views_nhan_vien/bang_luong/nv_bang_luong.php");
    exit();
?>

