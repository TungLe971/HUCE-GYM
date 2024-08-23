<?php
// lấy tên key
    if(isset($_POST['blTang']))
    {
        $bl_key = $_POST['blSort'];
    }
    else
    {
        $bl_key = 0;
    }

    if($bl_key==0){
        $bl_key="luong.id_nv";
    }
    elseif($bl_key==1){
        $bl_key="time_start";
    }
    elseif($bl_key==2){
        $bl_key="luong";
    }
    else{
        $bl_key="name";
    }
//  tăng dần hoặc giảm dần
if(isset($_POST['blTang']))
    {
        $bl_Tang = $_POST['blTang'];
    }
    else
    {
        $bl_Tang = 0;
    }

    if($bl_Tang==0){
        $bl_Tang="DESC";
    }
    else{
        $bl_Tang="ASC";
    }


?>