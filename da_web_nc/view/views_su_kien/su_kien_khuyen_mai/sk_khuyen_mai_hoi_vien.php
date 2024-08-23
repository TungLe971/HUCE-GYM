<?php
    include_once "../header.php";
?>
<link rel="stylesheet" href="../../assets/css/skkm.css">
<nav class="sk__menu">
    <ul class="sk__menu-header">
        <li><a href="../su_kien_khuyen_mai/sk_khuyen_mai_hoi_vien.php">Sự kiện khuyến
                mãi</a></li>
        <li><a style='background-color:#a1b8e1' href="../sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php">Sinh nhật hội
                viên</a></li>
        <li><a style='background-color:#a1b8e1' href="../sk_tich_diem/sk_tich_diem.php">Tích điểm</a></li>
    </ul>
</nav>
<?php
    include_once "../../../controller/controller_su_kien/su_kien_khuyen_mai/skkm_hien_thi.php";
?>