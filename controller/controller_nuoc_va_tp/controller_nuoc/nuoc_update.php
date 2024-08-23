<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $nuocID = $_REQUEST['nuocID'];
    $nuocTen = $_POST['nuoc__table--add_ten'];
    $nuocLoai = $_POST['nuoc__table--add_loai_san_pham'];
    $nuocGiaBan = $_POST['nuoc__table--add_gia_ban'];
    $nuocGiaNhap = $_POST['nuoc__table--add_gia_nhap'];
    $nuocSoLuongNhap = $_POST['nuoc__table--add_so_luong_nhap'];
    $nuocSoLuongTon = $_POST['nuoc__table--add_so_luong_ton'];
    $nuocNhaCungCap = $_POST['nuoc__table--add_nha_cung_cap'];
    $nuocNgayNhap = $_POST['nuoc__table--add_ngay_nhap'];
    $nuocNgayHetHan = $_POST['nuoc__table--add_ngay_het_han'];

    $sql = "UPDATE tbl_nuoc_va_thuc_pham SET name='".$nuocTen."',loai_tp='".$nuocLoai.
    "', gia_ban='".$nuocGiaBan."', gia_nhap='".$nuocGiaNhap."', so_luong_nhap='".$nuocSoLuongNhap.
    "', so_luong_ton='".$nuocSoLuongTon."', nha_cung_cap='".$nuocNhaCungCap.
    "', ngay_nhap='".$nuocNgayNhap."', ngay_het_han='".$nuocNgayHetHan.
    "' WHERE id_nuoc_va_tp=".$nuocID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../../view/views_nuoc_va_thuc_pham/views_nuoc/nuoc.php");

?>