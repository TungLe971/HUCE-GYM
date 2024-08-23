<?php
// lấy tên key
$snhv_get_date="";
if(isset($_POST['snhv_chonNgay']))
{
    $snhv_get_date = "'".$_POST['snhv_chonNgay']."'";
}
else
{
    $snhv_get_date = "CURDATE()";
}


?>