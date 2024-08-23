<?php
include "../header.php";
?>
<?php 
    // // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>
<?php
include "../../../controller/controller_nhan_vien/NhanVienDisplay.php"
?>
<!-- tạo chỉ mục trang -->

<?php include "view_nhanvien_popup.php"
?>

<script src="../../assets/js/js_nhan_vien/nhanvien_add.js"></script>
<script src="../../assets/js/js_nhan_vien/nhanvien_update.js"></script>
<script src="../../assets/js/js_nhan_vien/nhanvien_delete.js"></script>

<!-- code tiếp phần thần rồi include ở đây -->
</div>
</body>

</html>

<?php 
    }
    else{
        header("Location: ../views_ktc/dang_nhap.php");
    }
?>