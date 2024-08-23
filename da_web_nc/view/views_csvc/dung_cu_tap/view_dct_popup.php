<div class='dct__modal--popup'>
    <div class='dct__modal__div--popup'>
        <i><b><u class='dct__modal__div--u'>Thêm dụng cụ tập</u></b></i>
    <div >
    <form action="../../../controller/controller_csvc/dung_cu_tap/dct_add.php" method="POST">
        <table class='dct__table--addform'>
            <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='dct__table--add_input' type="text"  name="dct__table--add_ten" placeholder="Name...."></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng:</label></td>
                <td><input class='dct__table--add_input' type="number"  name="dct__table--add_so_luong" placeholder="Quantity...."></td>
            </tr>
            <tr>
            <td><label for="lname">Nhà cung cấp:</label></td>
                <td><input class='dct__table--add_input' type="text"  name="dct__table--add_nha_cung_cap" placeholder="Supplier...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày nhập:</label></td>
                <td><input class='dct__table--add_input' type="date"  name="dct__table--add_ngay_nhap" placeholder="Date Added...."></td>
            </tr>
            <tr>
                <td><label for="lname">Giá nhập:</label></td>
                <td><input class='dct__table--add_input' type="number"  name="dct__table--add_gia_nhap" placeholder="Import Price...."></td>
            </tr>
            <tr>
                <td><label for="lname">Bảo trì:</label></td>
                <td><input class='dct__table--add_input' type="date"  name="dct__table--add_bao_tri" placeholder="Maintenance...."></td>
            </tr>
            <tr>
                <td><label for="lname">Bảo hành:</label></td>
                <td><input class='dct__table--add_input' type="date"  name="dct__table--add_bao_hanh" placeholder="Guarantee...."></td>
            </tr>
            <tr>
                <td><label for="lname">Chi phí bảo trì:</label></td>
                <td><input class='dct__table--add_input' type="number"  name="dct__table--add_chi_phi_bao_tri" placeholder="Maintenance Costs...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ghi chú:</label></td>
                <td><input class='dct__table--add_input' type="text"  name="dct__table--add_ghi_chu" placeholder="Note...."></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='dct__table--add-button dct__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='dct__table--add-button dct__table--button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>