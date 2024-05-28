<?php
require_once './../../model/functions.php';
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $status = intval($_GET['st']);
    if($status == 1){
        update_status('taikhoan', 2, $id);
    } else if($status == 2){
        update_status('taikhoan', 1, $id);
    }
}
header("location: index.php"); 
?>