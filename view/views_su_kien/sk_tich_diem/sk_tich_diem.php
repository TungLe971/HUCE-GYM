<?php
include_once "../header.php";
?>

<?php 
    if($_SESSION['login'])
    {
?>

<link rel="stylesheet" href="../../assets/css/tich_diem.css">
<?php include_once "view_gift_popup.php"?>

<!-- Hiển thị -->
<?php
    include_once "../../../controller/controller_su_kien/sk_tich_diem/td_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->


<script src="../../assets/js/js_su_kien/sk_tich_diem/td_event.js"></script>
<script src="../../assets/js/js_su_kien/sk_tich_diem/td_update.js"></script>

<?php 
    }
    else{
        header("Location: ../../views_ktc/dang_nhap.php");
    }
?>
</body>

</html>