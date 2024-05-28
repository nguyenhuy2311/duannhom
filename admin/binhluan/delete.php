<?php
require_once './../../model/functions.php';
$id = $_GET['id'];
get_delete('binhluan', $id);
header("location: list.php"); 
?>