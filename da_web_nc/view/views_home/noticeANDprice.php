<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();   

    // Start the session
    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
    {
?>
<?php
    require "../../controller/controller_notice/PriceDisplay.php"
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/noticeANDprice.css">
    <link rel="stylesheet" href="../assets/css/hoivien.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>

    <div class="tab-bar">
        <button class="fix tab-button active-fix">Thông báo</button>
        <button class="tab-button">Giá cả</button>
        <a href="javascript:history.go(-1)"><i class="fa-solid fa-square-xmark fa-2xl" style="color: #2F528F;"></i></a>
    </div>

    <div class="tab-content">
        <div class="tab-pane active-fix">

            <div class="notice__border">
                <div class="notice__table notice__text notice__table--scroll">
                    <h2>Thông báo! </h2>
                    <?php
                        include_once "../../controller/controller_notice/NoticeDisplay.php"
                    ?>

                </div>

                <form method="POST" action="../../controller/controller_notice/NoticeAdd.php">

                    <div class="notice__table notice__table--insert notice__text">
                        <textarea name="content" id=""
                            style="width: 75vh; height: 99.5%; background-color: #d3cff1;"placeholder="nhập thông báo ở đây"></textarea>
                    </div>

                    <div class="hoivien__AFD">
                        <button class='notice__btn' type="submit" onclick="">Thêm</button>
                    </div>
                    </form>
                

            </div>
        </div>
        
        <div class=" tab-pane">
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        
            <div class="notice__border">
                <table class="price__table price__text">
                <form action="../../controller/controller_notice/PriceUpdate.php" method="post">
                    <tr>
                        <th><h1>Gym</h1></th>
                    </tr>
                    <tr class="p">
                        <th>1 lần: <input type="text" name="1_lan" value="<?php echo $row['1_lan'] ?>"> </th>
                    </tr>
                    <tr class="p">
                        <th>1 tháng: <input type="text" name="1_thang" value="<?php echo $row['1_thang']  ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>3 tháng: <input type="text" name="3_thang" value="<?php echo $row['3_thang'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>6 tháng: <input type="text" name="6_thang" value="<?php echo $row['6_thang'] ?>">   </th>
                    </tr>
                    <tr class="p">
                        <th>1 năm: <input type="text" name="1_nam" value="<?php echo $row['1_nam'] ?> ">  </th>
                    </tr>
                    <tr class="p">
                        <th>2 năm: <input type="text" name="2_nam" value="<?php echo $row['2_nam'] ?>">   </th>
                    </tr>
                    <tr class="p">
                        <th>5 năm: <input type="text" name="5_nam" value="<?php echo $row['5_nam'] ?>">   </th>
                    </tr>
                    <tr class="p">
                        <th>Huấn luyện viên riêng: <input type="text" name="gym_rieng" value=" <?php echo $row['gym_rieng'] ?>"> </th>
                    </tr>
                    <tr class="p">
                        <th></th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Yoga</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <input type="text" name="yoga_basic" value="<?php echo $row['yoga_basic'] ?>"> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <input type="text" name="yoga_average" value="<?php echo $row['yoga_average'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <input type="text" name="yoga_advance" value="<?php echo $row['yoga_advance'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <input type="text" name="yoga_rieng" value="<?php echo $row['yoga_rieng'] ?>">   </th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Aerobic</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <input type="text" name="aerobic_basic" value="<?php echo $row['aerobic_basic'] ?>"> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <input type="text" name="aerobic_average" value="<?php echo $row['aerobic_average'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <input type="text" name="aerobic_advance" value="<?php echo $row['aerobic_advance'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <input type="text" name="aerobic_rieng" value="<?php echo $row['aerobic_rieng'] ?>">   </th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Boxing</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <input type="text" name="boxing_basic" value="<?php echo $row['boxing_basic'] ?>"> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <input type="text" name="boxing_average" value="<?php echo $row['boxing_average'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <input type="text" name="boxing_advance" value="<?php echo $row['boxing_advance'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <input type="text" name="boxing_rieng" value="<?php echo $row['boxing_rieng'] ?>">   </th>
                    </tr>
                </table>

                <table class="price__table price__text">
                    <tr>
                        <th><h1>Swimming</h1></th>
                    </tr>
                    <tr class="p">
                        <th>Lớp basic: <input type="text" name="swimming_basic" value="<?php echo $row['swimming_basic'] ?>"> </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp average: <input type="text" name="swimming_average" value="<?php echo $row['swimming_average'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Lớp Advance: <input type="text" name="swimming_advance" value="<?php echo $row['swimming_advance'] ?>">  </th>
                    </tr>
                    <tr class="p">
                        <th>Kèm riêng: <input type="text" name="swimming_rieng" value="<?php echo $row['swimming_rieng'] ?>">   </th>
                    </tr>
                </table>

                
                <div class="hoivien__AFD">
                        <button class='notice__btn btn__fix' type="submit" onclick="return alert('Sửa thành công')">Sửa</button>
                </div>
                </form>

            </div>
                <?php
       }
        ?>
        </div>
        
    </div>

    

</body>

</html>


<?php 
    }
    else{
        header("Location: ../views_ktc/dang_nhap.php");
    }
?>

<script>
const tabButtons = document.querySelectorAll('.tab-button');
const tabPanes = document.querySelectorAll('.tab-pane');

tabButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        tabButtons.forEach(button => button.classList.remove('active-fix'));
        tabPanes.forEach(pane => pane.classList.remove('active-fix'));

        button.classList.add('active-fix');
        tabPanes[index].classList.add('active-fix');
    });
});
</script>

