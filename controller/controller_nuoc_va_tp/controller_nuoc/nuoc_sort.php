<?php
// lấy tên key
    if(isset($_GET['nuocTang']))
    {
        $_SESSION['nuoc_key'] =  $_GET['nuocSort'];
        $nuoc_key = $_SESSION['nuoc_key'];
    }
    else
    {
        $_SESSION['nuoc_key'] = 0;
        $nuoc_key = $_SESSION['nuoc_key'];
    }

    if($nuoc_key==0){
        $nuoc_key="id_nuoc_va_tp";
    }
    elseif($nuoc_key==1){
        $nuoc_key="name";
    }
    else{
        $nuoc_key="gia_ban";
    }
//  tăng dần hoặc giảm dần
if(isset($_GET['nuocTang']))
    {
        $nuoc_Tang = $_GET['nuocTang'];
    }
    else
    {
        $nuoc_Tang = 0;
    }

    if($nuoc_Tang==0){
        $nuoc_Tang="DESC";
    }
    else{
        $nuoc_Tang="ASC";
    }


?>