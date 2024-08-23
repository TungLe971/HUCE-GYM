<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $lopID = $_POST['lopID'];
    $sql = "DELETE FROM tbl_lop WHERE id_lop ='$lopID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    // header("Location: ../../../view/views_nhan_vien/nv_ptd/lop.php");
?>