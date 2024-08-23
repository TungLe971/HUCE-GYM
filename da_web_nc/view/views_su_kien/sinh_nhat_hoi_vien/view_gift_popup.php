<?php
    include_once "../../../controller/connection.php";
    $sql = "SELECT * FROM tbl_hoi_vien";
    $query = mysqli_query($mysqli,$sql);
    ?>
<div class='view_gift__modal--popup'>
    <div class='view_gift__modal__div--popup'>
        <i><b><u class='view_gift__modal__div--u'>Thêm quà tặng</u></b></i>
    <div >
    <form action="../../../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_add_gift.php" method="POST" enctype="multipart/form-data">
        <table class='view_gift__table--addform'>
            <tr>
                <td><label for="lname">Image:</label></td>
                <td><input class='view_gift__table--add_input' type="file"  name="view_gift__table--add_image"></td>
            </tr>
            <tr>
            <td><label for="lname">Tên:</label></td>
                <td><input class='view_gift__table--add_input' type="text"  name="view_gift__table--add_ten" placeholder="Tên quà tặng...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Điểm:</label></td>
                <td><input class='view_gift__table--add_input' type="text"  name="view_gift__table--add_diem" placeholder="Giá...."></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng:</label></td>
                <td><input class='view_gift__table--add_input' type="text"  name="view_gift__table--add_so_luong" placeholder="Số lượng tồn...."></td>
            </tr>                    
            <tr>
                <td colspan='2'>
                    <button class='view_gift__table--add-button view_gift__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='view_gift__table--add-button view_gift__table--button_them' type="Submit" onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>
