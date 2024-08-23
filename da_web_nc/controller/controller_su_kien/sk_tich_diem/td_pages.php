<?php
include_once "../../../controller/connection.php";

$td_search = "";

if (isset($_POST['td_chonNgay'])) {
    $td_get_data = $_POST['td_chonNgay'];

    // Kiểm tra xem chuỗi tìm kiếm có phải là một ngày hợp lệ hay không
    if (strtotime($td_get_data) !== false) {
        $td_search .= " WHERE DATE(tbl_qua_tang.time_start) = '$td_get_data'";
    }
}

// Tính số trang hiện tại
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// Số hàng một trang
$rowsPerPage = 6;
$perRow = $page * $rowsPerPage - $rowsPerPage;

// Xây dựng câu truy vấn SQL
$sql = "SELECT * FROM tbl_qua_tang";
$sql .= $td_search;
$sql .= " ORDER BY id_gift LIMIT $perRow, $rowsPerPage";

$query = mysqli_query($mysqli, $sql);

// Tổng số sản phẩm
$sql1 = "SELECT COUNT(*) AS total FROM tbl_qua_tang";
$sql1 .= $td_search;
$result = mysqli_query($mysqli, $sql1);
$totalRows = mysqli_fetch_assoc($result)['total'];

// Tính tổng số trang pages
$totalPages = ceil($totalRows / $rowsPerPage);

// Xây dựng thanh phân trang
$listPages = "";

for ($i = 1; $i <= $totalPages; $i++) {
    if ($page == $i) {
        $listPages .= '<input class="active td--page" type="submit" value="' . $i . '" name="page">';
    } else {
        $listPages .= '<input style="cursor:pointer;" class="td--page" type="submit" value="' . $i . '" name="page">';
    }
}
?>
