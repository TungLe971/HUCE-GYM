<div class="hoivien__modal-popup">
    <div class="hoivien__modal-popup-overlay">
        <h4 class="hoivien__modal-popup-header">Thêm hội viên</h4>
        <form action="../../controller/controller_hoi_vien/hoivien_add.php" method="POST">
            <table class="hoivien_addform">
                <tr>
                    <td><label for="">Họ và tên : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-ten"
                            placeholder="họ và tên">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Ngày sinh : </label></td>
                    <td><input type="date" class="hoivien__table-add-input" name="hoivien__table-add-ngay_sinh"></td>
                </tr>
                <tr>
                    <td><label for="">Giới tính :</label></td>
                    <td>
                        <select class="hoivien__table-add-input-gioitinh" name="hoivien__table-add-gioi_tinh">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tuổi : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-tuoi"
                            placeholder="tuổi">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Số điện thoại : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-sdt"
                            placeholder="số diện thoại">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Email : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-email"
                            placeholder="email">
                    </td>
                </tr>
                <tr>
                    <td><label for="">CMND : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-cmnd"
                            placeholder="cmnd">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Biển số xe : </label></td>
                    <td><input type="text" class="hoivien__table-add-input" name="hoivien__table-add-bien_xe"
                            placeholder="biển số xe">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <button class="hoivien__table-add-btn hoivien__table-btn-huy" type="button"
                            onclick="">Hủy</button>
                        <button class="hoivien__table-add-btn hoivien__table-btn-them" type="Submit"
                            onclick="">Thêm</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="clear"></div>