<?php
    include "../connection.php";
    //$selectedOption = $_REQUEST["nhanvien__option"];

    $sql = "SELECT *  FROM tbl_nhan_vien WHERE chuc_vu LIKE 'Gym' ";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/views_nhan_vien/nhan_vien/nhanvien.php");
?>