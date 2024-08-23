

<?php
    // //ket noi
    include_once "../../connection.php";
    // lay CSDL
    $so_tu = $_POST["tdd__table--add_so_tu"];
    $loai_tu = $_POST["tdd__table--add_loai_tu"];
    $trang_thai = $_POST["tdd__table--add_trang_thai"];
    $id_hv = $_POST["view_select_id_hv"];
    $time_start = $_POST["tdd__table--add_time_start"];
    $time_end = $_POST["tdd__table--add_time_end"];
    $ghi_chu = $_POST["tdd__table--add_ghi_chu"];

 
    
    // kiểm tra

    
    if($so_tu==""||$loai_tu==""||$trang_thai==""||$time_start==""||$time_end=="")
    {    
    }
    else{
        
    // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO wardrobe(so_tu,loai_tu,trang_thai,id_hv,time_start,time_end,ghi_chu) VALUES('".$so_tu."','".$loai_tu."','".$trang_thai."','".$id_hv."','".$time_start."','".$time_end."','".$ghi_chu."')";
    echo $sql;
    $query = mysqli_query($mysqli,$sql);
    //điều hướng trang đến tdd.php để refresh
    
    }
    header("Location: ../../../view/views_csvc/tu_dung_do/tu_dung_do.php");
    exit();
?>

