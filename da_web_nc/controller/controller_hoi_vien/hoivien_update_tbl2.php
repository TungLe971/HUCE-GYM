<!-- Kết nối CSDL -->
<?php
include_once "../connection.php";
$hoivienID = $_REQUEST['hoivienID'];
$hoivien_ten = $_POST['hoivien__table-add-ten'];
$hoivien_chieu_cao = $_POST['hoivien__table-add-chieu_cao'];
$hoivien_can_nang = $_POST['hoivien__table-add-can_nang'];
$hoivien_phan_tram_mo = $_POST['hoivien__table-add-pt_mo'];
$hoivien_ngay_cap_nhat = $_POST['hoivien__table-add-ngay_cap_nhat'];
$update = "UPDATE tbl_hoi_vien SET name_hv='" . $hoivien_ten . "', chieu_cao='" . $hoivien_chieu_cao . "',
        can_nang='" . $hoivien_can_nang . "', phan_tram_mo='" . $hoivien_phan_tram_mo . "', ngay_cap_nhat='" . $hoivien_ngay_cap_nhat . "' WHERE id_hv=" . $hoivienID;
$query = mysqli_query($mysqli, $update);
$mysqli->close();
if ($update) {
    echo "<script> alert('Cập nhật thành công.'); location.replace('../../view/views_hoi_vien/hoivien.php') </script>";
} else {
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: " . $mysqli->error . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}
?>