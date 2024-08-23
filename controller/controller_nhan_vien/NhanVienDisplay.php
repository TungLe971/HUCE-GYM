<!-- Kết nối CSDL -->
<?php
    include "NhanVienPage.php";
?>
<?php

if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý" )
{

?>
<link rel="stylesheet" href="../../assets/css/nhanvien.css">

<!-- Hien thi bang -->
<div class="main-nhanvien">
    <div class="nhanvien__search-view">
        <h2 class="nhanvien__search-heading"><u>Nhân viên</u></h2>
        <div class="nhanvien__search-input">
                <i class="fa-sharp fa-solid fa-magnifying-glass nhanvien__search-input--icon"></i>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input class='nhanvien__input-search' type="text" name="nhanvien__input-search"
                        placeholder="Tìm Kiếm">
                </form>
            </div>
        <li style ="margin-top: 190px;">
            <ul><a href="../../views_nhan_vien/nv_ptd/lop.php" class="nhanvien--option"><i class="fa-solid fa-laptop-file fa-2xl"
                        style="color: #2b3e78;"></i>Phương thức dạy</a></ul>
            <ul><a href="../../views_nhan_vien/lich_di_lam/lich_di_lam.php" class="nhanvien--option"><i class="fa-solid fa-calendar-days fa-2xl"
                        style="color: #2b3e78;"></i>Lịch đi làm</a></ul>
            <ul><a href="../../views_nhan_vien/bang_luong/nv_bang_luong.php" class="nhanvien--option nhanvien--option__luong"><i
                        class="fa-solid fa-coins fa-2xl" style="color: #2b3e78;"></i>Lương</a></ul>
        </li>
    </div>
    <div class="nhanvien__table">
        <table class="nhanvien__table-view">
            <tr class="nhanvien__table-view--title">
                <th>ID</th>
                <th>HỌ VÀ TÊN</th>
                <th>GIỚI TÍNH</th>
                <th>TUỔI</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>CMND</th>
                <th>BIỂN SỐ XE</th>
                <th>ĐỊA CHỈ</th>
                <th>CHỨC VỤ</th>
                <th>GMAIL</th>
                <th class="nhanvien__table_row--tieuDe_Xoa" style="display:none;  text-align: center;">XÓA</th>
                <th class="nhanvien__table_row--tieuDe_update" style="display:none; text-align: center;">UPDATE</th>
            </tr>
            <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
            <tr class="nhanvien__table-view--data">
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["id_nv"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["name"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["gioi_tinh"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["tuoi"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["sdt"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["cmnd"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["bien_so_xe"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["dia_chi"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["chuc_vu"]?></td>
                <td class="nhanvien__table_td--hienthi-td"><?php echo $row["gmail"]?></td>
                <td class="nhanvien__table_td--hienthi-td nhanvien__table_td--hienthi-td-xoa" style="display:none; text-align: center;"><a onclick="return confirm('Are u sure about that ?')"  href="../../../controller/controller_nhan_vien/NhanVienDelete.php?id_nv=<?php echo $row["id_nv"]?>"><i class="fa-sharp fa-solid fa-delete-left"></i></a></td>
                <td class="nhanvien__table_td--hienthi-td nhanvien__table_td--hienthi-td-update" style="display:none; text-align: center;"><a href="view_update_nhanvien_popup.php?id_nv=<?php echo $row["id_nv"]?>"><i class="fa-solid fa-wrench"></i></a></td>

                <?php
       }
        ?>
        </table>

        <form class="nhanvien__pagination" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <center>
                <?php echo $listPages; ?>
            </center>
        </form>


        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <div class="nhanvien__AUD">
           
            <button class='nhanvien__AUD-btn js-add' type="button" onclick="">Thêm</button>
            <button class='nhanvien__AUD-btn js-update' type="button" onclick="">Cập nhập</button>
            <button class='nhanvien__AUD-btn js-delete nhanvien__AUD-btn-del' type="button" onclick="">Xóa</button>
        </div>
    </div>
</div>
<?php

     }
    else{
        header("Locaction: dang_nhap.php");
     }

?>
<?php
$mysqli -> close();
?>