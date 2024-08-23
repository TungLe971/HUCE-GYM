<div class="nhanvien__modal-popup">
    <div class="nhanvien__modal-popup-overlay">
        <h4 class="nhanvien__modal-popup-header">Thêm nhân viên</h4>
        <form action="../../../controller/controller_nhan_vien/NhanVienAdd.php" method="POST">
            <table class="nhanvien_addform">
                <tr>
                    <td><label for="">Họ và tên : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-ten"
                            placeholder="họ và tên">
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
                            placeholder="tuổi">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Số điện thoại : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-sdt"
                            placeholder="số diện thoại">
                    </td>
                </tr>
                <tr>
                    <td><label for="">CMND : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-cmnd"
                            placeholder="cmnd">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Biển số xe : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-bien_so_xe"
                            placeholder="biển số xe">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Điạ chỉ : </label></td>
                    <td><input type="text" class="nhanvien__table-add-input" name="nhanvien__table-add-dia_chi"
                            placeholder="địa chỉ">
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
                            placeholder="gmail">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <button class="nhanvien__table-add-btn nhanvien__table-btn-huy" type="button"
                            onclick="">Hủy</button>
                        <button class="nhanvien__table-add-btn nhanvien__table-btn-them" type="Submit"
                            onclick="">Thêm</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="clear"></div>