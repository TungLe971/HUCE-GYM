<?php
include_once "../header.php";
?>
<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>

<link rel="stylesheet" href="../../assets/css/thucPham.css">


<!-- tạo giao diện sắp xếp -->
<div class="tp__div--search--sort">
    <form class="tp__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="tp__form__div--search">
            <button class='tp__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='tp__input--search' type="text" name="tp__input--search" placeholder="Search....">
        </div>
    </form>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input class="tp--sort" type="submit" value="Sort">
    <select class='tp__select' name='tpTang'>
        <option class='tp__select--sap_xep' value=0>Giảm dần</option>
        <option class='tp__select--ss_ten' value=1>Tăng dần</option>
    </select>
    <select class='tp__select' name='tpSort'>
        <option class='tp__select--sap_xep' value=0>Sắp xếp</option>
        <option class='tp__select--ss_ten' value=1>Tên</option>
        <option class='tp__select--ss_gia_ban' value=2>Giá bán</option>
    </select>
    </form>
</div>

<?php
include_once "../../../controller/controller_nuoc_va_tp/controller_thuc_pham/tp_hien_thi.php"
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="tp__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
    <?php
    echo $listPages;
    ?>
    </center>
</form>
<!-- them--popup -->

<?php include_once "view_tp_popup.php"
?>

<script src="../../assets/js/js_nuoc_va_thuc_pham/js_thuc_pham/tp_add.js"></script>
<script src="../../assets/js/js_nuoc_va_thuc_pham/js_thuc_pham/tp_delete.js"></script>
<script src="../../assets/js/js_nuoc_va_thuc_pham/js_thuc_pham/tp_update.js"></script>

<!-- <script src="../controller/controller_nuoc_va_tp/tp_delete_update.js"></script> -->
<!-- <script src="../controller/controller_nuoc_va_tp/tp_sort.js"></script> -->
</body>
<?php 
    }
    else{
        header("Location: ../../views_ktc/dang_nhap.php");
    }
?>
</html>
