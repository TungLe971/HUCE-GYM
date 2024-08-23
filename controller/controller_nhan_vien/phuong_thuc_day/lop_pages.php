<!-- Kết nối CSDL -->
<?php
    include_once "../../../controller/connection.php";
    // include_once "lop_sort.php";
    
    $lop_get_data="";
    if(isset($_POST['lop_input-search']))
        {
            $lop_get_data = $_POST['lop_input-search'];
        }
    else
        {
            $lop_get_data = "";
        }
    // search sql
    $lop_search = "WHERE id_lop LIKE '%$lop_get_data%' or ten_lop LIKE '%$lop_get_data%' or name LIKE '%$lop_get_data%' or types_room LIKE '%$lop_get_data%' ";


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
    $sql = "SELECT * FROM (tbl_lop Inner Join tbl_nhan_vien On tbl_lop.id_nv = tbl_nhan_vien.id_nv) $lop_search ORDER BY id_lop LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);

    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_lop";
    if($lop_get_data=="")
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
                $listPages .= '<input class="active lop-page" type="submit" value="'.$i.'" name="page">';
            }
        else
            {
                $listPages .= '<input class="lop-page" type="submit" value="'.$i.'" name="page">';
            }
    }   
?>

