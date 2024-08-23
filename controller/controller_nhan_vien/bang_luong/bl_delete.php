<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $blID = $_REQUEST['blID'];
    $sql = "DELETE FROM luong WHERE id_nv ='$blID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_nhan_vien/bang_luong/nv_bang_luong.php");
?>