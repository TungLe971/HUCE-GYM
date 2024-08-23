<?php
    include "../connection.php";

    $g1_lan=$_POST['1_lan'];
    $g1_thang=$_POST['1_thang'];
    $g3_thang=$_POST['3_thang'];
    $g6_thang=$_POST['6_thang'];
    $g1_nam=$_POST['1_nam'];
    $g2_nam=$_POST['2_nam'];
    $g5_nam=$_POST['5_nam'];
    $gym_rieng=$_POST['gym_rieng'];

    $yoga_basic=$_POST['yoga_basic'];
    $yoga_average=$_POST['yoga_average'];
    $yoga_advance=$_POST['yoga_advance'];
    $yoga_rieng=$_POST['yoga_rieng'];

    $aerobic_basic=$_POST['aerobic_basic'];
    $aerobic_average=$_POST['aerobic_average'];
    $aerobic_advance=$_POST['aerobic_advance'];
    $aerobic_rieng=$_POST['aerobic_rieng'];

    $boxing_basic=$_POST['boxing_basic'];
    $boxing_average=$_POST['boxing_average'];
    $boxing_advance=$_POST['boxing_advance'];
    $boxing_rieng=$_POST['boxing_rieng'];

    $swimming_basic=$_POST['swimming_basic'];
    $swimming_average=$_POST['swimming_average'];
    $swimming_advance=$_POST['swimming_advance'];
    $swimming_rieng=$_POST['swimming_rieng'];


    $sql = "UPDATE tbl_gym SET 1_lan='$g1_lan' , 1_thang='$g1_thang' , 3_thang='$g3_thang' , 6_thang='$g6_thang'
    , 1_nam='$g1_nam' , 2_nam='$g2_nam' , 5_nam='$g5_nam' , gym_rieng='$gym_rieng'
    , yoga_basic='$yoga_basic' , yoga_average='$yoga_average' , yoga_advance='$yoga_advance' , yoga_rieng='$yoga_rieng'
    , aerobic_basic='$aerobic_basic' , aerobic_average='$aerobic_average' , aerobic_advance ='$aerobic_advance' , aerobic_rieng='$aerobic_rieng'
    , boxing_basic='$boxing_basic' , boxing_average='$boxing_average' , boxing_advance='$boxing_advance' , boxing_rieng='$boxing_rieng'
    , swimming_basic='$swimming_basic' , swimming_average='$swimming_average' , swimming_advance='$swimming_advance' , swimming_rieng='$swimming_rieng'";
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();

    header("Location: ../../view/views_home/noticeANDprice.php");
    exit();
?>