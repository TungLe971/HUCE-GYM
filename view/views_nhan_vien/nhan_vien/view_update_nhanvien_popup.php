<link rel="stylesheet" href="../../assets/css/nhanvien.css">
<link rel="stylesheet" href="../../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">

<?php
    include_once "../../../controller/connection.php";
    $nhanvienID = $_REQUEST['id_nv'];
    $sql = "SELECT * FROM tbl_nhan_vien where id_nv = $nhanvienID";
    $query = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($query)){
?>

<div class="nhon">
    <div class="">
        <h4 class="nhanvien__modal-popup-header">Sửa thông tin nhân viên</h4>
        <form class="nhon2"
            action="../../../controller/controller_nhan_vien/NhanVienUpdate.php?id_nv=<?php echo $nhanvienID?>"
            method="POST">
            <table class="">
                <tr>
                    <td><label for="">Họ và tên : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-ten"
                            placeholder="họ và tên" value="<?php echo $rows['name']?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Giới tính :</label></td>
                    <td>
                        <select class="nhanvien__table-add-input-gioitinh" name="nhanvien__table-add-gioi_tinh">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tuổi : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-tuoi"
                            placeholder="tuổi" value="<?php echo $rows['tuoi']?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Số điện thoại : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-sdt"
                            placeholder="số diện thoại" value="<?php echo $rows['sdt']?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="">CMND : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-cmnd"
                            placeholder="cmnd" value="<?php echo $rows['cmnd']?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Biển số xe : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-bien_so_xe"
                            placeholder="biển số xe" value="<?php echo $rows['bien_so_xe']?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Điạ chỉ : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-dia_chi"
                            placeholder="địa chỉ" value="<?php echo $rows['dia_chi']?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Chức vụ :</label></td>
                    <td>
                        <select class="nhanvien__table-add-input-chuc_vu" name="nhanvien__table-add-chuc_vu">
                            <option value="PT">PT</option>
                            <option value="Lao công">Lao công</option>
                            <option value="Lễ tân">Lễ tân</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Gmail : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-gmail"
                            placeholder="gmail" value="<?php echo $rows['gmail']?>">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>

                        <a href="javascript:history.go(-1)"><button
                                class="nhanvien__table-add-btn nhanvien__table-btn-huy" type="button"
                                onclick="">Hủy</button></a>
                        <button class="nhanvien__table-add-btn nhanvien__table-btn-them" type="Submit" onclick="">Cập
                            nhật</button>
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