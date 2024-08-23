<?php
include_once "../header.php";
?>

<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>

<link rel="stylesheet" href="../../assets/css/dung_cu_tap.css">

<!-- them--popup -->

<?php include_once "view_dct_popup.php"
?>

<!-- tạo giao diện sắp xếp -->
<div class="dct__div--search--sort">
    <form class="dct__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="dct__form__div--search">
            <button class='dct__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='dct__input--search' type="text" name="dct__input--search" placeholder="Search....">
        </div>
    </form>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input class="dct--sort" type="submit" value="Sort">
        <select class='dct__select' name='dctTang'>
            <option class='dct__select--sap_xep' value=0>Giảm dần</option>
            <option class='dct__select--ss_ten' value=1>Tăng dần</option>
        </select>
        <select class='dct__select' name='dctSort'>
            <option class='dct__select--sap_xep' value=0> Sắp xếp</option>
            <option class='dct__select--ss_ten' value=1>Tên</option>
            <option class='dct__select--ss_bao_hanh' value=2>Bảo Hành</option>
            <option class='dct__select--ss_bao_tri' value=3>Bảo Trì</option>
        </select>
    </form>
</div>
<!-- Hiển thị -->
<?php
    include_once "../../../controller/controller_csvc/dung_cu_tap/dct_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="dct__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
    </center>
</form>

<script src="../../assets/js/js_csvc/js_dung_cu_tap/dct_add.js"></script>
<script src="../../assets/js/js_csvc/js_dung_cu_tap/dct_delete.js"></script>
<script src="../../assets/js/js_csvc/js_dung_cu_tap/dct_update.js"></script>
<script src="../../assets/js/js_csvc/js_dung_cu_tap/dct_sort_page.js"></script>
<!-- <script src="../../assets/js/js_csvc/js_dung_cu_tap/dct_delete_update.js"></script> -->
<?php 
    }
    else{
        header("Location: ../../views_ktc/dang_nhap.php");
    }
?>
</body>

</html>