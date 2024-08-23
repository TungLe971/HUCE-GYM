<!-- Kết nối CSDL -->
<?php
    include_once "../../controller/connection.php";
    
    $hoivien_get_data="";
    if(isset($_POST['hoivien__input-search']))
    {
        $hoivien_get_data = $_POST['hoivien__input-search'];
    }
    else
    {
        $hoivien_get_data = "";
    }
    // search sql
    $hoivien_search = "WHERE id_hv LIKE '%$hoivien_get_data%' ";
    
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }
    // Số hàng một trang
    $rowsPerPage=9;
    $perRow = $page * $rowsPerPage - $rowsPerPage;
    $sql = "SELECT * FROM tbl_hoi_vien $hoivien_search LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    $sql1 = "SELECT * FROM tbl_hoi_vien $hoivien_search LIMIT $perRow, $rowsPerPage";
    $query1 = mysqli_query($mysqli,$sql1);
    // Tổng số hội viên
    $totalRows = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_hoi_vien"));
    // Tính tổng số trang pages
    $totalPages = ceil($totalRows/$rowsPerPage);
    // Xây dựng thanh phân trang
    $listPages = "";
    for ($i=1; $i<=$totalPages; $i++)
    {
        // Lấy nút đầu và cuối

        if($i==1 || $i==$totalPages)
        {
            $listPages .= '<input style="cursor:pointer;" class="nuoc--page" type="submit" value="'.$i.'" name="page">';  
        }

        // Xử lý các nút còn lại
        else{
        if($page==$i){
            $listPages .= '<input class="active nuoc--page" type="submit" value="'.$i.'" name="page">';
        }
        else
        {
            if($page<$i+3){
                if($page<$i)
                {
                    if($page>$i-3)
                    {
                        $listPages .= '<input style="cursor:pointer;" class="nuoc--page" type="submit" value="'.$i.'" name="page">';  
                    }
                    else{
                        $listPages .= '<input style="cursor:pointer;" class="nuoc--page" type="button" value="..." name="page">';
                    }
                }
                else{
                    $listPages .= '<input style="cursor:pointer;" class="nuoc--page" type="submit" value="'.$i.'" name="page">';  
                }
            }
            else{
                $listPages .= '<input style="cursor:pointer;" class="nuoc--page" type="button" value="..." name="page">';
            }
    }
    }
}
?>