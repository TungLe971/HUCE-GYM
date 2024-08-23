<?php
// lấy tên key
    if(isset($_POST['tddTang']))
    {
        $tdd_key = $_POST['tddSort'];
    }
    else
    {
        $tdd_key = 0;
    }

    if($tdd_key==0){
        $tdd_key="id_wardrobe";
    }
    elseif($tdd_key==1){
        $tdd_key="trang_thai";
    }
    elseif($tdd_key==2){
        $tdd_key="id_hv";
    }
    else{
        $tdd_key="time_end";
    }
//  tăng dần hoặc giảm dần
if(isset($_POST['tddTang']))
    {
        $tdd_Tang = $_POST['tddTang'];
    }
    else
    {
        $tdd_Tang = 0;
    }

    if($tdd_Tang==0){
        $tdd_Tang="DESC";
    }
    else{
        $tdd_Tang="ASC";
    }


?>