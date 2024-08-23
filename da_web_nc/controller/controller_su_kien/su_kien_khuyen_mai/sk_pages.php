<!-- Kết nối CSDL -->
<?php
    include_once "../../../controller/connection.php";
    
    $sk_get_data="";
    if(isset($_POST['sk__input-search']))
    {
        $sk_get_data = $_POST['sk__input-search'];
    }
    else
    {
        $sk_get_data = "";
    }
    // search sql
    $sk_search = "WHERE id LIKE '%$sk_get_data%' ";
    
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }
    // Số hàng một trang
    $rowsPerPage=7;
    $perRow = $page * $rowsPerPage - $rowsPerPage;
    $sql2 = "SELECT * FROM events $sk_search LIMIT $perRow, $rowsPerPage";
    $query2 = mysqli_query($mysqli,$sql2);
    // Tổng số hội viên
    $totalRows = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM events"));
    // Tính tổng số trang pages
    $totalPages = ceil($totalRows/$rowsPerPage);
    // Xây dựng thanh phân trang
    $listPages = "";
    for ($i=1; $i<=$totalPages; $i++)
    {
        if($page==$i){
            $listPages .= '<input class="active sk_page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input class="sk_page" type="submit" value="'.$i.'" name="page">';
        }
    }
    
?>