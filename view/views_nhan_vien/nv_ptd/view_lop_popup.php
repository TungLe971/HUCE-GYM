<?php
    include_once "../../../controller/connection.php";
    $sql = "SELECT * FROM tbl_nhan_vien";
    $query = mysqli_query($mysqli,$sql);
    $sql2 = "SELECT * FROM tbl_packages";
    $query2 = mysqli_query($mysqli,$sql2);
    $sql3 = "SELECT * FROM tbl_packages";
    $query3 = mysqli_query($mysqli,$sql3);
?>

<div class='lop_modal-popup'>
    <div class='lop_modal_div-popup'>
        <i><b><u class='lop_modal_div-u'>Thêm Lớp mới</u></b></i>
        <div >
            <form action="../../../controller/controller_nhan_vien/phuong_thuc_day/lop_add.php" method="POST">
                <table class='lop_table-addform'>
                <!-- <tr>
                    <td><label for="">ID Class : </label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-id_class"
                            placeholder="ID Class...">
                    </td>
                </tr> -->
                <tr>
                    <td><label for="lname">ID nhân viên:</label></td>
                    <td><select class='lop_table-add-input' name='lop_table-add-id_nv'>
                            <option value="">-- ID Nhân Viên --</option>
                                <?php
                                    // Duyệt qua các phần tử trong bảng
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo "<option value='" . $row["id_nv"] . "'>" . $row["id_nv"] . "</option>";
                                    } 
                                ?> 
                        </select>
                    </td>                               
                        <!-- <td><input type="text" class="class_table-add-input" name="class_table-add-id_nv" placeholder="ID Nhân Viên...">
                        </td> -->
                </tr>

                <tr>
                    <td><label for="lname">Lớp: </label></td>
                    <td><select class='lop_table-add-input' name='lop_table-add-types_room'>
                                <option value="">-- Lớp --</option>
                                    <?php
                                        // Mảng để lưu các giá trị đã xuất hiện
                                        $uniqueTypes = array();
                                        // Duyệt qua các phẩn từ trong bảng
                                        while($row = mysqli_fetch_array($query2)){
                                        if (!in_array($row["types_room"], $uniqueTypes)) {
                                            // Nếu chưa tồn tại, thêm giá trị vào danh sách và mảng
                                            $uniqueTypes[] = $row["types_room"];
                                            ?>
                                                <option class='view_lop_select-types_room' value="<?php echo $row["types_room"]?>"><?php echo $row["types_room"]?></option>
                                            <?php
                                            }
                                        }
                                    ?>   
                        </select>        
                    </td>
                </tr> 
                
                <tr>
                    <td><label for="lname">Gói tập: </label></td>
                    <td><select class='lop_table-add-input lop_table-add_input22' name='lop_table-add-packages' onchange="getValue()">
                        <option value="">-- Gói Tập --</option>
                        <?php
                                // Mảng để lưu các giá trị đã xuất hiện
                                $uniqueTypes = array();
                                // Duyệt qua các phẩn từ trong bảng
                                while($row = mysqli_fetch_array($query3)){
                                if (!in_array($row["name_packages"], $uniqueTypes)) {
                                    // Nếu chưa tồn tại, thêm giá trị vào danh sách và mảng
                                    $uniqueTypes[] = $row["name_packages"];
                                    ?>
                                        <option class='view_lop_select-packages' value="<?php echo $row["gia_packages"]?>"><?php echo $row["name_packages"]?></option>
                                        <?php
                                    }
                                }
                                ?>   
                        </select>        
                    </td>
                </tr>
                
                <tr>
                    <td><label for="">Số lượng hội viên : </label></td>
                    <td><input type="text" class="lop_table-add-input lop_table-add_input222" onchange="getValue1()" name="lop_table-add-so_luong_hv" placeholder="Số lượng hội viên...">
                    </td>
                </tr>
            
                <tr>
                    <td><label for="">Tên lớp : </label></td>
                    <td><input type="text" class="lop_table-add-input" name="lop_table-add-ten_lop" placeholder="Tên lớp...">
                   </td>
                </tr>

                <tr>
                    <td><label for="">Thời lượng :</label></td>
                    <td><input type="text" class="lop_table-add-input"  name="lop_table-add-thoi_luong" placeholder="Thời lượng...">
                    </td>
                </tr>

                <tr>
                    <td><label for="">Ngày hoạt động : </label></td>
                    <td><input type="text" class="lop_table-add-input" name="lop_table-add-ngay_hoat_dong" placeholder="Ngày...">
                    </td>
                </tr>

                <tr>
                    <td><label for="">Doanh Thu : </label></td>
                    <td><input type="text" class="lop_table-add-input lop_table-add_input2222" name="lop_table-add-doanh_thu" style="background-color:#e3e3e3; border:none; outline:none" placeholder="Doanh Thu..." readonly>
                    </td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <button class="lop_table-add-button lop_table-button_huy" type="button" onclick="">Hủy</button>
                        <button class="lop_table-add-button lop_table-button_them" type="submit" onclick="">Thêm</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="clear"></div>
<script src="../../assets/js/js_nhan_vien/js_ptd/lop_tt.js"></script>