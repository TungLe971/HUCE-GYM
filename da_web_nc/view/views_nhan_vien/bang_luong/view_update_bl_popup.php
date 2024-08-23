<link rel="stylesheet" href="../../assets/css/bang_luong_viewUpdate.css">

<?php
    include_once "../../../controller/connection.php";
    $blID = $_REQUEST['blID'];
    $sql = "SELECT * FROM luong where id_nv = $blID";
    $query = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($query)){
    ?>

<div class='bl__modal--popup '>
    <div class='bl__modal__div--popup'>
        <i><b><u class='bl__modal__div--u'>Cập nhật bảng lương</u></b></i>
    <div >
    <form action="../../../controller/controller_nhan_vien/bang_luong/bl_update.php?blID=<?php echo $blID?>" method="POST">
        <table class='bl__table--addform'>
            <tr>
                <td><label for="fname">IDNV:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_idnv" value="<?php echo $rows['id_nv']?>" placeholder="IDNV....">
                </td>
            </tr>
           
            <tr>
                <td><label for="lname">Time Start:</label></td>
                <td><input class='bl__table--add_input' type="date"  name="bl__table--add_time_start" value="<?php echo $rows['time_start']?>" placeholder="Time Start...."></td>
            </tr>
            <tr>
            <td><label for="lname">Số công:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_so_cong" value="<?php echo $rows['so_cong']?>" placeholder="Số công...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Lương trên công:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_luong_tren_cong" value="<?php echo $rows['luong_tren_cong']?>" placeholder="Lương trên công...."></td>
            </tr>
            <tr>
                <td><label for="lname">Lương:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_luong" value="<?php echo $rows['luong']?>" placeholder="Lương...."></td>
            </tr>
            <tr>
                <td><label for="lname">Trạng thái:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_trang_thai" value="<?php echo $rows['trang_thai']?>" placeholder="Trạng thái...."></td>
            </tr>

            <tr>
                <td colspan='2'>
                    <button class='bl__table--add-button bl__table--button_huyUpdate' type="button" onclick="window.location.href='nv_bang_luong.php'">Hủy</button>
                    <button class='bl__table--add-button bl__table--button_themUpdate' type="Submit"  onclick="" >Update</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<?php
     }
?>
<div class="clear"></div>