<?php
include_once "../header.php";
?>

<?php 
    // Start the session
    if($_SESSION['login'])
    {
?>

<link rel="stylesheet" href="../../assets/css/sinh_nhat_hoi_vien.css">
<!-- Show Send SMS POPUP -->
<?php 
include_once "view_guiSMS_popup.php";

if(isset($_SESSION['check_success'])){
    if($_SESSION['check_success'])
    {
        echo '<script>alert(Gửi Email thành công!)</script>';
    }
    else
    {
        echo '<script>alert(Gửi Email thất bại!)</script>';
    }
}
?>
<?php include_once "view_gift_popup.php"?>

<!-- tạo giao diện sắp xếp -->



<!-- Hiển thị -->
<?php
    include_once "../../../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_hien_thi.php";
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->


<script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_event.js"></script>
<script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_update.js"></script>
<?php 
    }
    else{
        header("Location: ../../views_ktc/dang_nhap.php");
    }
?>
</body>

</html>