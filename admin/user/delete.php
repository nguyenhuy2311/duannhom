<?php
require_once './../../model/functions.php';
$id = $_GET['id'];
get_delete('taikhoan', $id);
header("location: index.php"); 
?>