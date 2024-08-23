<!-- Kết nối CSDL -->
<?php
    include_once "../../controller/connection.php";

?>

<link rel="stylesheet" href="../assets/css/the.css">

<!-- Hien thi bang -->
<br>
<div class="the_ten-hienthi">
   <li><h2 class = "the_ten1">Thẻ tập</h2></li>
   <li><div class = "the_ten">     
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input class="the_ten-up" type="text" placeholder="Tìm kiếm..." name="cardsearch" height="50px">
            <i class="fa-sharp fa-solid fa-magnifying-glass the_search-input-icon"></i>
            </form>
        </div>
    </li>    
</div>

<div class='the_div-fixed'>
    <div class="the_div-hienthi">

    <table class="the_table-hienthi">        
            <tr class='the_table_row-hienthi the_table-Tieu_de' style="background-color: #4472C8">
                <th>Card ID</th>
                <th id="sort-ten">Họ và Tên</th>
                <th id="sort-ten">Lớp</th>
                <th id="sort-tien">Thành Tiền</th>
                <th id="sort-status">Trạng Thái</th>
            </tr>
            <tbody id="the_table_body">
        <?php
        

    // Câu truy vấn SQL dựa trên giá trị sắp xếp
            // định nghĩa biến $sort để sắp xếp
            $sort = isset($_GET['sort']) ? $_GET['sort'] : '';

            // định nghĩa biến $keyword để tìm kiếm
            $keyword = isset($_POST['cardsearch']) ? $_POST['cardsearch'] : "";
            
            // hiện thị tìm kiếm
            $postb =  "WHERE card_id LIKE '%$keyword%' OR name_hv LIKE '%$keyword%' OR status LIKE '%$keyword%'";
            
            // Định nghĩa biến $p
            $p = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            
            // Số lượng dữ liệu hiển thị trên mỗi trang
            $limit = 11;
            
            // Tính toán vị trí bắt đầu của dữ liệu trên trang hiện tại
            $start = ($p - 1) * $limit;
            
            // Câu truy vấn SQL
            if ($sort == '1') {
                $sqlthe1 = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY name_hv ASC LIMIT $start, $limit";
            } elseif ($sort == '2') {
                $sqlthe1 = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY name_hv DESC LIMIT $start, $limit";
            } elseif ($sort == '3') {
                $sqlthe1 = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY total_money ASC LIMIT $start, $limit";
            } elseif ($sort == '4') {
                $sqlthe1 = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv ORDER BY total_money DESC LIMIT $start, $limit";
            } else {
                $sqlthe1 = "SELECT * FROM card Inner Join tbl_hoi_vien On card.id_hv = tbl_hoi_vien.id_hv $postb ORDER BY card_id DESC LIMIT $start, $limit";
            }

            // Thực thi câu truy vấn
            $query = mysqli_query($mysqli,$sqlthe1);

            // Duyệt qua các phần tử trong bảng
            while($row = mysqli_fetch_array($query))
        {
        ?>
        <tr class="the_table_row-hienthi">
            <td class ="the_td_hien_thi"><?php echo $row["card_id"]?></td>
            <td class ="the_td_hien_thi"><?php echo $row["name_hv"]?></td>
            <td class ="the_td_hien_thi"><?php echo $row["types_room"]?></td>
            <td class ="the_td_hien_thi"><?php echo $row["total_money"]?></td>
            <td class ="the_td_hien_thi">
                <?php 
                    if ($row["status"] == 1) {
                        echo "Đang hoạt động";  }
                    else {
                        echo "Không hoạt động";  }
                ?>
            </td>
        <?php
       }
       ?>
        </tbody>        
    </table>

    <?php
        // Tính toán và hiển thị phân trang
        $sql_count = "SELECT COUNT(*) as count FROM card INNER JOIN tbl_hoi_vien ON card.id_hv = tbl_hoi_vien.id_hv $postb";    
        $result_count = mysqli_query($mysqli, $sql_count);
        $row_count = mysqli_fetch_array($result_count);
        $total = $row_count["count"];                    // Tổng số dữ liệu
        $page_count = ceil($total / $limit);            // Tổng số trang
        ?><br>
    <center class = "the_page-hienthi" >
        <?php
            for ($i = 1; $i <= $page_count; $i++) {
                if ($i == $p) {
                    echo " " . $i . " ";
                } else {
                    echo ' <a href="?page=' . $i  .'&sort=' . $sort . '&cardsearch=' . $keyword .'">' . $i . '</a> ';
                }
            }

            ?>
    </center>
</div>


<?php

    if(isset($_REQUEST['hien_thi'])){
        $card_id = $_REQUEST['hien_thi'];
    }
    else{
        $card_id = "";
    }
    $sqldb = "Select * FROM card inner JOin tbl_hoi_vien on card.id_hv = tbl_hoi_vien.id_hv WHERE card_id = '".$card_id."'";
    $querydb = mysqli_query($mysqli,$sqldb);
    $rowdb = mysqli_fetch_array($querydb);
