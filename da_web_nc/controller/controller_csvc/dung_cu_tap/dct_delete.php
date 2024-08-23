<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $dctID = $_REQUEST['dctID'];
    $sql = "DELETE FROM tbl_dung_cu_tap WHERE id_may ='$dctID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_csvc/dung_cu_tap/dung_cu_tap.php");
?>