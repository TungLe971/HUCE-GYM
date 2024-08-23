<?php 
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
// remove all session variables
//session_unset();
if (isset($_SESSION['chuc_vu']))
{
    session_destroy();
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/khach_trang_chu.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <title>HUCE GYM NHÓM 6</title>
</head>

<body>
    <header>
        <div class="header--title">
            <div class="ktc_header__div--logo">
                <li class="ktc_header__li--logo"><img class="ktc_header__img--logo" src="../assets/img/logo.png"
                        alt="LOGO"></li>
            </div>
            <div class="ktc_header__div">
                <li class="ktc_header__li"><a class="ktc_header__a" href="#ktc_hoi_vien">Hội viên</a></li>               
                <li class="ktc_header__li"><a class="ktc_header__a" href="#ktc_co_so_vat_chat">Cơ sở vật chất</a></li>
                <li class="ktc_header__li"><a class="ktc_header__a" href="#ktc_goi_tap">Gói tập</a></li>
                <li class="ktc_header__li"><a class="ktc_header__a" href="#footer">Liên hệ</a></li>
                <li class="ktc_header__li ktc_header__li--dang_ky js--dang_ky"><a
                        class="ktc_header__a ktc_header__a--dang_ky" href="dang_ky.php">Đăng ký</a></li>
                <li class="ktc_header__li ktc_header__li--dang_nhap js--dang_nhap"><a
                        class="ktc_header__a ktc_header__a--dang_nhap" href="dang_nhap.php">Đăng nhập</a></li>
            </div>
        </div>
    </header>
    <!-- <div class="ktc__div--dang_nhap">
            
        </div> -->
    <div class="ktc--dem_header">
        
    </div>
    <div class="ktc__div--slider--bao_quanh">
    <div class="ktc__div--slider--left"><i class="fa-solid fa-less-than ktc__div--slider--left--arrow"></i></div>
    <div class="ktc__div--slider">
        <img class="ktc__div--slider__img" src="../assets/img/coach-là-phải-chuẩn-1920x829.jpg" alt="GYM Image">
    </div>
    <div class="ktc__div--slider">
        <img class="ktc__div--slider__img" src="../assets/img/kéo-tạ-kéo-sức-hút-1920x829.jpg" alt="GYM Image">
    </div>
    <div class="ktc__div--slider">
        <img class="ktc__div--slider__img" src="../assets/img/tập-luyện-đúng-kết-quả-thật-1920x829.jpg" alt="GYM Image">
    </div>
    <div class="ktc__div--slider">
        <img class="ktc__div--slider__img" src="../assets/img/web-banner-WCL.jpg" alt="GYM Image">
    </div>
    <div class="ktc__div--slider--right"><i class="fa-solid fa-greater-than ktc__div--slider--right--arrow"></i></div>
    </div>
    <div id="ktc_hoi_vien">
        <center>
            <p id="ktc_hoi_vien__p" class="ktc_hoi_vien__p">NGƯỜI THỰC - KẾT QUẢ THỰC</p>
        </center>
        <div class="ktc_hoi_vien__div">
            <img class="ktc_hoi_vien__div__img" src="../assets/img/ktc_hoivien1.jpg" alt="GYM Image">
            <img class="ktc_hoi_vien__div__img" src="../assets/img/ktc_hoivien2.jpg" alt="GYM Image">
            <img class="ktc_hoi_vien__div__img" src="../assets/img/ktc_hoivien3.jpg" alt="GYM Image">
            <img class="ktc_hoi_vien__div__img" src="../assets/img/ktc_hoivien4.jpg" alt="GYM Image">
        </div>
        <div class="ktc_hoi_vien__div--thong_so_so">
            <div class="ktc_hoi_vien__div--thong_so--yellow">
                <center>
                    <h2 class="ktc_hoi_vien__div--thong_so--sl">4206</h2>
                    <h2 class="ktc_hoi_vien__div--thong_so--ten">HỘI VIÊN</h2>
                </center>
            </div>
            <div class="ktc_hoi_vien__div--thong_so--white">
                <center>
                    <h2 class="ktc_hoi_vien__div--thong_so--sl">3</h2>
                    <h2 class="ktc_hoi_vien__div--thong_so--ten">CƠ SỞ</h2>
                </center>
            </div>
            <div class="ktc_hoi_vien__div--thong_so--yellow">
                <center>
                    <h2 class="ktc_hoi_vien__div--thong_so--sl">619</h2>
                    <h2 class="ktc_hoi_vien__div--thong_so--ten">TRANSFORMATIONS</h2>
                </center>
            </div>
            <div class="ktc_hoi_vien__div--thong_so--white">
                <center>
                    <h2 class="ktc_hoi_vien__div--thong_so--sl">1318KG</h2>
                    <h2 class="ktc_hoi_vien__div--thong_so--ten">MỠ GIẢM</h2>
                </center>
            </div>
            <div class="ktc_hoi_vien__div--thong_so--yellow">
                <center>
                    <h2 class="ktc_hoi_vien__div--thong_so--sl">364KG</h2>
                    <h2 class="ktc_hoi_vien__div--thong_so--ten">CƠ TĂNG</h2>
                </center>
            </div>
        </div>

    </div>

    <!-- cơ sở vật chất -->
    <div id="ktc_co_so_vat_chat">
        <div class="ktc_co_so_vat_chat__div">
            <center>
                <h2 class="ktc_co_so_vat_chat__div--thong_so--hqc">HUCE GYM - SỐ 1 HÀ NỘI</h2>
            </center>
        </div>
        <center>
            <div class="ktc_co_so_vat_chat__span"></div>
        </center>
        <div class="ktc_co_so_vat_chat__div--doan_chu">
            <p class="ktc_co_so_vat_chat__p">Là kết quả của 5 năm dày công đầu tư và nghiên cứu, 6 năm du học nước
                ngoài, không ngừng học hỏi kiến thức từ những HLV hàng đầu thế giới của Founder Nguyễn Hoàng Trí Dũng,
                để tạo ra một không gian tập luyện thoải mái, tiện nghi, đầy đủ mọi công năng và tính năng cần thiết</p>
        </div>
        <div class="ktc_co_so_vat_chat__div--anhCSVC">
            <div class="ktc_co_so_vat_chat__div__div">
                <center>
                    <img class="ktc_co_so_vat_chat__div__img" src="../assets/img/ktc_csvc1.jpg" alt="GYM Image">
                </center>
            </div>
            <div class="ktc_co_so_vat_chat__div__div">
                <center>
                    <img class="ktc_co_so_vat_chat__div__img" src="../assets/img/ktc_csvc2.jpg" alt="GYM Image">
                </center>
            </div>
            <div class="ktc_co_so_vat_chat__div__div">
                <center>
                    <img class="ktc_co_so_vat_chat__div__img" src="../assets/img/ktc_csvc3.jpg" alt="GYM Image">
                </center>
            </div>
            <div class="ktc_co_so_vat_chat__div__div">
                <center>
                    <img class="ktc_co_so_vat_chat__div__img" src="../assets/img/ktc_csvc4.jpg" alt="GYM Image">
                </center>
            </div>
        </div>
    </div>
    <!-- Sự kiện -->
    <!-- <div id="ktc_su_kien"></div> -->
    <!--  -->
    <div id="ktc_goi_tap">
        <div class="ktc_goi_tap__div--gio_hoat_dong">
            <h2 class="ktc_goi_tap__h2--gio_hoat_dong">GIỜ HOẠT ĐỘNG</h2>
            <div class="ktc_goi_tap__div--gio_hoat_dong--ke_ngang">
            </div>
            <table class="ktc_goi_tap__table--gio_hoat_dong">
                <tr>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--ngay">Thứ 2</td>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--gio">06:00 - 21:30</td>
                </tr>
                <tr>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--ngay">Thứ 3</td>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--gio">06:00 - 21:30</td>
                </tr>
                <tr>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--ngay">Thứ 4</td>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--gio">06:00 - 21:30</td>
                </tr>
                <tr>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--ngay">Thứ 5</td>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--gio">06:00 - 21:30</td>
                </tr>
                <tr>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--ngay">Thứ 6</td>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--gio">06:00 - 21:30</td>
                </tr>
                <tr>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--ngay">Thứ 7</td>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--gio">08:00 - 20:00</td>
                </tr>
                <tr>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--ngay">Chủ nhật</td>
                    <td class="ktc_goi_tap__table--gio_hoat_dong--gio">08:00 - 20:00</td>
                </tr>
            </table>
        </div>
        <div class="ktc_goi_tap__div--goi_tap">
            <h2 class="ktc_goi_tap__h2--goi_tap">GÓI TẬP</h2>
            <div class="ktc_goi_tap__div--goi_tap--ke_ngang">
            </div>
            <div class="ktc_goi_tap__div--goi_tap--khoi_bao_quanh">
                <div class="ktc_goi_tap__div--goi_tap--menu ktc_goi_tap__div--goi_tap--menu__js1">
                    <div class="ktc_goi_tap__div--goi_tap__i1"><i
                            class="fa-solid fa-plus ktc_goi_tap_i1--goi_tap--menu"></i></div>
                    <div class="ktc_goi_tap__div--goi_tap__span ktc_goi_tap__div--goi_tap__span1"><span
                            class="ktc_goi_tap__span--goi_tap--menu">GÓI TẬP A.M</span></div>
                </div>
                <div class="ktc_goi_tap__div--goi_tap--content ktc_goi_tap__div--goi_tap--content__js1">
                    <div class="ktc_goi_tap__div--goi_tap--content--bao_quanh">
                        <strong class="ktc_goi_tap__strong--goi_tap--content">GÓI TẬP A.M</strong>
                        <p class="ktc_goi_tap__p--goi_tap--content ">Gói tập phù hợp với các bạn cố định về mặt thời
                            gian buổi sáng hoặc bạn muốn thử sức bền, độ kiên trì và kỉ luật cá nhân khi thức dậy sớm
                            vào buổi sáng và luyện tập nghiêm túc. Bạn sẽ trải nghiệm đầy đủ cơ sở vật chất, chất lượng
                            dịch vụ, không khí tập luyện máu lửa ở Swequity, cũng như nhìn thấy kết quả của sau quá
                            trình rèn luyện kỉ luật.</p>
                    </div>
                </div>
                <div class="ktc_goi_tap__div--goi_tap--menu ktc_goi_tap__div--goi_tap--menu__js2">
                    <div class="ktc_goi_tap__div--goi_tap__i2"><i
                            class="fa-solid fa-plus ktc_goi_tap_i2--goi_tap--menu"></i></div>
                    <div class="ktc_goi_tap__div--goi_tap__span ktc_goi_tap__div--goi_tap__span1"><span
                            class="ktc_goi_tap__span--goi_tap--menu">GÓI TẬP FULL-TIME</span></div>

                </div>
                <div class="ktc_goi_tap__div--goi_tap--content ktc_goi_tap__div--goi_tap--content__js2">
                    <div class="ktc_goi_tap__div--goi_tap--content--bao_quanh">
                        <strong class="ktc_goi_tap__strong--goi_tap--content">GÓI TẬP FULL-TIME</strong>
                        <p class="ktc_goi_tap__p--goi_tap--content ">Đây là gói tập phổ biến tại Swequity. Bạn có thể
                            tập luyện linh hoạt và không bị giới hạn thời gian. Nếu là một người có tính kỉ luật và
                            quyết tâm cao độ, có nhu cầu tập luyện trong môi trường đúng chất gym, gắn bó với một cộng
                            đồng có trình độ và hiểu biết, mong muốn duy trì lối sống lành mạnh, với chi phí hiệu quả
                            kinh tế nhất, thì đây sẽ là gói tập dành cho bạn.</p>
                    </div>
                </div>
                <div class="ktc_goi_tap__div--goi_tap--menu ktc_goi_tap__div--goi_tap--menu__js3">
                    <div class="ktc_goi_tap__div--goi_tap__i3"><i
                            class="fa-solid fa-plus ktc_goi_tap_i3--goi_tap--menu"></i></div>
                    <div class="ktc_goi_tap__div--goi_tap__span ktc_goi_tap__div--goi_tap__span1"><span
                            class="ktc_goi_tap__span--goi_tap--menu">GÓI TẬP V.I.P</span></div>
                </div>
                <div class="ktc_goi_tap__div--goi_tap--content ktc_goi_tap__div--goi_tap--content__js3">
                    <div class="ktc_goi_tap__div--goi_tap--content--bao_quanh">
                        <strong class="ktc_goi_tap__strong--goi_tap--content">GÓI TẬP V.I.P</strong>
                        <p class="ktc_goi_tap__p--goi_tap--content ">Với gói tập V.I.P bạn có thể tập luyện tại mọi cơ
                            sở của Swequity với khung thời gian linh hoạt tùy theo nhu cầu bản thân. Bạn không cần tập
                            quá sức, bạn chỉ cần tập theo phương pháp chuẩn chỉnh để có được kết quả tốt nhất. Với
                            phương pháp tập gym đúng chuẩn tại Swequity bạn sẽ nhận được kết quả xứng đáng với thời
                            gian, công sức và tiền bạc mình bỏ ra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div id="footer" class="ktc__footer">
        <div class="ktc__footer__div ktc__footer__div1">
            <strong class="ktc__footer__strong ktc__footer__strong--">ĐỊA CHỈ</strong>
            <div class="ktc_footer__div--ke_ngang"> </div>
            <strong class="ktc__footer__strong"><i class="fa-solid fa-house"></i> 59 Giải Phóng - ĐHXD Hà Nội</strong>
            <strong class="ktc__footer__strong"><i class="fa-solid fa-house"></i> 65PM1 - Công nghệ thông tin</strong>
            <strong class="ktc__footer__strong"><i class="fa-solid fa-house"></i> Đồ án - Web nâng cao</strong>
            <strong class="ktc__footer__strong"><i class="fa-solid fa-phone"></i> 0836759850</strong>
            <strong class="ktc__footer__strong"><i class="fa-solid fa-envelope"></i> kienpndev@gmail.com</strong>
        </div>
        <div class="ktc__footer__div ktc__footer__div2">
            <strong class="ktc__footer__strong ktc__footer__strong--">THÔNG TIN</strong>
            <div class="ktc_footer__div--ke_ngang"> </div>
            <li class="ktc_footer__li"><a class="ktc_footer__a" href="#ktc_hoi_vien">Hội viên</a></li>
            <li class="ktc_footer__li"><a class="ktc_footer__a" href="#ktc_goi_tap">Gói tập</a></li>
            <li class="ktc_footer__li"><a class="ktc_footer__a" href="#ktc_co_so_vat_chat">Cơ sở vật chất</a></li>
            <li class="ktc_footer__li"><a class="ktc_footer__a" href="#ktc_nhan_vien">Nhân viên</a></li>

        </div>
        <div class="ktc__footer__div ktc__footer__div3">
            <strong class="ktc__footer__strong ktc__footer__strong--">MẠNG XÃ HỘI</strong>
            <div class="ktc_footer__div--ke_ngang"> </div>
            <strong class="ktc__footer__strong"><i class="fa-brands fa-facebook"></i><a
                    class="ktc_footer_mang_xa_hoi__a" href="https://www.facebook.com/profile.php?id=100090803259694">
                    https://www.facebook.com/profile.php?id=100090803259694</a> </strong>
            <strong class="ktc__footer__strong"><i class="fa-brands fa-instagram"></i><a
                    class="ktc_footer_mang_xa_hoi__a" href="https://www.facebook.com/profile.php?id=100090803259694">
                    https://www.facebook.com/profile.php?id=100090803259694</a> </strong>
            <strong class="ktc__footer__strong"><i class="fa-brands fa-youtube"></i><a class="ktc_footer_mang_xa_hoi__a"
                    href="https://www.facebook.com/profile.php?id=100090803259694">
                    https://www.facebook.com/profile.php?id=100090803259694</a> </strong>

        </div>

    </div>
    <script src="../assets/js/js_ktc/ktc_slider.js"></script>
    <script src="../assets/js/js_ktc/ktc_goi_tap.js"></script>
    <!-- <script src="../assets/js/js_ktc/ktc_dang_nhap.js"></script> -->

</body>

</html>