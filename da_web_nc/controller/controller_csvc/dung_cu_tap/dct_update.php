<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";
    $dctID = $_REQUEST['dctID'];
    $dctTen = $_POST['dct__table--add_ten'];
    $dctSoLuong = $_POST['dct__table--add_so_luong'];
    $dctNhaCungCap = $_POST['dct__table--add_nha_cung_cap'];
    $dctNgayNhap = $_POST['dct__table--add_ngay_nhap'];
    $dctGiaNhap = $_POST['dct__table--add_gia_nhap'];
    $dctBaoTri = $_POST['dct__table--add_bao_tri'];
    $dctBaoHanh = $_POST['dct__table--add_bao_hanh'];
    $dctChiPhiBaoTri = $_POST['dct__table--add_chi_phi_bao_tri'];
    $dctGhiChu = $_POST['dct__table--add_ghi_chu'];

    $sql = "UPDATE tbl_dung_cu_tap SET ten='".$dctTen."',so_luong=".$dctSoLuong.
    ", nha_cung_cap='".$dctNhaCungCap."', ngay_nhap='".$dctNgayNhap."', gia_nhap=".$dctGiaNhap.
    ", bao_tri='".$dctBaoTri."', bao_hanh='".$dctBaoHanh.
    "', chi_phi_bao_tri=".$dctChiPhiBaoTri.", ghi_chu='".$dctGhiChu."' WHERE id_may=".$dctID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();

    header("Location: ../../../view/views_csvc/dung_cu_tap/dung_cu_tap.php");
?>