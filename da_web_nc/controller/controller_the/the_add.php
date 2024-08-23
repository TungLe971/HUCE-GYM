<?php
    include_once "../../controller/connection.php";

    // lay CSDL
    require_once('../../model/modal_the.php');
    $the = new The();
    $the->set_id_hv($_POST["the_table-add_id_hv"]);
    $the->set_id_nv($_POST["the_table-add_id_nv"]);
    $the->set_goi_tap($_POST["the_table-add_packages"]);
    $the->set_so_luong($_POST["the_table-add_so_luong"]);
    $the->set_lop($_POST["the_table-add_lop"]);
    $the->set_ngay_bat_dau($_POST["the_table-add_ngay_bat_dau"]);
    $the->set_ngay_ket_thuc($_POST["the_table-add_ngay_ket_thuc"]);
    $the->set_thanh_tien($_POST["the_table-add_thanh_tien"]);
  
    // kiểm tra

    if($the->get_id_hv()==""||$the->get_goi_tap()==""||$the->get_so_luong()==""||$the->get_lop()==""||$the->get_ngay_bat_dau()==""||$the->get_ngay_ket_thuc()==""||$the->get_thanh_tien()=="")
    {    
    }
    else{
    
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO card(id_hv,id_nv,packages,quantity,types_room,time_start,time_end,total_money) VALUES('".$the->get_id_hv()."','".$the->get_id_nv()."','".$the->get_goi_tap()."','".$the->get_so_luong()."','".$the->get_lop()."','".$the->get_ngay_bat_dau()."','".$the->get_ngay_ket_thuc()."','".$the->get_thanh_tien()."')";
    echo $sql;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();

    //điều hướng trang đến the.php để refresh
    }
    header("Location: ../../view/views_the/the.php");
    exit();
?>

