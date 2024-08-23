<!-- Kết nối CSDL -->
<?php
include_once "../connection.php";
$hoivienID = $_REQUEST['hoivienID'];
$delete = "DELETE FROM tbl_hoi_vien WHERE id_hv='$hoivienID'";
$query = mysqli_query($mysqli, $delete);
$mysqli->close();
if ($delete) {
    echo "<script> alert('Xóa thành công.'); location.replace('../../view/views_hoi_vien/hoivien.php') </script>";
} else {
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: " . $mysqli->error . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}
exit();
?>