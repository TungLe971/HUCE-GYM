<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $tpID = $_REQUEST['tpID'];
    $sql = "DELETE FROM tbl_nuoc_va_thuc_pham WHERE id_nuoc_va_tp='$tpID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_nuoc_va_thuc_pham/thuc_pham/thuc_pham_chuc_nang.php");
?>