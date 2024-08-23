<!-- Kết nối CSDL -->
<?php
    include_once "../../../controller/connection.php";
    // include_once "personal_sort.php";
    
    $personal_get_data="";
    if(isset($_POST['personal_input-search']))
        {
            $personal_get_data = $_POST['personal_input-search'];
        }
    else
        {
            $personal_get_data = "";
        }
    // search sql
    $personal_search = "WHERE id_personal LIKE '%$personal_get_data%' or name_hv LIKE '%$personal_get_data%' or name LIKE '%$personal_get_data%' or tbl_personal.id_hv LIKE '%$personal_get_data%' ";

    if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
    else
        {
            $page = 1;
        }
    // Số hàng một trang
    $rowsPerPage=10;
    $perRow = $page * $rowsPerPage - $rowsPerPage;
    $sql = "SELECT * FROM (tbl_personal INNER JOIN tbl_hoi_vien ON tbl_personal.id_hv = tbl_hoi_vien.id_hv) INNER JOIN tbl_nhan_vien ON tbl_personal.id_nv = tbl_nhan_vien.id_nv $personal_search ORDER BY id_personal LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);

    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_personal";
    if($personal_get_data=="")
        {
            $totalRows = mysqli_num_rows(mysqli_query($mysqli,$sql1));
        }
    else
        {
            $totalRows = mysqli_num_rows(mysqli_query($mysqli,$sql));
        }
    
    // Tính tổng số trang pages
    $totalPages = ceil($totalRows/$rowsPerPage);
    
    // Xây dựng thanh phân trang
    $listPages = "";
    for ($i=1; $i<=$totalPages; $i++)
    {
        if($page==$i)
            {
                $listPages .= '<input class="active personal-page" type="submit" value="'.$i.'" name="page">';
            }
        else
            {
                $listPages .= '<input class="personal-page" type="submit" value="'.$i.'" name="page">';
            }
    }
    
?>

