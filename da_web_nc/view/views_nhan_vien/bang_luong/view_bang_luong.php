
<?php 
    include_once "../../../controller/connection.php";
    $sqlNv = "SELECT * FROM tbl_nhan_vien";
    $sqlBl = "SELECT * FROM luong";

    $queryNv = mysqli_query($mysqli,$sqlNv);
    $queryBl = mysqli_query($mysqli,$sqlBl);

?> 

<div class='bl__modal--popup '>
    <div class='bl__modal__div--popup'>
        <i><b><u class='bl__modal__div--u'>Thêm lương</u></b></i>
    <div >
    <form action="../../../controller/controller_nhan_vien/bang_luong/bl_add.php" method="POST">
        <table class='bl__table--addform'>
            <tr>
                <td><label for="fname">IDNV:</label></td>
                <td>
                    <!-- <input class='bl__table--add_input' type="text"  name="bl__table--add_idnv" placeholder="IDNV...."> -->
                    <select name="bl__table--add_idnv">
                        <option value="">-- Mã nhân viên --</option>
                    <?php
                    while($rowsNv = mysqli_fetch_array($queryNv)) 
                    {
                        // Đặt con trỏ về lại đầu bảng lương
                        mysqli_data_seek($queryBl,0);
                        // Dùng để đếm xem có thằng nào giống không
                        $count = 0;
                        while($rowsBl = mysqli_fetch_array($queryBl))
                        {
                            if($rowsNv['id_nv']==$rowsBl['id_nv'])
                            {
                                $count++;
                            }
                        }
                        // Nếu count == 0 => không tồn tại id này ở bảng lương
                        if(!$count)
                        {
                                ?>
                                <option value="<?php echo $rowsNv['id_nv']?>"><?php echo $rowsNv['id_nv']?></option>
                                <?php
                        }
                    }
                    ?>
                    </select>
                    <!-- <button class='' type="Submit"  onclick="" >Thêm</button> -->
                </td>
            </tr>
            <!-- <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_ten" ><?php //echo $_SESSION['bl_ktra']?></td>
            </tr> -->
            <tr>
                <td><label for="lname">Time Start:</label></td>
                <td><input class='bl__table--add_input' type="date"  name="bl__table--add_time_start" placeholder="Time Start...."></td>
            </tr>
            <tr>
            <td><label for="lname">Số công:</label></td>
                <td><input class='bl__table--add_input22' type="text"  name="bl__table--add_so_cong" onchange="getValue1()" placeholder="Số công...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Lương trên công:</label></td>
                <td><input class='bl__table--add_input222' type="text"  name="bl__table--add_luong_tren_cong" onchange="getValue1()" placeholder="Lương trên công...."></td>
            </tr>
            <tr>
                <td><label for="lname">Lương:</label></td>
                <td><input class='bl__table--add_input1 bl__table--add_input2222' type="text"  name="bl__table--add_luong" readonly placeholder="Lương...." onchange="getValue()"></td>
            </tr>
            <tr>
                <td><label for="lname">Trạng thái:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_trang_thai" placeholder="Trạng thái...."></td>
            </tr>

            <tr>
                <td colspan='2'>
                    <button class='bl__table--add-button bl__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='bl__table--add-button bl__table--button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>
<script src="../../assets/js/js_nhan_vien/js_bang_luong/bl_tinh_tien.js"></script>

