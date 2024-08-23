<?php
include_once "header.php";
?>
<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>
<?php

include_once "../../controller/connection.php";
    
    $sql = "SELECT * FROM account where username ='".$_SESSION['user']."'";
    $query = mysqli_query($mysqli,$sql);

while($row = mysqli_fetch_array($query))
{
    $_SESSION['chuc_vu']=$row['chuc_vu'];
    $_SESSION['name']=$row['name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/home.css">
</head>

<body>

    <div class="card card--info">
        <img src="../assets/img/avatar.png" alt="">
        <table class="info--text">
            <tr class="a">
                <th>Chức vụ: <?php echo  $_SESSION['chuc_vu']?> </th>

            <tr class="a">
                <th>Họ tên: <?php echo  $_SESSION['name']?> </th>
            </tr>
            <tr class="a">
                <th>Tài khoản: <?php echo  $_SESSION['username']?> </th>
            </tr>
            <tr class="a">
                <th>Mật khẩu: <?php echo  $_SESSION['pass']?> </th>
            </tr>

        </table>
        <button class="card--btn js-update" type="button" onclick="">
            Sửa thông tin cá nhân
        </button>
    </div>
    <script src="../assets/js/js_notice/InfoUpdate.js"></script>
    <div class=" card card--notice">
        <div>
            <h1> Thông báo </h1>
        </div>
        <br>
        <div class="notice__text">
    <?php
    include_once "../../controller/connection.php";

    $sql = "SELECT * FROM `tbl_notice` WHERE status = 1 ORDER BY `tbl_notice`.`addAt` DESC;";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td style="width: 600px; word-break: break-all;">' . $row["notice"] . '</td>';

            echo '<td style="position: fixed; left: 1375px; font-size: 10px;">' . $row["addAt"] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo "0 results";
    }

    $mysqli->close();
    ?>
</div>

    </div>


    <?php 
    }
    else{
        header("Location: ../views_ktc/dang_nhap.php");
    }
?>

</body>

</html>