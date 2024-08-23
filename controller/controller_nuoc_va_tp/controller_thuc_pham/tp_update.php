<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $tpID = $_POST['tpID'];
    $tpTen = $_POST['tpTen'];
    $tpLoai = $_POST['tpLoai'];
    $tpGiaBan = $_POST['tpGiaBan'];
    $tpGiaNhap = $_POST['tpGiaNhap'];
    $tpSoLuongNhap = $_POST['tpSoLuongNhap'];
    $tpSoLuongTon = $_POST['tpSoLuongTon'];
    $tpNhaCungCap = $_POST['tpNhaCungCap'];
    $tpNgayNhap = $_POST['tpNgayNhap'];
    $tpNgayHetHan = $_POST['tpNgayHetHan'];
    $tpTongTien = $_POST['tpTongTien'];
    $sql = "UPDATE tbl_nuoc_va_thuc_pham SET name='".$tpTen."',loai_tp='".$tpLoai.
    "', gia_ban=".$tpGiaBan.", gia_nhap=".$tpGiaNhap.", so_luong_nhap=".$tpSoLuongNhap.
    ", so_luong_ton=".$tpSoLuongTon.", nha_cung_cap='".$tpNhaCungCap.
    "', ngay_nhap='".$tpNgayNhap."', ngay_het_han='".$tpNgayHetHan.
    "', tong_tien=". $tpTongTien.  " WHERE id_nuoc_va_tp=".$tpID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/views_nuoc_va_thuc_pham/views_thuc_pham/thuc_pham_chuc_nang.php");
?>