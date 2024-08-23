<link rel="stylesheet" href="../../assets/css/tu_dung_do_viewUpdate.css">

<?php
    include_once "../../../controller/connection.php";
    // show data ra
    $tddID = $_REQUEST['tddID'];
    $sql1 = "SELECT * FROM wardrobe where id_wardrobe = $tddID";
    $query1 = mysqli_query($mysqli,$sql1);
    while($rows = mysqli_fetch_array($query1)){
    ?>
<div class='tdd__modal--popup'>
    <div class='tdd__modal__div--popup'>
        <i><b><u class='tdd__modal__div--u'>Cập nhật tủ đựng đồ</u></b></i>
    <div >
    <form action="../../../controller/controller_csvc/tu_dung_do/tdd_update.php?tddID=<?php echo $tddID?>" method="POST">
        <table class='tdd__table--addform'>
            <tr>
                <td><label for="lname">Số tủ:</label></td>
                <td><input class='tdd__table--add_input' type="number" value="<?php echo $rows['so_tu']?>" name="tdd__table--add_so_tu" placeholder="Quantity...."></td>
            </tr>
            <tr>
            <td><label for="lname">Loại tủ:</label></td>
                <td><input class='tdd__table--add_input' type="text" value="<?php echo $rows['loai_tu']?>" name="tdd__table--add_loai_tu" placeholder="Supplier...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Trạng thái:</label></td>
                <td><input class='tdd__table--add_input' type="number" value="<?php echo $rows['trang_thai']?>" name="tdd__table--add_trang_thai" placeholder="Date Added...."></td>
            </tr>
            <tr>
                <td><label for="lname">ID hội viên:</label></td>
                <td><input class='tdd__table--add_input' type="text" name='view_select_id_hv' value="<?php echo $rows['id_hv']?>"></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày bắt đầu:</label></td>
                <td><input class='tdd__table--add_input' type="date" value="<?php echo $rows['time_start']?>" name="tdd__table--add_time_start" placeholder="Guarantee...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày kết thúc:</label></td>
                <td><input class='tdd__table--add_input' type="date" value="<?php echo $rows['time_end']?>" name="tdd__table--add_time_end" placeholder="Maintenance Costs...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ghi chú:</label></td>
                <td><input class='tdd__table--add_input' type="text" value="<?php echo $rows['ghi_chu']?>" name="tdd__table--add_ghi_chu" placeholder="Note...."></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='tdd__table--add-button tdd__table--button_huyUpdate' type="button" onclick="window.location.href='tu_dung_do.php'">Hủy</button>
                    <button class='tdd__table--add-button tdd__table--button_themUpdate' type="Submit"  onclick="" >Cập nhật</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<?php
}?>
<div class="clear"></div>
