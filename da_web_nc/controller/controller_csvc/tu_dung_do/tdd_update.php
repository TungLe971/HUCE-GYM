<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $tddID = $_REQUEST['tddID'];
    $tdd_so_tu = $_POST['tdd__table--add_so_tu'];
    $tdd_loai_tu = $_POST['tdd__table--add_loai_tu'];
    $tdd_trang_thai = $_POST['tdd__table--add_trang_thai'];
    $tdd_id_hv = $_POST['view_select_id_hv'];
    $tdd_time_start = $_POST['tdd__table--add_time_start'];
    $tdd_time_end = $_POST['tdd__table--add_time_end'];
    $tdd_ghi_chu = $_POST['tdd__table--add_ghi_chu'];

    $sql = "UPDATE wardrobe SET so_tu='".$tdd_so_tu."',loai_tu='".$tdd_loai_tu.
    "', trang_thai='".$tdd_trang_thai."', id_hv='".$tdd_id_hv.
    "', time_start='".$tdd_time_start."', time_end='".$tdd_time_end.
    "', ghi_chu='".$tdd_ghi_chu."' WHERE id_wardrobe=".$tddID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_csvc/tu_dung_do/tu_dung_do.php");
?>