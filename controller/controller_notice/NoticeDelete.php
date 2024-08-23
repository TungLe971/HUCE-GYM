<?php
    include_once "../../controller/connection.php";
?>

<?php

  $sql = "UPDATE tbl_notice SET status = '0' WHERE id ='". $_GET["id"] ."'";
  $query = mysqli_query($mysqli,$sql);
  $mysqli->close();
  header("Location: ../../view/views_home/noticeANDprice.php");

?>