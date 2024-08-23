<?php
//ket noi
include_once "../connection.php";
// lay CSDL
require_once('../../model/modal_hoivien.php');
$hoivien = new hoivien();
$hoivien->set_name_hv($_POST["hoivien__table-add-ten"]);
$hoivien->set_ngay_sinh($_POST["hoivien__table-add-ngay_sinh"]);
$hoivien->set_gioi_tinh($_POST["hoivien__table-add-gioi_tinh"]);
$hoivien->set_tuoi($_POST["hoivien__table-add-tuoi"]);
$hoivien->set_sdt($_POST["hoivien__table-add-sdt"]);
$hoivien->set_email($_POST["hoivien__table-add-email"]);
$hoivien->set_cmnd($_POST["hoivien__table-add-cmnd"]);
$hoivien->set_bien_xe($_POST["hoivien__table-add-bien_xe"]);

// Kiểm tra điều kiện
if (
    $hoivien->get_name_hv() == "" || $hoivien->get_ngay_sinh() == "" || $hoivien->get_gioi_tinh() == "" ||
    $hoivien->get_tuoi() == "" || $hoivien->get_sdt() == "" || $hoivien->get_email() == "" || $hoivien->get_cmnd() == "" ||
    $hoivien->get_bien_xe() == ""
) {
    // Không làm gì nếu có giá trị trống
} else {
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $add = "INSERT INTO tbl_hoi_vien (name_hv, ngay_sinh, gioi_tinh, tuoi, sdt, email, cmnd, bien_xe) VALUES ('" . $hoivien->get_name_hv() . "','" . $hoivien->get_ngay_sinh() . "','" . $hoivien->get_gioi_tinh() . "','" . $hoivien->get_tuoi() . "','" . $hoivien->get_sdt() . "','" . $hoivien->get_email() . "','" . $hoivien->get_cmnd() . "','" . $hoivien->get_bien_xe() . "')";
    $query = mysqli_query($mysqli, $add);
    $mysqli->close();
}
if ($add) {
    echo "<script> alert('Thêm hội viên thành công.'); location.replace('../../view/views_hoi_vien/hoivien.php') </script>";
} else {
    echo "<script> alert('Vui lòng nhập đầy đủ thông tin'); location.replace('../../view/views_hoi_vien/hoivien.php') </script>";
}
exit();
