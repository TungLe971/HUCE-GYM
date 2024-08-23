<div class='nuoc__modal--popup'>
    <div class='nuoc__modal__div--popup'>
        <i><b><u class='nuoc__modal__div--u'>Thêm sản phẩm</u></b></i>
    <div >
    <form action="../../../controller/controller_nuoc_va_tp/controller_nuoc/nuoc_add.php" method="POST">
        <table class='nuoc__table--addform'>
            <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='nuoc__table--add_input' type="text"  name="nuoc__table--add_ten" placeholder="Name...."></td>
            </tr>
            <tr>
                <td><label for="lname">Loại sản phẩm:</label></td>
                <td><input class='nuoc__table--add_input' type="text"  name="nuoc__table--add_loai_san_pham" placeholder="Type...."></td>
            </tr>
            <tr>
            <td><label for="lname">Giá bán:</label></td>
                <td><input class='nuoc__table--add_input' type="number"  name="nuoc__table--add_gia_ban" placeholder="Price...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Giá nhập:</label></td>
                <td><input class='nuoc__table--add_input' type="number"  name="nuoc__table--add_gia_nhap" placeholder="
Import Price...."></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng nhập:</label></td>
                <td><input class='nuoc__table--add_input' type="number"  name="nuoc__table--add_so_luong_nhap" placeholder="The number of import...."></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng tồn:</label></td>
                <td><input class='nuoc__table--add_input' type="number"  name="nuoc__table--add_so_luong_ton" placeholder="Quantity in stock...."></td>
            </tr>
            <tr>
                <td><label for="lname">Nhà cung cấp:</label></td>
                <td><input class='nuoc__table--add_input' type="text"  name="nuoc__table--add_nha_cung_cap" placeholder="Supplier...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày nhập:</label></td>
                <td><input class='nuoc__table--add_input' type="date"  name="nuoc__table--add_ngay_nhap" placeholder="
Date Added...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày hết hạn:</label></td>
                <td><input class='nuoc__table--add_input' type="date"  name="nuoc__table--add_ngay_het_han" placeholder="
Expiration date...."></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='nuoc__table--add-button nuoc__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='nuoc__table--add-button nuoc__table--button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>