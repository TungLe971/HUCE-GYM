<!-- Kết nối CSDL -->
<?php
include "snhv_pages.php";
?>
<!-- Hien thi bang -->

<div class="snhv__div--hienthi">
    <div class="snhv__div--hienthi--bocHoiVien">
        <div class="snhv__div--chua-hien-thi">
            <nav class="sk__menu">
                <ul class="sk__menu-header">
                    <li><a style='background-color:#a1b8e1' href="../su_kien_khuyen_mai/sk_khuyen_mai_hoi_vien.php">Sự
                            kiện khuyến mãi</a></li>
                    <li><a href="../sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php">Sinh nhật hội viên</a></li>
                    <li><a style='background-color:#a1b8e1' href="../sk_tich_diem/sk_tich_diem.php">Tích điểm</a></li>
                </ul>
            </nav>
            <!-- <div  class='snhv__div--tap'>
        <li class="snhv__icon_back"><a class="snhv-a" href="nhanvien.php"><i class="fa-solid fa-arrow-left"></i></a></li>
        <li class="snhv__div snhv__div--skkm"><a >Sự kiện khuyến mại</a></th></li>
        <li class="snhv__div snhv__div--snhv"><a >Sinh nhật hội viên</a></th></li>
        <li class="snhv__div snhv__div--tichDiem"><a >Tích điểm</a></th></li>
        
    </div> -->
            <!-- <div class="snhv__div--thanhngan"></div> -->
            <div class="snhv__div--chuatable">
                <table class="snhv__table--hienthi">
                    <tr class="snhv__table_row--hienthi snhv__table--Tieu_de" style="background-color: #4472C8">
                        <th>ID HV</th>
                        <th>Tên HV</th>
                        <th>Điểm tích lũy</th>
                        <th>Ngày sinh</th>
                        <th>Mã quà tặng</th>
                        <th>Trạng thái</th>
                    </tr>
                    <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
                    <tr align="center" class='snhv__table_row--hienthi'>
                        <td class="snhv__table_td--hienthi-td"><?php echo $row["id_hv"]?></td>
                        <td class="snhv__table_td--hienthi-td"><?php echo $row["ten_hv"]?></td>
                        <td class="snhv__table_td--hienthi-td"><?php echo $row["diem_tich_luy"]?></td>
                        <td class="snhv__table_td--hienthi-td"><?php echo $row["ngay_sinh"]?></td>
                        <td class="snhv__table_td--hienthi-td"><?php echo $row["id_gift"]?></td>
                        <td class="snhv__table_td--hienthi-td"><?php 
            if($row["trang_thai"]==1)
            {
                echo "Đã gửi quà";
            }
            else{echo "Chưa gửi quà";}?></td>
                        <?php
       }
        ?>
                </table>
                <form class="snhv__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <center>
                        <?php
    echo $listPages;
    ?>
                        </center>
                    </form>
        <!-- Báo lỗi gift ko tồn tại -->
        <?php
    if(isset($_SESSION['errorMaGift'])){
        echo $_SESSION['errorMaGift'];
        unset($_SESSION['errorMaGift']);
    }
    ?>
                </div>
        </div>


        <div class="snhv__div--hienthi--bocQuaTang">
            <div class="snhv__div--quatang">
                <?php 
                $sqlquatang = "Select * from tbl_qua_tang";
                $queryquatang = mysqli_query($mysqli,$sqlquatang);
                while($quatangs = mysqli_fetch_array($queryquatang))
                {
        ?>
                <div class="snhv__div__div_quatang">
                    <div class="snhv__div__div_quatang--image">
                        <img src="<?php echo $quatangs['image']?>" class="snhv__div__div_quatang__form--showimg">
                        <!-- <input class="snhv__div__div_quatang__form--chooseimg" type="file" accept="image/*"> -->

                    </div>
                    <div class="snhv__div__div_quatang-baoDong">
                        <div class="snhv__div--showGift">
                            <!-- <form action="../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_delete_gift.php" class="snhv__form--gift" method="POST"> -->
                            <label for="">ID:</label>
                            <input class="snhv__div__input--gift" type="text" value="<?php echo $quatangs['id_gift']?>"
                                disabled style="background-color:#b4c7E7;border:#b4c7E7">
                            <a onclick="return confirm('Are u sure about that ?')" class="shnv__div__a-xoaGift"
                                href="../../../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_delete_gift.php?idGift=<?php echo $quatangs['id_gift']?>">Xóa</a>
                            <a class="shnv__div__a-updateGift"
                                href="../../../view/views_su_kien/sinh_nhat_hoi_vien/view_gift_popup_update.php?idGift=<?php echo $quatangs['id_gift']?>">Sửa</a>
                        </div>
                        <div class="snhv__div--showGift">
                            <label for="">Tên:</label>
                            <input
                                class="snhv__div__input--gift snhv__div__input--gift--name<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['name']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="snhv__div--showGift">
                            <label for="">Điểm cần:</label>
                            <input
                                class="snhv__div__input--gift snhv__div__input--gift--diem<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['diem']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="snhv__div--showGift">
                            <label for="">Số lượng tồn:</label>
                            <input
                                class="snhv__div__input--gift snhv__div__input--gift--so_luong<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['so_luong']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        </form>
                    </div>
                </div>
                <?php
        }?>
            </div>
        </div>
        <!-- <div class="snhv__div--thanhDoc"></div> -->
        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <div class='snhv__div--chua_button-all'>

            <div class='snhv__div--chua_button'>
                <div class='snhv__div--chua_button--sua-gui'>
                    <div>

                        <button class='snhv__div--button js-guiSMS' type="button" onclick="">Gửi SMS <i
                                class="fa-solid fa-envelope"></i></button>
                    </div>
                    <button class='snhv__div--button js-sua' type="button" onclick="">Sửa</button>

                </div>
                <form class="snhv__form--sendDate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                    method="POST">

                    <input class='snhv__div--button js-chonNgay' name="snhv_chonNgay" type="date">
                    <button class="snhv__table--button_guiDate" type="Submit" onclick="">Search</button>


                </form>
            </div>

            <div class='snhv__div--chua_button-gift'>
                <!-- <div class="snhv__div--search--sort">
    <form class="snhv__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="snhv__form__div--search">
            <button class='snhv__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='snhv__input--search' type="text" name="snhv__input--search" placeholder="Search....">
        </div>
    </form>
    </div> -->
                <button class='snhv__div--button js-them' type="button" onclick="">Thêm</button>


            </div>

        </div>

    </div>


    <?php
$mysqli -> close();
?>
    <script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_gioi_han_gift.js"></script>
    <script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_sx_gift.js"></script>