?>
<div class = "the_div-hienthi1" > 

    <table class="the_table-hienthi1" style="border: 3px solid blue; white-space: nowrap;">        
          <tr><th colspan = "2" style="font-size: 18px;">Thông tin chi tiết thẻ</th></tr>
          <tr><tr>
          <tr><td style="padding-right: 30px;">Họ và Tên: </td><td class = the_gach_chan><input class="the_box" type="text_the_name_hv" value="<?php if(isset($rowdb['name_hv'])){echo $rowdb['name_hv'];}?>"  name="input_theten" style="border: none; outline:none;" readonly></td></tr>
          <tr><td>ID hội viên: </td><td class = the_gach_chan><input class="the_box" type="text_the_id_hv" name="input_the_id_hv" value="<?php if(isset($rowdb['id_hv'])){ echo $rowdb['id_hv']; }?>" style="border: none; outline:none; "></td></tr>  
          <tr><td>Card ID: </td><td class = the_gach_chan><input class="the_box" type="text_card_id" name="input_the_card_id" value="<?php if(isset($card_id)){ echo $card_id; }?>" style="border: none; outline:none;"></td></tr>
          <tr><td>ID nhân viên: </td><td class = the_gach_chan><input class="the_box" type="text_id_nv" name="input_the_id_nv" value="<?php if(isset($rowdb['id_nv'])){echo $rowdb['id_nv'];}?>" style="border: none; outline:none; "></td></tr>
    </table>

    <div class="the_table-hienthi2">
    <table>
        <div class="the_box_types_room1" style="border: 2px solid blue;">
            <input type="checkbox" id="vehicle1" class="vehicle1" name="vehicle1" value="Gym" <?php if(isset($rowdb['types_room']) && strpos($rowdb['types_room'], 'Gym') !== false) echo 'checked'; ?>>
            <label for="vehicle1">Gym</label><br><br>
            <input type="checkbox" id="vehicle2" class="vehicle2" name="vehicle2" value="Yoga" <?php if(isset($rowdb['types_room']) && strpos($rowdb['types_room'], 'Yoga') !== false) echo 'checked'; ?>>
            <label for="vehicle2">Yoga</label><br><br>
            <input type="checkbox" id="vehicle3" class="vehicle3" name="vehicle3" value="Aerobic" <?php if(isset($rowdb['types_room']) && strpos($rowdb['types_room'], 'Aerobic') !== false) echo 'checked'; ?>>
            <label for="vehicle3">Aerobic</label><br>
        </div>

        <div class="the_box_types_room2" style="border: 2px solid blue;">
            <input type="checkbox" id="vehicle4" class="vehicle4" name="vehicle4" value="Boxing" <?php if(isset($rowdb['types_room']) && strpos($rowdb['types_room'], 'Boxing') !== false) echo 'checked'; ?>>
            <label for="vehicle4">Boxing</label><br><br>
            <input type="checkbox" id="vehicle5" class="vehicle5" name="vehicle5" value="Swimming" <?php if(isset($rowdb['types_room']) && strpos($rowdb['types_room'], 'Swimming') !== false) echo 'checked'; ?>>
            <label for="vehicle5">Swimming</label><br><br>
            <input type="checkbox" id="vehicle6" class="vehicle6" name="vehicle6" value="Khac" <?php if(isset($rowdb['types_room']) && strpos($rowdb['types_room'], 'Khac') !== false) echo 'checked'; ?>>
            <label for="vehicle6">Khác</label><br>
        </div>
    </table>
</div>
        
    <div class="the_table-hienthi3" style="border: 3px solid blue;"> 

        <table style="white-space: nowrap;">
            <tr><td ><label>Gói tập: </label></td>
                <td class = the_gach_chan><input class="the_box" type="text" name="input1"  value="<?php if(isset($rowdb['packages'])){echo $rowdb['packages'];}?>" style="border: none; outline:none;"></td></tr>
            <tr><td><label>Số lượng: </label></td>
                <td class = the_gach_chan><input class="the_box" type="text" name="input2"  value="<?php if(isset($rowdb['quantity'])){echo $rowdb['quantity'];}?>" style="border: none; outline: none;"></td></tr>
            <tr><td><label>Ngày bắt đầu: </label></td>
                <td class = the_gach_chan><input class="the_box1" type="date" name="input3"  value="<?php if (isset($rowdb['time_start'])) { echo date('Y-m-d', strtotime($rowdb['time_start'])); } ?>" style="border: none; outline: none;"></td></tr>
            <tr><td><label>Ngày kết thúc: </label></td>
                <td class = the_gach_chan><input class="the_box1" type="date" name="input4"  value="<?php if (isset($rowdb['time_end'])) { echo date('Y-m-d', strtotime($rowdb['time_end'])); } ?>" style="border: none; outline: none;"></td></tr>
            <tr><td><label>Thành tiền: </label></td>
                <td class = the_gach_chan><input class="the_box" type="text" name="input5"  value="<?php if(isset($rowdb['total_money'])){echo $rowdb['total_money'];}?>" style="border: none; outline: none;"></td></tr>
            <tr><td style="padding-right: 30px;"><label>Trạng thái hoạt động: </label></td>
                <td class = the_gach_chan><input class="the_box" type="text" name="input6" 
                value="<?php if(isset($rowdb['status'])){
                    if ($rowdb["status"] == 1) {
                        echo "Đang hoạt động";  }
                    else {
                        echo "Không hoạt động";  }} ?>" style="border: none; outline: none;"></td></tr>   
        
        </table></div>
    </div>    
</div>