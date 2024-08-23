<?php
    session_start();
    //ket noi
    include_once "../../connection.php";

    // lay CSDL
    $id_nv = $_POST["personal_table-add_id_nv"];
    $id_hv = $_POST["personal_table-add_id_hv"];
    $thoi_luong = $_POST["personal_table-add_thoi_luong"];
    $so_buoi = $_POST["personal_table-add_so_buoi"];
    $time_start = $_POST["personal_table-add_time_start"];
    $time_end = $_POST["personal_table-add_time_end"];
    $doanh_thu = $_POST["personal_table-add_doanh_thu"];
 

    // kiểm tra
    if($id_nv==""||$id_hv==""||$thoi_luong==""||$so_buoi==""||$time_start=="")
    {    
    }
    else{
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_personal(id_nv,id_hv,thoi_luong,so_buoi,time_start,time_end,doanh_thu) VALUES('".$id_nv."','".$id_hv."','".$thoi_luong."','".$so_buoi."','".$time_start."','".$time_end."','".$doanh_thu."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    }

    //điều hướng trang đến tdd.php để refresh
    header("Location: ../../../view/views_nhan_vien/nv_ptd/personal.php");
    exit();
?>

