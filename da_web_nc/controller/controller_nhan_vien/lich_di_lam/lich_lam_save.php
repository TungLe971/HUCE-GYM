<?php 
require_once('../../../controller/connection.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    $mysqli->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `lich_di_lam` (`lop`,`nhan_vien`,`ngay_hoc`) VALUES ('$lop','$nhan_vien','$ngay_hoc')";
}else{
    $sql = "UPDATE `lich_di_lam` set `lop` = '{$lop}', `nhan_vien` = '{$nhan_vien}', `ngay_hoc` = '{$ngay_hoc}' where `id` = '{$id}'";
}
$save = $mysqli->query($sql);
if($save){
    echo "<script> alert('thêm lịch học thành công.'); location.replace('../../../view/views_nhan_vien/lich_di_lam/lich_di_lam.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$mysqli->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$mysqli->close();
?>