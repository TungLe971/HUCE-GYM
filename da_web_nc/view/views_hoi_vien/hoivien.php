<?php
include_once "header.php";
?>
<?php

if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý" )
{

?>
<?php
include "../../controller/controller_hoi_vien/hoivien_hien_thi.php"
?>
<!-- tạo chỉ mục trang -->

<?php include "view_hoivien_popup.php"
?>

<script src="../assets/js/js_hoi_vien/hoivien_add.js"></script>
<script src="../assets/js/js_hoi_vien/hoivien_update.js"></script>
<script src="../assets/js/js_hoi_vien/hoivien_delete.js"></script>
<script src="../assets/js/js_hoi_vien/hoivien_change_table.js"></script>


<?php 
    }
    else{
        header("Location: ../views_ktc/dang_nhap.php");
    }
?>

<!-- code tiếp phần thần rồi include ở đây -->
</div>
</body>

</html>