<link rel="stylesheet" href="../../assets/css/dung_cu_tap_viewUpdate.css">

<?php
    include_once "../../../controller/connection.php";
    $dctID = $_REQUEST['dctID'];
    $sql = "SELECT * FROM tbl_dung_cu_tap where id_may = $dctID";
    $query = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($query)){
    ?>

<div class='dct__modal--popup'>
    <div class='dct__modal__div--popup'>
        <i><b><u class='dct__modal__div--u'>Cập nhật dụng cụ tập</u></b></i>
    <div >
    <form action="../../../controller/controller_csvc/dung_cu_tap/dct_update.php?dctID=<?php echo $dctID?>" method="POST">
        <table class='dct__table--addform'>
            <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='dct__table--add_input' type="text"  name="dct__table--add_ten" value="<?php echo $rows['ten']?>" placeholder="Name...."></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng:</label></td>
                <td><input class='dct__table--add_input' type="number"  name="dct__table--add_so_luong" value="<?php echo $rows['so_luong']?>" placeholder="Quantity...."></td>
            </tr>
            <tr>
            <td><label for="lname">Nhà cung cấp:</label></td>
                <td><input class='dct__table--add_input' type="text"  name="dct__table--add_nha_cung_cap" value="<?php echo $rows['nha_cung_cap']?>" placeholder="Supplier...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày nhập:</label></td>
                <td><input class='dct__table--add_input' type="date"  name="dct__table--add_ngay_nhap" value="<?php echo $rows['ngay_nhap']?>" placeholder="Date Added...."></td>
            </tr>
            <tr>
                <td><label for="lname">Giá nhập:</label></td>
                <td><input class='dct__table--add_input' type="number"  name="dct__table--add_gia_nhap" value="<?php echo $rows['gia_nhap']?>" placeholder="Import Price...."></td>
            </tr>
            <tr>
                <td><label for="lname">Bảo trì:</label></td>
                <td><input class='dct__table--add_input' type="date"  name="dct__table--add_bao_tri" value="<?php echo $rows['bao_tri']?>" placeholder="Maintenance...."></td>
            </tr>
            <tr>
                <td><label for="lname">Bảo hành:</label></td>
                <td><input class='dct__table--add_input' type="date"  name="dct__table--add_bao_hanh" value="<?php echo $rows['bao_hanh']?>" placeholder="Guarantee...."></td>
            </tr>
            <tr>
                <td><label for="lname">Chi phí bảo trì:</label></td>
                <td><input class='dct__table--add_input' type="number"  name="dct__table--add_chi_phi_bao_tri" value="<?php echo $rows['chi_phi_bao_tri']?>" placeholder="Maintenance Costs...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ghi chú:</label></td>
                <td><input class='dct__table--add_input' type="text"  name="dct__table--add_ghi_chu" value="<?php echo $rows['ghi_chu']?>" placeholder="Note...."></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='dct__table--add-button dct__table--button_huyUpdate' type="button" onclick="window.location.href='dung_cu_tap.php'">Hủy</button>
                    <button class='dct__table--add-button dct__table--button_themUpdate' type="Submit"  onclick="" >Update</button>
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