<?php
    //ket noi
    include_once "../../connection.php";
    // Lấy tên file ảnh
    $imageName = basename($_FILES["view_gift__table--add_image"]["name"]);
    // Tạo đường dẫn
    $url = "../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/";
    $imageUrl = $url.$imageName;
    // Di chuyển file ảnh được thêm vào vào folder img
    if(move_uploaded_file($_FILES["view_gift__table--add_image"]["tmp_name"], "../sinh_nhat_hoi_vien/upload/".$imageName))
    {
        $so_luong = $_POST["view_gift__table--add_so_luong"];
        $diem = $_POST["view_gift__table--add_diem"];
        $time_start = $_POST["view_gift__table--add_time_start"];
        $name = $_POST["view_gift__table--add_ten"];

        $sql = "SELECT * FROM tbl_qua_tang";
        $query = mysqli_query($mysqli,$sql);
        
        // kiểm tra

        if($imageUrl==""||$so_luong==""||$diem==""||$time_start==""||$name=="")
        {       
        }
        else{
            
            // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
            $sql = "INSERT INTO tbl_qua_tang(image,so_luong,diem,time_start,name) VALUES('".$imageUrl."','".$so_luong."','".$diem."','".$time_start."','".$name."')";
            echo $sql;
            $query = mysqli_query($mysqli,$sql);
            $mysqli->close();
        // điều hướng trang đến dct.php để refresh
        
        }
    }
        header("Location: ../../../view/views_su_kien/sk_tich_diem/sk_tich_diem.php");
        exit();
    ?>

