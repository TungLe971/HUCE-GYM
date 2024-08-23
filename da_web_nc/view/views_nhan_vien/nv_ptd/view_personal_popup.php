<?php
    include_once "../../../controller/connection.php";
    $sql = "SELECT * FROM tbl_nhan_vien";
    $query = mysqli_query($mysqli,$sql);
    $sql1 = "SELECT * FROM tbl_hoi_vien";
    $query1 = mysqli_query($mysqli,$sql1);
    $sql2 = "SELECT * FROM tbl_packages";
    $query2 = mysqli_query($mysqli,$sql2);
    $sql3 = "SELECT * FROM tbl_packages";
    $query3 = mysqli_query($mysqli,$sql3);
?>
<div class='personal_modal-popup'>
    <div class='personal_modal_div-popup'>
        <i><b><u class='personal_modal_div-u'>Thêm PT</u></b></i>
    <div >
    <form action="../../../controller/controller_nhan_vien/phuong_thuc_day/personal_add.php" method="POST">
        <table class='personal_table-addform'>   
            <tr>
                <td><label for="lname">ID nhân viên:</label></td>
                <td><select class='personal_table-add_input' name='personal_table-add_id_nv'>
                <option value="">-- ID Nhân Viên --</option>
                    <?php
                        // Duyệt qua các phần tử trong bảng
                        while ($row = mysqli_fetch_array($query)) {
                            echo "<option value='" . $row["id_nv"] . "'>" . $row["id_nv"] . "</option>";
                        }
                    ?>
                </select></td>  
            </tr>
            <tr>
                <td><label for="lname">ID hội viên:</label></td>
                <td><select class='personal_table-add_input' name='personal_table-add_id_hv'>
                <option value="">-- ID Hội Viên --</option>
                    <?php
                        // Duyệt qua các phần tử trong bảng
                        while ($row = mysqli_fetch_array($query1)) {
                            echo "<option value='" . $row["id_hv"] . "'>" . $row["id_hv"] . "</option>";
                        }
                    ?>
                </select></td>   
            <tr>

            <td><label for="lname">Thời lượng :</label></td>
                <td><input class='personal_table-add_input personal_table-add_input22' onchange="getValue()" type="text" name="personal_table-add_thoi_luong" placeholder="Thời lượng...."></td>
            </tr>

            <tr>
                <td><label for="lname">Số buổi :</label></td>
                <td><input class='personal_table-add_input' type="text"  name="personal_table-add_so_buoi" placeholder="Số buổi...."></td>
            </tr>

            <tr>
                <td><label for="lname">Ngày bắt đầu:</label></td>
                <td><input class='personal_table-add_input' type="date"  name="personal_table-add_time_start" placeholder="Ngày bắt đầu...."></td>
            </tr>

            <tr>
                <td><label for="lname">Ngày kết thúc:</label></td>
                <td><input class='personal_table-add_input' type="date"  name="personal_table-add_time_end" placeholder="Ngày kết thúc...."></td>
            </tr>

            <tr>
                <td><label for="lname">Doanh thu :</label></td>
                <td><input class='personal_table-add_input personal_table-add_input222' type="text"  name="personal_table-add_doanh_thu" style="background-color:#e3e3e3; border:none; outline:none" placeholder="Doanh thu...." readonly></td>
            </tr>

            <tr>
                <td colspan='2'>
                    <button class='personal_table-add-button personal_table-button_huy' type="button" onclick="">Hủy</button>
                    <button class='personal_table-add-button personal_table-button_them' type="Submit" onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>
<script src="../../assets/js/js_nhan_vien/js_ptd/personal_tt.js"></script>