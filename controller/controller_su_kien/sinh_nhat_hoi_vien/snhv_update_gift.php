<!-- Kết nối CSDL -->
<?php
    include_once "../../connection.php";

    
    if(basename($_FILES["view_gift__table--add_image"]["name"])){
        $image = basename($_FILES["view_gift__table--add_image"]["name"]);
        $url="../../../controller/controller_su_kien/sinh_nhat_hoi_vien/upload/";
        $imageUrl = $url.$image;
        move_uploaded_file($_FILES["view_gift__table--add_image"]["tmp_name"],"upload/".$image);
    }
    else
    {
        $image = $_REQUEST['urlImage'];
        $imageUrl = $image;
    }
    
    
        $id_gift = $_REQUEST['id_gift'];
        $so_luong = $_POST["view_gift__table--add_so_luong"];
        $diem = $_POST["view_gift__table--add_diem"];
        $name = $_POST["view_gift__table--add_ten"];
        
        // kiểm tra

        
        if($imageUrl==""||$so_luong==""||$diem==""||$name=="")
        {    
        }
        else{
            
        // Thực hiện truy vấn để thêm dữ liệu vào cơ sở dữ liệu
        $sql = "UPDATE tbl_qua_tang SET image='".$imageUrl."', so_luong='".$so_luong."',diem='".$diem.
        "', name='".$name."' WHERE id_gift=".$id_gift;
        echo $sql;
        $query = mysqli_query($mysqli,$sql);
        $mysqli->close();
        // điều hướng trang đến dct.php để refresh
        
        }
        
        header("Location: ../../../view/views_su_kien/sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php");
        exit();
    
    ?>