<?php
    include_once "../connection.php";
    $nhanvienID = $_REQUEST['id_nv'];
    $sql = "DELETE FROM tbl_nhan_vien WHERE id_nv='$nhanvienID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/views_nhan_vien/nhan_vien/nhanvien.php");
    exit();
?>