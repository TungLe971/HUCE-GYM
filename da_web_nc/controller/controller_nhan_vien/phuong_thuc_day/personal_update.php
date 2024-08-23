<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $personalID = $_POST['personalID'];
    $personal_id_hv = $_POST['personal_id_hv'];
    $personal_thoi_luong = $_POST['personal_thoi_luong'];
    $personal_so_buoi = $_POST['personal_so_buoi'];
    $personal_id_nv = $_POST['personal_id_nv'];
    $personal_doanh_thu = $_POST['personal_doanh_thu'];

    $sql = "UPDATE tbl_personal SET id_hv='".$personal_id_hv."',
    thoi_luong='".$personal_thoi_luong."', so_buoi='".$personal_so_buoi."',
    id_nv='".$personal_id_nv."', doanh_thu='".$personal_doanh_thu."' WHERE id_personal=".$personalID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    // header("Location: /da_web_nc/view/views_nhan_vien/nv_ptd/personal.php");
?>