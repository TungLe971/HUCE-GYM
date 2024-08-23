<?php
    if(isset($_POST['tpSort']))
    {
        $tp_key = $_POST['tpSort'];
    }
    else
    {
        $tp_key = 0;
    }

    if($tp_key==0){
        $tp_key="id_nuoc_va_tp";
    }
    elseif($tp_key==1){
        $tp_key="name";
    }
    else{
        $tp_key="gia_ban";
    }
//  tăng dần hoặc giảm dần
if(isset($_POST['tpTang']))
    {
        $tp_Tang = $_POST['tpTang'];
    }
    else
    {
        $tp_Tang = 0;
    }

    if($tp_Tang==0){
        $tp_Tang="DESC";
    }
    else{
        $tp_Tang="ASC";
    }
    

?>