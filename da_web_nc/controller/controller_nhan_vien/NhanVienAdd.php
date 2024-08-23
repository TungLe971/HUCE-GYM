<?php
// Kết nối
include "../connection.php";
// Lấy CSDL
require_once('../../model/NhanVienModal.php');
$nhanvien = new nhanvien();
$nhanvien->set_name($_POST["nhanvien__table-add-ten"]);
$nhanvien->set_gioi_tinh($_POST["nhanvien__table-add-gioi_tinh"]);
$nhanvien->set_tuoi($_POST["nhanvien__table-add-tuoi"]);
$nhanvien->set_sdt($_POST["nhanvien__table-add-sdt"]);
$nhanvien->set_cmnd($_POST["nhanvien__table-add-cmnd"]);
$nhanvien->set_bien_so_xe($_POST["nhanvien__table-add-bien_so_xe"]);
$nhanvien->set_dia_chi($_POST["nhanvien__table-add-dia_chi"]);
$nhanvien->set_chuc_vu($_POST["nhanvien__table-add-chuc_vu"]);
$nhanvien->set_gmail($_POST["nhanvien__table-add-gmail"]);

if (
    $nhanvien->get_name() == "" ||
    $nhanvien->get_tuoi() == "" ||
    $nhanvien->get_sdt() == "" ||
    $nhanvien->get_cmnd() == "" ||
    $nhanvien->get_bien_so_xe() == "" ||
    $nhanvien->get_dia_chi() == "" ||
    $nhanvien->get_gmail() == ""
) {
    echo '<script>
    alert("Vui lòng điền đầy đủ thông tin");
    window.location.href = "http://localhost/da_web_nc/view/views_nhan_vien/nhan_vien/nhanvien.php";
  </script>';
} else {
    $sql = "INSERT INTO tbl_nhan_vien(name, gioi_tinh, tuoi, sdt, cmnd, bien_so_xe, dia_chi, chuc_vu, gmail) VALUES ('" . $nhanvien->get_name() . "', '" . $nhanvien->get_gioi_tinh() . "', '" . $nhanvien->get_tuoi() . "', '" . $nhanvien->get_sdt() . "', '" . $nhanvien->get_cmnd() . "', '" . $nhanvien->get_bien_so_xe() . "', '" . $nhanvien->get_dia_chi() . "', '" . $nhanvien->get_chuc_vu() . "', '" . $nhanvien->get_gmail() . "')";
    $query = mysqli_query($mysqli, $sql);
    $mysqli->close();
    header("Location: ../../view/views_nhan_vien/nhan_vien/nhanvien.php");
    exit();
}
?>




$sql = "SELECT * FROM tbl_nhan_vien WHERE name LIKE N'N%'";
$query = mysqli_query($mysqli,$sql);

// kiểm tra
$check = true;
while($row = mysqli_fetch_array($query)){
if($row["name"]==$nhanvien->get_name() || $row["sdt"]==$nhanvien->get_sdt
|| $row["cmnd"]==$nhanvien->get_cmnd || $row["bien_so_xe"]==$nhanvien->get_bien_so_xe
|| $row["gmail"]==$nhanvien->get_gmail)
{
$check = false;
}
}

if($nhanvien->get_name()=="" || $nhanvien->get_gioi_tinh()==""
|| $nhanvien->get_tuoi()=="" || $nhanvien->get_sdt()=="" || $nhanvien->get_cmnd()==""
|| $nhanvien->get_bien_so_xe()=="" || $nhanvien->get_dia_chi()=="" || $nhanvien->get_chuc_vu()==""
|| $nhanvien->get_gmail()=="")
{
}
else{
if($check){
// Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu

//điều hướng trang đến nhanvien.php để refresh
}
}