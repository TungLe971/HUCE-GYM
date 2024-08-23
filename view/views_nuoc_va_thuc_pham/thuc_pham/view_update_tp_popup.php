<link rel="stylesheet" href="../../assets/css/thucPham_viewUpdate.css">

<?php
    include_once "../../../controller/connection.php";
    $tpID = $_REQUEST['tpID'];
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham where id_nuoc_va_tp = $tpID";
    $query = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($query)){
    ?>

<div class='tp__modal--popup'>
    <div class='tp__modal__div--popup'>
        <i><b><u class='tp__modal__div--u'>Cập nhật sản phẩm</u></b></i>
    <div >
    <form action="../../../controller/controller_nuoc_va_tp/controller_thuc_pham/tp_add.php?tpID=<?php echo $tpID?>" method="POST">
        <table class='tp__table--addform'>
            <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='tp__table--add_input' type="text"  name="tp__table--add_ten" value="<?php echo $rows['name']?>"></td>
                
            </tr>
            <tr>
                <td><label for="lname">Loại sản phẩm:</label></td>
                <td><input class='tp__table--add_input' type="text"  name="tp__table--add_loai_san_pham" value="<?php echo $rows['loai_tp']?>"></td>
            </tr>
            <tr>
            <td><label for="lname">Giá bán:</label></td>
                <td><input class='tp__table--add_input' type="number"  name="tp__table--add_gia_ban" value="<?php echo $rows['gia_ban']?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Giá nhập:</label></td>
                <td><input class='tp__table--add_input' type="number"  name="tp__table--add_gia_nhap" value="<?php echo $rows['gia_nhap']?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng nhập:</label></td>
                <td><input class='tp__table--add_input' type="number"  name="tp__table--add_so_luong_nhap" value="<?php echo $rows['so_luong_nhap']?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng tồn:</label></td>
                <td><input class='tp__table--add_input' type="number"  name="tp__table--add_so_luong_ton" value="<?php echo $rows['so_luong_ton']?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Nhà cung cấp:</label></td>
                <td><input class='tp__table--add_input' type="text"  name="tp__table--add_nha_cung_cap" value="<?php echo $rows['nha_cung_cap']?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày nhập:</label></td>
                <td><input class='tp__table--add_input' type="date"  name="tp__table--add_ngay_nhap" value="<?php echo $rows['ngay_nhap']?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày hết hạn:</label></td>
                <td><input class='tp__table--add_input' type="date"  name="tp__table--add_ngay_het_han" value="<?php echo $rows['ngay_het_han']?>"></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='tp__table--add-button tp__table--button_huy_update' type="button" onclick="window.location.href='thuc_pham_chuc_nang.php'">Hủy</button>
                    <button class='tp__table--add-button tp__table--button_them_update' type="Submit"  onclick="" >Update</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<?php
     }
?>
<div class="clear"></div>