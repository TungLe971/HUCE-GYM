
<?php
include_once "../header.php";
?>

<?php 
    // // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>
<link rel="stylesheet" href="../../assets/css/nuoc.css">

<!-- them--popup -->

<?php include_once "view_nuoc_popup.php"
?>


<!-- tạo giao diện sắp xếp -->
<div class="nuoc__div--search--sort">
    <form class="nuoc__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="nuoc__form__div--search">
            <button class='nuoc__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='nuoc__input--search' type="text" name="nuoc__input--search" placeholder="Search....">
        </div>
    </form>
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input class="nuoc--sort" type="submit" value="Sort">
        <select class='nuoc__select nuoc__select--tang' name='nuocTang' >
            <option class='nuoc__select--sap_xep' value=0>Giảm dần</option>
            <option class='nuoc__select--ss_ten' value=1>Tăng dần</option>
        </select>
        <select class='nuoc__select nuoc__select--sort' name='nuocSort' >
            <option class='nuoc__select--sap_xep' value=0>ID</option>
            <option class='nuoc__select--ss_ten' value=1>Tên</option>
            <option class='nuoc__select--ss_gia_ban' value=2>Giá bán</option>
        </select>
    </form>
</div>

<?php
include_once "../../../controller/controller_nuoc_va_tp/controller_nuoc/nuoc_hien_thi.php"
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->

<form class="nuoc__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>

        <?php
            echo $listPages;
        ?>

    </center>
</form>

<script src="../../assets/js/js_nuoc_va_thuc_pham/js_nuoc/nuoc_add.js"></script>
<script src="../../assets/js/js_nuoc_va_thuc_pham/js_nuoc/nuoc_delete.js"></script>
<script src="../../assets/js/js_nuoc_va_thuc_pham/js_nuoc/nuoc_update.js"></script>
<script src="../../assets/js/js_nuoc_va_thuc_pham/js_nuoc/nuoc_sort_page.js"></script>


<!-- <script src="../../assets/js/js_nuoc_va_thuc_pham/js_nuoc/nuoc_event.js"></script> -->

<!-- <script src="../../assets/js/js_nuoc_va_thuc_pham/js_nuoc/nuoc_delete_update.js"></script> -->
<?php 
    }
    else{
        header("Location: ../../views_ktc/dang_nhap.php");
    }
    $mysqli -> close();
?>
</body>

</html>