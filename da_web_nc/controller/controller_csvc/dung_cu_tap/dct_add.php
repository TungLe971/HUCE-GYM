
<?php
    //ket noi
    include_once "../../connection.php";
    // lay CSDL
    $name = $_POST["dct__table--add_ten"];
    $so_luong = $_POST["dct__table--add_so_luong"];
    $nha_cung_cap = $_POST["dct__table--add_nha_cung_cap"];
    $ngay_nhap = $_POST["dct__table--add_ngay_nhap"];
    $gia_nhap = $_POST["dct__table--add_gia_nhap"];
    $bao_tri = $_POST["dct__table--add_bao_tri"];
    $bao_hanh = $_POST["dct__table--add_bao_hanh"];
    $chi_phi_bao_tri = $_POST["dct__table--add_chi_phi_bao_tri"];
    $ghi_chu = $_POST["dct__table--add_ghi_chu"];

    $sql = "SELECT * FROM tbl_dung_cu_tap";
    $query = mysqli_query($mysqli,$sql);
    
    // kiểm tra

    
    if($name==""||$so_luong==""||$nha_cung_cap==""||$ngay_nhap==""||$gia_nhap==""||$bao_tri==""||$bao_hanh==""||$chi_phi_bao_tri=="")
    {    
    }
    else{
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO tbl_dung_cu_tap(ten,so_luong,nha_cung_cap,ngay_nhap,gia_nhap,bao_tri,bao_hanh,chi_phi_bao_tri,ghi_chu) VALUES('".$name."','".$so_luong."','".$nha_cung_cap."','".$ngay_nhap."','".$gia_nhap."','".$bao_tri."','".$bao_hanh."','".$chi_phi_bao_tri."','".$ghi_chu."')";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    //điều hướng trang đến dct.php để refresh
    
    }
    header("Location: ../../../view/views_csvc/dung_cu_tap/dung_cu_tap.php");
    exit();
?>

