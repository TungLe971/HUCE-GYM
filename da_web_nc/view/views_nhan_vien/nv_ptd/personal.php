<?php
include_once "../header.php";
?>

<?php 
    //Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>

<link rel="stylesheet" href="../../assets/css/personal.css">

<!-- Hiển thị -->
<?php include_once "../../../controller/controller_nhan_vien/phuong_thuc_day/personal_hien_thi.php"; ?>

<!-- tạo chỉ mục trang -->
<form class="personal_form-page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
    </center>
</form>

<!-- them--popup -->
<?php include_once "view_personal_popup.php" ?>

<div class='clear'></div>

<script src="../../assets/js/js_nhan_vien/js_ptd/personal_add.js"></script>

<script src="../../assets/js/js_nhan_vien/js_ptd/personal_delete_update.js"></script>

<?php 
    }
    else{
        header("Location: dang_nhap.php");
    }
?>


