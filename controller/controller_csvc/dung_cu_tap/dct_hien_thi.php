
<!-- Kết nối CSDL -->
<?php
include "dct_pages.php";

?>

<!-- Hien thi bang -->

<div class = "dct__div--hienthi">
    <div  class='dct__div--tap'>
        <li class="dct__div dct__div--dct"><a href="../../../view/views_csvc/dung_cu_tap/dung_cu_tap.php">Dụng cụ tập</a></th></li>
        <li class="dct__div dct__div--tdd"><a href="../../../view/views_csvc/tu_dung_do/tu_dung_do.php">Tủ đựng đồ</a></li>
        
</div>
    <table class="dct__table--hienthi">
        <tr class="dct__table_row--hienthi dct__table--Tieu_de" style="background-color: #4472C8">
            <th>ID Máy</th>
            <th>TÊN</th>
            <th>SỐ LƯỢNG</th>
            <th>NHÀ CUNG CẤP</th>
            <th>NGÀY NHẬP</th>
            <th>GIÁ NHẬP</th>
            <th>BẢO TRÌ</th>
            <th>BẢO HÀNH</th>
            <th>CHI PHÍ BẢO TRÌ</th>
            <th>GHI CHÚ</th>
            <th class="dct__table_row--tieuDe_Xoa" style="display:none; text-align: center;">XÓA</th>
            <th class="dct__table_row--tieuDe_update" style="display:none; text-align: center;">UPDATE</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr class='dct__table_row--hienthi hightLight'>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["id_may"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["ten"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["so_luong"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["nha_cung_cap"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["ngay_nhap"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["gia_nhap"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["bao_tri"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["bao_hanh"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["chi_phi_bao_tri"]?></td>
            <td  class="dct__table_td--hienthi-td"><?php echo $row["ghi_chu"]?></td>
            <td class="dct__table_td--hienthi-td dct__table_td--hienthi-td-xoa" style="display:none; text-align: center;"><a onclick="return confirm('Are u sure about that ?')" href="../../../controller/controller_csvc/dung_cu_tap/dct_delete.php?dctID=<?php echo $row["id_may"]?>"><i class="fa-sharp fa-solid fa-delete-left"></i></a></td>
            <td class="dct__table_td--hienthi-td dct__table_td--hienthi-td-update" style="display:none; text-align: center;"><a href="view_update_dct_popup.php?dctID=<?php echo $row["id_may"]?>"><i class="fa-solid fa-wrench"></i></a></td>
        <?php
       }
        ?>    
    </table>
    <!-- tạo giao diện nút thêm, sửa, xóa -->
    <div class='dct__div--chua_button'>
    <button class='dct__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='dct__div--button js-sua' type="button" onclick="">Cập nhập</button>
    <button class='dct__div--button js-xoa dct__div--button_xoa' type="button" onclick="">Xóa</button>    
    </div>

</div>

<?php
$mysqli -> close();
?>
