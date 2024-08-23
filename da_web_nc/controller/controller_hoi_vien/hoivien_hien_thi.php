<!-- Kết nối CSDL -->
<?php
    include "hoivien_pages.php";
?>
<link rel="stylesheet" href="../assets/css/hoivien.css">

<!-- Hien thi bang -->
<div class="main-hoivien">
    <div class="hoivien__search-view">
        <h2 class="hoivien__search-heading">Hội Viên</h2>
        <div class="hoivien__search-input">
            <i class="fa-sharp fa-solid fa-magnifying-glass hoivien__search-input--icon"></i>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input class='hoivien__input-search' type="text" name="hoivien__input-search" placeholder="Tìm Kiếm">
            </form>
        </div>
        <button class="hoivien__search-btn">
            Theo Dõi Sức Khỏe
        </button>
    </div>
    <div class="hoivien__table">
        <table class="hoivien__table-view">
            <tr class="hoivien__table-view--title">
                <th>ID</th>
                <th>HỌ VÀ TÊN</th>
                <th>NGÀY SINH</th>
                <th>GIỚI TÍNH</th>
                <th>TUỔI</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>EMAIL</th>
                <th>CMND</th>
                <th>BIỂN SỐ XE</th>
                <th>ĐIỂM</th>
                <th class="hoivien__table-title--delete" style="display:none; text-align: center;">XÓA</th>
                <th class="hoivien__table-title--update" style="display:none; text-align: center;">UPDATE</th>
            </tr>
            <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
            <tr class="hoivien__table-view--data">
                <td><?php echo $row["id_hv"]?></td>
                <td><?php echo $row["name_hv"]?></td>
                <td><?php echo $row["ngay_sinh"]?></td>
                <td><?php echo $row["gioi_tinh"]?></td>
                <td><?php echo $row["tuoi"]?></td>
                <td><?php echo $row["sdt"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["cmnd"]?></td>
                <td><?php echo $row["bien_xe"]?></td>
                <td><?php echo $row["diem_tich_luy"]?></td>
                <td class="hoivien__table-view-content--delete" style="display:none; text-align: center;"><a
                        href="../../controller/controller_hoi_vien/hoivien_delete.php?hoivienID=<?php echo $row["id_hv"]?>"><i
                            class="fa-sharp fa-solid fa-delete-left"></i></a></td>
                <td class="hoivien__table-view-content--update" style="display:none; text-align: center;"><a
                        href="view_update_hoivien_popup.php?hoivienID=<?php echo $row["id_hv"]?>"><i
                            class="fa-solid fa-wrench"></i></a></td>
                <?php
       }
        ?>
        </table>
        <!-- bang theo doi suc khoe -->
        <table class="hoivien__table-health-view">
            <tr class="hoivien__table-view--title">
                <th>ID</th>
                <th>HỌ VÀ TÊN</th>
                <th>CHIỀU CAO</th>
                <th>CÂN NẶNG</th>
                <th>% MỠ</th>
                <th>NGÀY CẬP NHẬT</th>
                <th class="hoivien__table-title--delete2" style="display:none; text-align: center;">XÓA</th>
                <th class="hoivien__table-title--update2" style="display:none; text-align: center;">UPDATE</th>
            </tr>
            <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query1))
       {
        ?>
            <tr class="hoivien__table-view--data">
                <td><?php echo $row["id_hv"]?></td>
                <td><?php echo $row["name_hv"]?></td>
                <td><?php echo $row["chieu_cao"]?></td>
                <td><?php echo $row["can_nang"]?></td>
                <td><?php echo $row["phan_tram_mo"]?></td>
                <td><?php echo $row["ngay_cap_nhat"]?></td>
                <td class="hoivien__table-view-content--delete" style="display:none; text-align: center;"><a
                        href="../../controller/controller_hoi_vien/hoivien_delete.php?hoivienID=<?php echo $row["id_hv"]?>"><i
                            class="fa-sharp fa-solid fa-delete-left"></i></a></td>
                <td class="hoivien__table-view-content--update" style="display:none; text-align: center;"><a
                        href="view_update_hoivien_tbl2_popup.php?hoivienID=<?php echo $row["id_hv"]?>"><i
                            class="fa-solid fa-wrench"></i></a></td>
                <?php
       }
        ?>
        </table>
        <form class="hoivien__pagination" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <center>
                <?php echo $listPages; ?>
            </center>
        </form>
        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <?php
            if ($_SESSION['login'] && $_SESSION['chuc_vu'] == "Quản lý")
        {
            ?>
        <div class="hoivien__AUD">
            <button class='hoivien__AUD-btn js-add' type="button" onclick="">Thêm</button>
            <button class='hoivien__AUD-btn js-ud' type="button" onclick="">Cập nhập</button>
            <button class='hoivien__AUD-btn js-del hoivien__AUD-btn-del' type="button" onclick="">Xóa</button>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<?php
$mysqli -> close();
?>