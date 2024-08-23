<?php
    include_once "../../controller/connection.php";
    $sql = "SELECT * FROM tbl_nhan_vien";
    $query = mysqli_query($mysqli,$sql);
    $sql1 = "SELECT * FROM tbl_hoi_vien ";
    $query1 = mysqli_query($mysqli,$sql1);
    $sql2 = "SELECT * FROM tbl_packages";
    $query2 = mysqli_query($mysqli,$sql2);
    $sql3 = "SELECT * FROM tbl_packages";
    $query3 = mysqli_query($mysqli,$sql3);
    $sql4 = "SELECT * FROM card ";
    $query4 = mysqli_query($mysqli,$sql4);
    ?>
<div class='the_modal-popup'>
    <div class='the_modal_div-popup'>
        <i><b><u class='the_modal_div-u'>Tạo Thẻ Mới</u></b></i>
    <div >
    <form action="../../controller/controller_the/the_add.php" method="POST">
        <table class='the_table-addform'>
            <tr>
                <td><label for="lname">ID hội viên:</label></td>
                <td>
                    <select class='the_table-add_input1' name='the_table-add_id_hv'>
                        <option value="">-- ID member --</option>
                            <?php
                            while($rows1 = mysqli_fetch_array($query1)) 
                            {
                                // Đặt con trỏ về lại đầu bảng lương
                                mysqli_data_seek($query4,0);
                                // Dùng để đếm xem có thằng nào giống không
                                $count = 0;
                                while($rows4 = mysqli_fetch_array($query4))
                                {
                                    if($rows1['id_hv']==$rows4['id_hv'])
                                    {
                                        $count++;
                                    }
                                }
                                // Nếu count == 0 => không tồn tại id này ở bảng lương
                                if(!$count)
                                {
                            // Duyệt qua các phẩn từ trong bảng
                            
                                ?>
                                    <option class='view_the_select-id_hv' value="<?php echo $rows1["id_hv"]?>"><?php echo $rows1["id_hv"]?></option>
                                <?php
                                }}
                                
                                ?>  
                             
                    </select>                      
                </td>
                <!-- <td><input class='the_table-add_input' type="text"  name="the_table-add_id_hv" placeholder="ID member...."></td> -->
            </tr>

            <!-- <tr>
                <td><label for="lname">Card ID: </label></td>
                <td><input class='the_table-add_input' type="text"  name="the_table-add_card_id" placeholder="ID card...."></td>
            </tr> -->
            
            <tr>
                <td><label for="lname">ID nhân viên:</label></td>
                <td>
                    <select class='the_table-add_input1' name='the_table-add_id_nv'>
                        <option value="">-- ID staff --</option>
                            <?php
                            // Duyệt qua các phẩn từ trong bảng
                            while($row = mysqli_fetch_array($query))
                                {?>
                                    <option class='view_the_select-id_nv' value="<?php echo $row["id_nv"]?>"><?php echo $row["id_nv"]?></option>
                                <?php
                                }
                                ?>   
                    </select>
                            
                </td>
                <!-- <td><input class='the_table-add_input' type="text"  name="the_table-add_id_nv" placeholder="ID staff...."></td> -->
            </tr>
        
            <tr>
            <td><label for="lname">Lớp: </label></td>
            <td><select class='the_table-add_input1' name='the_table-add_lop'>
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
                                        <option class='view_the_select-types_room' value="<?php echo $row["types_room"]?>"><?php echo $row["types_room"]?></option>
                                    <?php
                                    }
                                }
                            ?>   
                    </select>        
                </td>
            </tr> 

            <tr>
                <td><label for="lname">Gói tập: </label></td>
                <td><select class='the_table-add_input1 the_table-add_input22' name='the_table-add_packages' onchange="getValue()">
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
                                        <option class='view_the_select-packages' value="<?php echo $row["gia_packages"]?>"><?php echo $row["name_packages"]?></option>
                                    <?php
                                    }
                                }
                            ?>   
                    </select>        
                </td>
            </tr>
            
            <tr>
            <td><label for="lname">Số lượng: </label></td>
                <td><input class='the_table-add_input1 the_table-add_input222' type="number" onchange="getValue1()" name="the_table-add_so_luong" placeholder="Quantity...." ></td>
            </tr>
            
            <tr>
                <td><label for="lname">Ngày bắt đầu:</label></td>
                <td><input class='the_table-add_input1' type="date"  name="the_table-add_ngay_bat_dau" placeholder="Date start...."></td>
            </tr>

            <tr>
                <td><label for="lname">Ngày kết thúc:</label></td>
                <td><input class='the_table-add_input1' type="date"  name="the_table-add_ngay_ket_thuc" placeholder="Date end...."></td>
            </tr>

            <tr>
                <td><label for="lname">Thành tiền: </label></td>
                <td><input class='the_table-add_input1 the_table-add_input2222' type="text"  name="the_table-add_thanh_tien" placeholder="Sum money...." readonly style="background-color:#e3e3e3; border:none; outline:none"></td>
            </tr>
            
            <tr>
                <td colspan='2'>
                    <button class='the_table-add-button the_table-button_huy' type="button" onclick="">Hủy</button>
                    <button class='the_table-add-button the_table-button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>

        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>
<script src="../assets/js/js_the/the_tinh_tien.js"></script>