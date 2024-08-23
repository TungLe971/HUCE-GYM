    <?php
    include_once "header.php";
    
    ?>
    <?php 
        //Start the session
        if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý")
        {
    ?>

    <link rel="stylesheet" href="../assets/css/the.css">

    <?php
    include_once "../../controller/controller_the/the_hien_thi.php"
    ?>

    <div class='the_div-chua_button'>
        <button class='the_div-button js-chi_tiet' type="button" onclick="">Chi Tiết</button> 
        <button class='the_div-button js-them' type="button" onclick="">Thêm</button>
        <button class='the_div-button js-sua' type="button" onclick="">Sửa</button>
        <button class='the_div-button js-xoa the_div-button_xoa' type="button" onclick="">Xóa</button>    
    </div>

    <!-- tạo giao diện sắp xếp -->
    <?php
    include_once "../../controller/controller_the/the_hien_thi.php"
    ?>
    <div> 
        <select id="the_select">
            <option value="">Sắp xếp</option>
            <option value="1">Tên từ A->Z</option>
            <option value="2">Tên từ Z->A</option>
            <option value="3">Tiền tăng dần</option>
            <option value="4">Tiền giảm dần</option>
            <option value="999">Như phút ban đầu</option>
        </select>
        <script>
        document.getElementById('the_select').addEventListener('change', function() {
            var selectedValue = this.value;
            window.location.assign('?sort=' + selectedValue);
        });
    </script>
    </div>

    
    <?php include_once "view_the.php" ?>

    <?php 
        }
        else{
            header("Location: ../dang_nhap.php");
        }
        ?>
        
    <script src = "/da_web_nc/view/assets/js/js_the/the_add.js"></script>

    <script src = "/da_web_nc/view/assets/js/js_the/the_delete.js" ></script>

    <script src = "/da_web_nc/view/assets/js/js_the/the_sua.js" ></script>
    </body>
    
</html>