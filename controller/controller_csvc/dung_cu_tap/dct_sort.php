<?php
// lấy tên key
    if(isset($_POST['dctTang']))
    {
        $dct_key = $_POST['dctSort'];
    }
    else
    {
        $dct_key = 0;
    }

    if($dct_key==0){
        $dct_key="id_may";
    }
    elseif($dct_key==1){
        $dct_key="ten";
    }
    elseif($dct_key==2){
        $dct_key="bao_hanh";
    }
    else{
        $dct_key="bao_tri";
    }
//  tăng dần hoặc giảm dần
if(isset($_POST['dctTang']))
    {
        $dct_Tang = $_POST['dctTang'];
    }
    else
    {
        $dct_Tang = 0;
    }

    if($dct_Tang==0){
        $dct_Tang="DESC";
    }
    else{
        $dct_Tang="ASC";
    }


?>