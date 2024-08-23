<!-- Kết nối CSDL -->
<?php
    session_start();

    include_once "../../connection.php";

        $id_hv = $_POST['snhvid_hv'];
        $id_gift = $_POST["snhvid_gift"];
        
        // kiểm tra
        $sqlGift = "SELECT * FROM tbl_qua_tang WHERE id_gift = ".$id_gift."";
        $queryGift = mysqli_query($mysqli,$sqlGift);
        $row = mysqli_fetch_array($queryGift);
        $_SESSION['errorMaGift'] = "";
        if($row)
        {
            $trangThai = 1;
            // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
            $sql = "UPDATE tbl_sinh_nhat_hoi_vien SET id_gift='".$id_gift."', trang_thai='".$trangThai."' WHERE id_hv=".$id_hv;
            echo $sql;
            $query = mysqli_query($mysqli,$sql);
            $mysqli->close();
            // điều hướng trang đến dct.php để refresh
        
        }
        else{
            $_SESSION['errorMaGift'] = "<h4 style='color:red; display: inline-block;'>Mã quà tặng không chính xác!</h4>";
        }       
        // header("Location: ../../../view/views_su_kien/sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php");
    
    ?>