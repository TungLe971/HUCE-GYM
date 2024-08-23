<?php
//     include_once "../../connection.php";

// for($i=0;$i<=100;$i++)
// {
// $sql = "INSERT INTO tbl_nuoc_va_thuc_pham(name,loai_tp,gia_ban,gia_nhap,so_luong_nhap,so_luong_ton,nha_cung_cap,ngay_nhap,ngay_het_han,tong_tien) VALUES('Cocacola".$i."','Nước','".(1000+$i)."','".(2000+$i)."','".(1000+$i)."','".(8000+$i)."','Kiên".$i."','2023/06/05','2024/06/05','".(2000+$i)*(1000+$i)."')";
// $query = mysqli_query($mysqli,$sql);

// }
?>
<?php
    //ket noi
    include_once "../../connection.php";
    // lay CSDL
    require_once('../../../model/modal_tp.php');
    $tp = new Tp();
    $tp->set_name($_POST["tp__table--add_ten"]);
    $tp->set_loai_tp($_POST["tp__table--add_loai_san_pham"]);
    $tp->set_gia_ban($_POST["tp__table--add_gia_ban"]);
    $tp->set_gia_nhap($_POST["tp__table--add_gia_nhap"]);
    $tp->set_so_luong_nhap($_POST["tp__table--add_so_luong_nhap"]);
    $tp->set_so_luong_ton($_POST["tp__table--add_so_luong_ton"]);
    $tp->set_nha_cung_cap($_POST["tp__table--add_nha_cung_cap"]);
    $tp->set_ngay_nhap($_POST["tp__table--add_ngay_nhap"]);
    $tp->set_ngay_het_han($_POST["tp__table--add_ngay_het_han"]);
    $tongTien =  (float)$tp->get_gia_nhap() * (float)$tp->get_so_luong_nhap();

    //kiem tra ten
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'T%'";
    $query = mysqli_query($mysqli,$sql);
    
    // kiểm tra
  

    if($tp->get_name()=="" || $tp->get_loai_tp()=="" || $tp->get_gia_ban()=="" || $tp->get_gia_nhap()=="" || $tp->get_so_luong_nhap()=="" || $tp->get_so_luong_ton()=="" || $tp->get_nha_cung_cap()=="" || $tp->get_ngay_nhap()=="" || $tp->get_ngay_het_han()=="")
    {
        
    }
    else{
     
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_nuoc_va_thuc_pham(name,loai_tp,gia_ban,gia_nhap,so_luong_nhap,so_luong_ton,nha_cung_cap,ngay_nhap,ngay_het_han,tong_tien) VALUES('".$tp->get_name()."','".$tp->get_loai_tp()."','".$tp->get_gia_ban()."','".$tp->get_gia_nhap()."','".$tp->get_so_luong_nhap()."','".$tp->get_so_luong_ton()."','".$tp->get_nha_cung_cap()."','".$tp->get_ngay_nhap()."','".$tp->get_ngay_het_han()."','".$tongTien."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    
}
    //điều hướng trang đến tp.php để refresh
    header("Location: ../../../view/views_nuoc_va_thuc_pham/thuc_pham/thuc_pham_chuc_nang.php");
    exit();
?>

