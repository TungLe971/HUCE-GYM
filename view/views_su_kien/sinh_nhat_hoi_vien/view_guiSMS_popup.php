<?php
    include_once "../../../controller/connection.php";
    $sql = "SELECT * FROM tbl_sinh_nhat_hoi_vien ";
    // WHERE ngay_sinh=CURDATE()
    $query = mysqli_query($mysqli,$sql);
    ?>

<div class='snhv__modal--popup '>
    <div class='snhv__modal__div--popup'>
        <i><b><u class='snhv__modal__div--u'>Send Email</u></b></i>
    <div >
    <form action="../../../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_sendSMS.php" method="POST">
        <table class='snhv__table--addform'>
            <tr>
                <td><label for="lname">Đến:</label></td>
                <td>
                <select class='view__tdd__select' name='view_select_id_hv'>
            <?php
            // Duyệt qua các phẩn từ trong bảng
            while($row = mysqli_fetch_array($query))
            {?>
                <option class='view__tdd__select--sap_xep' value="<?php echo $row["id_hv"]."-".$row["ten_hv"]?>"><?php echo $row["id_hv"]."  ".$row["ten_hv"]."  ".$row["ngay_sinh"]?></option>
            <?php
            }   
            ?>
                </td>
            </tr>
            <tr>
                <td><label for="lname">Tiêu đề:</label></td>
                <td><input class='snhv__table--add_input' type="text"  name="snhv__table--add_tieu_de" ></td>
            </tr>
            <tr>
                <td><label for="lname">Nội dung:</label></td>
                <td><textarea class='snhv__table--add_input snhv__table--add_input--text-area'  name="snhv__table--add_noi_dung" ></textarea></td>
            </tr>
            

            <tr>
                <td colspan='2'>
                    <button class='snhv__table--add-button snhv__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='snhv__table--add-button snhv__table--button_gui' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>