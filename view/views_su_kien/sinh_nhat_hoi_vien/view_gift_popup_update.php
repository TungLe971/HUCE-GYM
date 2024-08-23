<link rel="stylesheet" href="../../assets/css/sinh_nhat_hoi_vien_viewUpdate.css">

<?php
    include_once "../../../controller/connection.php";
    $id_gift = $_REQUEST['idGift'];
    $sql = "SELECT * FROM tbl_qua_tang where id_gift = $id_gift";
    $query = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($query)){
        $urlImage = $rows['image'];
    ?>
<div class='view_gift__modal--popup' align='center'>
    <div class='view_gift__modal__div--popupUpdate'>
        <i><b><u class='view_gift__modal__div--u'>Cập nhật quà tặng</u></b></i>
    <div >
        <img src="<?php echo $urlImage?>" alt="" class = "view_gift__modal__div--popupUpdate--loadAnh">
    <form action="../../../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_update_gift.php?id_gift=<?php echo $id_gift?>&urlImage=<?php echo $urlImage?>" method="POST" enctype="multipart/form-data">
        <table class='view_gift__table--addform'>
            <tr>
                <td><label for="lname">Image:</label></td>
                <td><input class='view_gift__table--add_input view_gift__table--add_input-file' type="file"  name="view_gift__table--add_image" value="<?php echo $rows['image']?>"></td>
            </tr>
            <tr>
            <td><label for="lname">Tên:</label></td>
                <td><input class='view_gift__table--add_input' type="text"  name="view_gift__table--add_ten" value="<?php echo $rows['name']?>" placeholder="Tên quà tặng...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Điểm:</label></td>
                <td><input class='view_gift__table--add_input' type="text"  name="view_gift__table--add_diem" value="<?php echo $rows['diem']?>" placeholder="Giá...."></td>
            </tr>
            <tr>
                <td><label for="lname">Số lượng:</label></td>
                <td><input class='view_gift__table--add_input' type="text"  name="view_gift__table--add_so_luong" value="<?php echo $rows['so_luong']?>" placeholder="Số lượng tồn...."></td>
            </tr>                    
            <tr>
                <td colspan='2'>
                    <button class='view_gift__table--add-button view_giftUpdate__table--button_huy' type="button" onclick="window.location.href='sk_sinh_nhat_hoi_vien.php'">Hủy</button>
                    <button class='view_gift__table--add-button view_giftUpdate__table--button_them' type="Submit" onclick="" >Update</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>

<?php     }?>
<div class="clear"></div>
<script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_loadAnh.js"></script>



