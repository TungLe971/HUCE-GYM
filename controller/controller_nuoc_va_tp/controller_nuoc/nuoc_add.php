
<?php
    // ket noi
    include_once "../../connection.php";
    // lay CSDL
    require_once('../../../model/modal_nuoc.php');
    $nuoc = new Nuoc();
    $nuoc->set_name($_POST["nuoc__table--add_ten"]);
    $nuoc->set_loai_tp($_POST["nuoc__table--add_loai_san_pham"]);
    $nuoc->set_gia_ban($_POST["nuoc__table--add_gia_ban"]);
    $nuoc->set_gia_nhap($_POST["nuoc__table--add_gia_nhap"]);
    $nuoc->set_so_luong_nhap($_POST["nuoc__table--add_so_luong_nhap"]);
    $nuoc->set_so_luong_ton($_POST["nuoc__table--add_so_luong_ton"]);
    $nuoc->set_nha_cung_cap($_POST["nuoc__table--add_nha_cung_cap"]);
    $nuoc->set_ngay_nhap($_POST["nuoc__table--add_ngay_nhap"]);
    $nuoc->set_ngay_het_han($_POST["nuoc__table--add_ngay_het_han"]);
    $tongTien =  (float)$nuoc->get_gia_nhap() * (float)$nuoc->get_so_luong_nhap();

    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'N%'";
    $query = mysqli_query($mysqli,$sql);
    
    // kiểm tra đã nhập hết các trường chưa

    
    if($nuoc->get_name()=="" || $nuoc->get_loai_tp()=="" || $nuoc->get_gia_ban()=="" || $nuoc->get_gia_nhap()=="" || $nuoc->get_so_luong_nhap()=="" || $nuoc->get_so_luong_ton()=="" || $nuoc->get_nha_cung_cap()=="" || $nuoc->get_ngay_nhap()=="" || $nuoc->get_ngay_het_han()=="")
    {    
    }
    else{
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_nuoc_va_thuc_pham(name,loai_tp,gia_ban,gia_nhap,so_luong_nhap,so_luong_ton,nha_cung_cap,ngay_nhap,ngay_het_han,tong_tien) VALUES('".$nuoc->get_name()."','".$nuoc->get_loai_tp()."','".$nuoc->get_gia_ban()."','".$nuoc->get_gia_nhap()."','".$nuoc->get_so_luong_nhap()."','".$nuoc->get_so_luong_ton()."','".$nuoc->get_nha_cung_cap()."','".$nuoc->get_ngay_nhap()."','".$nuoc->get_ngay_het_han()."','".$tongTien."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    //điều hướng trang đến nuoc.php để refresh
    
    }
    header("Location: ../../../view/views_nuoc_va_thuc_pham/views_nuoc/nuoc.php");
    exit();
?>

