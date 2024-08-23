<div class='tp__modal--popup'>
    <div class='tp__modal__div--popup'>
        <i><b><u class='tp__modal__div--u'>Thêm sản phẩm</u></b></i>
    <div >
    <form action="../../../controller/controller_nuoc_va_tp/controller_thuc_pham/tp_add.php" method="POST">
        <table class='tp__table--addform'>
            <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='tp__table--add_input' type="text" placeholder="Name...." name="tp__table--add_ten"></td>
                
            </tr>
            <tr>
                <td><label for="lname">Loại sản phẩm:</label></td>
                <td><input class='tp__table--add_input' type="text" placeholder="Type...." name="tp__table--add_loai_san_pham"></td>
            </tr>
            <tr>
            <td><label for="lname">Giá bán:</label></td>
                <td><input class='tp__table--add_input' type="number" placeholder="Price...." name="tp__table--add_gia_ban"></td>
            </tr>
            <tr>
                <td><label for="lname">Giá nhập:</label></td>
                <td><input class='tp__table--add_input' type="number" placeholder="Import Price...." name="tp__table--add_gia_nhap"></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng nhập:</label></td>
                <td><input class='tp__table--add_input' type="number" placeholder="The number of import...." name="tp__table--add_so_luong_nhap"></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng tồn:</label></td>
                <td><input class='tp__table--add_input' type="number" placeholder="Quantity in stock...." name="tp__table--add_so_luong_ton"></td>
            </tr>
            <tr>
                <td><label for="lname">Nhà cung cấp:</label></td>
                <td><input class='tp__table--add_input' type="text" placeholder="Supplier...." name="tp__table--add_nha_cung_cap"></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày nhập:</label></td>
                <td><input class='tp__table--add_input' type="date" placeholder="Date Added...." name="tp__table--add_ngay_nhap"></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày hết hạn:</label></td>
                <td><input class='tp__table--add_input' type="date" placeholder="Expiration date...." name="tp__table--add_ngay_het_han"></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='tp__table--add-button tp__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='tp__table--add-button tp__table--button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>