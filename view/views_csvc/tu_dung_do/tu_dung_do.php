<?php
include_once "../header.php";
?>

<?php 
    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>

<link rel="stylesheet" href="../../assets/css/tu_dung_do.css">

<!-- them--popup -->

<?php include_once "view_tdd_popup.php"
?>

<!-- tạo giao diện sắp xếp -->
<div class="tdd__div--search--sort">
    <form class="tdd__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="tdd__form__div--search">
        <button class='tdd__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        <input  class='tdd__input--search' type="text"  name="tdd__input--search" placeholder="Search....">
        </div>
    </form>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input class="tdd--sort" type="submit" value="Sort">
    <select class='tdd__select' name='tddTang'>
        <option class='tdd__select--sap_xep' value=0>Giảm dần</option>
        <option class='tdd__select--ss_ten' value=1>Tăng dần</option>
    </select>
    <select class='tdd__select' name='tddSort'>
        <option class='tdd__select--sap_xep' value=0> Sắp xếp</option>
        <option class='tdd__select--ss_ten' value=1>Trạng thái</option>
        <option class='tdd__select--ss_bao_hanh' value=2>ID hội viên</option>
        <option class='tdd__select--ss_bao_tri' value=3>Ngày kết thúc</option>
    </select>
    </form>
</div>
<!-- Hiển thị -->
<?php
    include_once "../../../controller/controller_csvc/tu_dung_do/tdd_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<form class="tdd__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
    <?php
    echo $listPages;
    ?>
    </center>
</form>

<script src="../../assets/js/js_csvc/js_tu_dung_do/tdd_add.js"></script>
<script src="../../assets/js/js_csvc/js_tu_dung_do/tdd_delete.js"></script>
<script src="../../assets/js/js_csvc/js_tu_dung_do/tdd_update.js"></script>

<!-- <script src="../../assets/js/js_csvc/js_tu_dung_do/tdd_delete_update.js"></script> -->

</body>
<?php 
    }
    else{
        header("Location: ../../views_ktc/dang_nhap.php");
    }
?>
</html>

