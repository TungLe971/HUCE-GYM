<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $nhanvienID = $_REQUEST['id_nv'];
    $nhanvien_ten = $_POST['nhanvien__table-add-ten'];
    $nhanvien_gioi_tinh = $_POST['nhanvien__table-add-gioi_tinh'];
    $nhanvien_tuoi = $_POST['nhanvien__table-add-tuoi'];
    $nhanvien_sdt = $_POST['nhanvien__table-add-sdt'];
    $nhanvien_cmnd = $_POST['nhanvien__table-add-cmnd'];
    $nhanvien_bien_so_xe = $_POST['nhanvien__table-add-bien_so_xe'];
    $nhanvien_dia_chi = $_POST['nhanvien__table-add-dia_chi'];
    $nhanvien_chuc_vu = $_POST['nhanvien__table-add-chuc_vu'];
    $nhanvien_gmail = $_POST['nhanvien__table-add-gmail'];

    $sql = "UPDATE tbl_nhan_vien SET name ='".$nhanvien_ten."',
    gioi_tinh='".$nhanvien_gioi_tinh."', tuoi='".$nhanvien_tuoi."',
    sdt='".$nhanvien_sdt."', cmnd='".$nhanvien_cmnd."', bien_so_xe='".$nhanvien_bien_so_xe."',
    dia_chi='".$nhanvien_dia_chi."' ,chuc_vu='".$nhanvien_chuc_vu."', gmail='".$nhanvien_gmail."' WHERE id_nv=".$nhanvienID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();

    header("Location: ../../view/views_nhan_vien/nhan_vien/nhanvien.php");

?>