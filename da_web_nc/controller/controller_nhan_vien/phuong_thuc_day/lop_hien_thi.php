<!-- Kết nối CSDL -->
<?php
    include_once "lop_pages.php";
?>

<!-- Hien thi bang -->
<li class="lop_icon_back"><a class="lop-abc" href="/da_web_nc/view/views_nhan_vien/nhan_vien/nhanvien.php"><i class="fa-solid fa-arrow-left"></i></a></li>
<div class = "lop_div-hienthi">
    <div class = "lop_div-hienthi1">
        <table>
            <div  class='lop_div-tap'>
                <li class="lop_div lop_div-lop"><a href="lop.php">Class</a></th></li>
                <li class="lop_div lop_div-personal"><a href="personal.php">Personal</a></li>
            </div>
    
            <!-- tạo giao diện nút thêm, sửa, xóa -->
             <div class='lop_div-chua_button'>
                <button class='lop_div-button js-them' type="button" onclick="">Thêm</button>
                <button class='lop_div-button js-sua' type="button" onclick="">Sửa</button>
                <button class='lop_div-button js-xoa lop_div-button_xoa' type="button" onclick="">Xóa</button>    
             </div>  
        </table> 
    </div>

    <div class = "lop_div-hienthi2">
        <!-- tạo giao diện sắp xếp -->
            <div class="lop_div-search-sort">
                <form class="lop_form-search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <div class="lop_form_div-search">
                        <input class='lop_input-search' type="text" name="lop_input-search" placeholder="Search....">
                        <button class='lop_icon-search' type="submit"><i class="fa-solid fa-magnifying-glass lop_search-input-icon"></i></button>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>"></form>
                    </div>
                </form>
            </div>
        <table class="lop_table-hienthi">
            <tr class="lop_table_row-hienthi lop_table-Tieu_de" style="background-color: #4470C8">
                <th>ID Class</th>
                <th>Lớp</th>
                <th>Tên lớp</th>
                <th>Gói tập</th>
                <th>Thời lượng(h)</th>
                <th>Ngày hoạt động</th>
                <th>Sĩ số lớp</th>
                <th>Teacher</th>
                <th>ID Nhân viên</th>
                <th>Doanh thu</th>
            </tr>
            <?php

            // Duyệt qua các phẩn từ trong bảng
            while($row = mysqli_fetch_array($query))
        {
            ?>
            <tr class='lop_table_row-hienthi'>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["id_lop"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["types_room"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["ten_lop"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["packages"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["thoi_luong"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["ngay_hoat_dong"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["so_luong_hv"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["name"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["id_nv"]?></td>
                <td  class="lop_table_td-hienthi-td"><?php echo $row["doanh_thu"]?></td>
            <?php
        }
            ?>    
            
        </table>
    </div>
</div>
   