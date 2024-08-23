<!-- Kết nối CSDL -->
<?php
    include_once "../../../controller/connection.php";
    
    $nhanvien_get_data="";
    if(isset($_POST['nhanvien__input-search']))
    {
        $nhanvien_get_data = $_POST['nhanvien__input-search'];
    }
    else
    {
        $nhanvien_get_data = "";
    }
    // search sql
    $nhanvien_search = "WHERE id_nv LIKE '%$nhanvien_get_data%' ";
    
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
    $sql = "SELECT * FROM tbl_nhan_vien $nhanvien_search LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $totalRows = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_nhan_vien"));
    // Tính tổng số trang pages
    $totalPages = ceil($totalRows/$rowsPerPage);
    // Xây dựng thanh phân trang
    $listPages = "";
    // for ($i=1; $i<=$totalPages; $i++)
    // {
    //     if($page==$i){
    //         $listPages .= '<input class="active nhanvien_page" type="submit" value="'.$i.'" name="page">';
    //     }
    //     else{
    //         $listPages .= '<input class="nhanvien_page" type="submit" value="'.$i.'" name="page">';
    //     }
    // }
    for ($i=1; $i<=$totalPages; $i++)
    {
        // Lấy nút đầu và cuối

        if($i==1 || $i==$totalPages)
        {
            $listPages .= '<input style="cursor:pointer;" class="nhanvien_page" type="submit" value="'.$i.'" name="page">';  
        }

        // Xử lý các nút còn lại
        else{
        if($page==$i){
            $listPages .= '<input class="active nhanvien_page" type="submit" value="'.$i.'" name="page">';
        }
        else
        {
            if($page<$i+3){
                if($page<$i)
                {
                    if($page>$i-3)
                    {
                        $listPages .= '<input style="cursor:pointer;" class="nhanvien_page" type="submit" value="'.$i.'" name="page">';  
                    }
                    else{
                        $listPages .= '<input style="cursor:pointer;" class="nhanvien_page" type="button" value="..." name="page">';
                    }
                }
                else{
                    $listPages .= '<input style="cursor:pointer;" class="nhanvien_page" type="submit" value="'.$i.'" name="page">';  
                }
            }
            else{
                $listPages .= '<input style="cursor:pointer;" class="nhanvien_page" type="button" value="..." name="page">';
            }
    }
    }
}
?>