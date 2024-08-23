<?php
    include_once "../connection.php";

    require_once('../../model/NoticeModal.php');

    $notice = new Notice();
    $notice->set_notice($_POST["content"]);

    if ($notice->get_notice() == "") {
        echo '<script>
        alert("Vui lòng điền nhập thông báo");
        window.location.href = "http://localhost/da_web_nc/view/views_home/noticeANDprice.php";
        </script>';
    } else {
        $sql = "INSERT INTO tbl_notice(notice) VALUES('".$notice->get_notice()."')";
        $query = mysqli_query($mysqli,$sql);
        $mysqli->close();
        header("Location: ../../view/views_home/home.php");
        exit();
    }
?>
