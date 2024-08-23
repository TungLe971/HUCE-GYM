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
            action="../../controller/controller_hoi_vien/hoivien_update.php?hoivienID=<?php echo $hoivienID ?>"
            method="POST">
            <table class="hoivien_addform">
                <tr>
                    <td><label for="">Họ và tên : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-ten"
                            value="<?php echo $rows['name_hv'] ?>" placeholder="họ và tên">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Ngày sinh : </label></td>
                    <td><input type="date" class="hoivien__table-add-input" name="hoivien__table-add-ngay_sinh"
                            value="<?php echo $rows['ngay_sinh'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="">Giới tính :</label></td>
                    <td>
                        <select class="hoivien__table-add-input-gioitinh" name="hoivien__table-add-gioi_tinh"
                            value="<?php echo $rows['gioi_tinh'] ?>">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tuổi : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-tuoi"
                            value="<?php echo $rows['tuoi'] ?>" placeholder="tuổi">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Số điện thoại : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-sdt"
                            value="<?php echo $rows['sdt'] ?>" placeholder="số diện thoại">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Email : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-email"
                            value="<?php echo $rows['email'] ?>" placeholder="email">
                    </td>
                </tr>
                <tr>
                    <td><label for="">CMND : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-cmnd"
                            value="<?php echo $rows['cmnd'] ?>" placeholder="cmnd">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Biển số xe : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-bien_xe"
                            value="<?php echo $rows['bien_xe'] ?>" placeholder="biển số xe">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Điểm tích lũy : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-diem"
                            value="<?php echo $rows['diem_tich_luy'] ?>" placeholder="điểm">
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