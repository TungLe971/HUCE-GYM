<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $card_id = $_POST['card_id'];
    $sql = "DELETE FROM card WHERE card_id ='$card_id'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    // header("Location: /da_web_nc/view/views_the/the.php");
?>