<?php
include_once "../connection.php";

// Kiểm tra xem có dữ liệu được gửi từ biểu mẫu hay không
if (isset($_POST['card_id'], $_POST['id_hv'], $_POST['id_nv'], $_POST['types_room'], $_POST['packages'], $_POST['quantity'], $_POST['time_start'], $_POST['time_end'], $_POST['total_money'],$_POST['status'])) {
    $card_id = $_POST['card_id'];
    $id_hv = $_POST['id_hv'];
    $id_nv = $_POST['id_nv'];
    $types_room = $_POST['types_room'];
    $packages = $_POST['packages'];
    $quantity = $_POST['quantity'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];

    $sql1 = "Select*from tbl_packages Where name_packages='$packages' and types_room='$types_room'";
    $query1=mysqli_query($mysqli, $sql1);
    $row = mysqli_fetch_array($query1);
  
    $total_money = (int)$row['gia_packages']*(int)$quantity;
    $status = $_POST['status'];

    // Xử lý chuỗi nhập vào để tránh lỗ hổng SQL injection
    $card_id = mysqli_real_escape_string($mysqli, $card_id);
    $id_hv = mysqli_real_escape_string($mysqli, $id_hv);
    $id_nv = mysqli_real_escape_string($mysqli, $id_nv);
    $types_room = mysqli_real_escape_string($mysqli, $types_room);
    $packages = mysqli_real_escape_string($mysqli, $packages);
    $quantity = mysqli_real_escape_string($mysqli, $quantity);
    $time_start = mysqli_real_escape_string($mysqli, $time_start);
    $time_end = mysqli_real_escape_string($mysqli, $time_end);
    $total_money = mysqli_real_escape_string($mysqli, $total_money);
    if ($status == "Không hoạt động") {
        $status = 0;
    } else if ($status == "Đang hoạt động") {
        $status = 1;
    }

    // Xây dựng câu truy vấn sửa thông tin
    $sql = "UPDATE card SET id_hv='$id_hv', id_nv='$id_nv', types_room='$types_room', packages='$packages', quantity='$quantity', time_start='$time_start', time_end='$time_end', total_money='$total_money', status='$status' WHERE card_id='$card_id'";
    echo $sql;
    // Thực thi truy vấn
    if (mysqli_query($mysqli, $sql)) {
        echo "Thông tin người dùng đã được cập nhật thành công.";
    } else {
        echo "Có lỗi xảy ra khi cập nhật thông tin người dùng: " . mysqli_error($mysqli);
    }
}

// Đóng kết nối
$mysqli->close();
?>
