<?php
    include_once "../../controller/connection.php";
    $hoivienID = $_REQUEST['hoivienID'];
    $sql = "SELECT * FROM tbl_hoi_vien where id_hv = $hoivienID";
    $query = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($query)){
?>
<link rel="stylesheet" href="../assets/css/hoivien_viewUpdate.css">
<div class="hoivien__modal-popup">
    <div class="hoivien__modal-popup-overlay">
        <h4 class="hoivien__modal-popup-header">Sửa thông tin</h4>
        <form class="hoivien__popup-table"
            action="../../controller/controller_hoi_vien/hoivien_update_tbl2.php?hoivienID=<?php echo $hoivienID ?>"
            method="POST">
            <table class="hoivien_addform">
                <tr>
                    <td><label for="">Họ và tên : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-ten"
                            value="<?php echo $rows['name_hv'] ?>" placeholder="họ và tên">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Chiều cao : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-chieu_cao"
                            value="<?php echo $rows['chieu_cao'] ?>" placeholder="chiều cao">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Cân nặng : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-can_nang"
                            value="<?php echo $rows['can_nang'] ?>" placeholder="cân nặng">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Phần trăm mỡ : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-pt_mo"
                            value="<?php echo $rows['phan_tram_mo'] ?>" placeholder="% mỡ">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Ngày cập nhật : </label></td>
                    <td><input type="date" class="hoivien__table-add-input" name="hoivien__table-add-ngay_cap_nhat"
                            value="<?php echo $rows['ngay_cap_nhat'] ?>" placeholder="ngày cập nhật">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <button class="hoivien__table-add-btn hoivien__table-btn-huy" type="button"
                            onclick="window.location.href='hoivien.php'">Hủy</button>
                        <button class="hoivien__table-add-btn hoivien__table-btn-them" type="Submit"
                            onclick="">update</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
     }
?>
<div class="clear"></div>