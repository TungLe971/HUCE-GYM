<?php
    include_once "../../../controller/connection.php";
    $sql = "SELECT * FROM tbl_hoi_vien";
    $query = mysqli_query($mysqli,$sql);
    ?>
<div class='tdd__modal--popup'>
    <div class='tdd__modal__div--popup'>
        <i><b><u class='tdd__modal__div--u'>Thêm tủ đựng đồ</u></b></i>
    <div >
    <form action="/da_web_nc/controller/controller_csvc/tu_dung_do/tdd_add.php" method="POST">
        <table class='tdd__table--addform'>
            <tr>
                <td><label for="lname">Số tủ:</label></td>
                <td><input class='tdd__table--add_input' type="number"  name="tdd__table--add_so_tu" placeholder="Wardrobe number...."></td>
            </tr>
            <tr>
            <td><label for="lname">Loại tủ:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_loai_tu" placeholder="Wardrobe type...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Trạng thái:</label></td>
                <td><input class='tdd__table--add_input' type="number"  name="tdd__table--add_trang_thai" placeholder="Status...."></td>
            </tr>
            <tr>
                <td><label for="lname">ID hội viên:</label></td>
                <td>
                <select class='view__tdd__select' name='view_select_id_hv'>
                    <option class='view__tdd__select--sap_xep' value="">-- ID hội viên --</option>
            <?php
            // Duyệt qua các phẩn từ trong bảng
            while($row = mysqli_fetch_array($query))
            {?>
                <option class='view__tdd__select--sap_xep' value="<?php echo $row["id_hv"]?>"><?php echo $row["id_hv"]?></option>
            <?php
            }
            ?>   
                </select>
                   
                </td>
            </tr>
            <tr>
                <td><label for="lname">Ngày bắt đầu:</label></td>
                <td><input class='tdd__table--add_input' type="date"  name="tdd__table--add_time_start" placeholder="Time start...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày kết thúc:</label></td>
                <td><input class='tdd__table--add_input' type="date"  name="tdd__table--add_time_end" placeholder="Time end...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ghi chú:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_ghi_chu" placeholder="Note...."></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='tdd__table--add-button tdd__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='tdd__table--add-button tdd__table--button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>
