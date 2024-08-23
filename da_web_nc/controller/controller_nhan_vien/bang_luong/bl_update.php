<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $idnv = $_POST['bl__table--add_idnv'];
    $time_start = $_POST['bl__table--add_time_start'];
    $so_cong = $_POST['bl__table--add_so_cong'];
    $luong_tren_cong = $_POST['bl__table--add_luong_tren_cong'];
    $luong = $_POST['bl__table--add_luong'];
    $trang_thai = $_POST['bl__table--add_trang_thai'];

    $sql = "UPDATE luong SET time_start='".$time_start."',so_cong=".$so_cong.
    ", luong_tren_cong='".$luong_tren_cong."', luong='".$luong."', trang_thai=".$trang_thai.
    " WHERE id_nv=".$idnv;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_nhan_vien/bang_luong/nv_bang_luong.php");
?>