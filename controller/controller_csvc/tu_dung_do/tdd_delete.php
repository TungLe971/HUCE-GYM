<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $tddID = $_REQUEST['tddID'];
    $sql = "DELETE FROM wardrobe WHERE id_wardrobe ='$tddID'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_csvc/tu_dung_do/tu_dung_do.php");
    exit();
?>