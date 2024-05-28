<?php
session_start();
require_once "./model/pdo.php";
extract($_REQUEST);
if (empty($noi_dung)) {
    $_SESSION['error'] = "Vui lòng không để trống!";
    header("location: http://localhost/pro1014_duan1/index.php?act=sanphamct&idsp=$id_product");
    die;
}
$date = date("Y-m-d");
$sql = "insert into binhluan(noi_dung, ma_sp, ma_kh, ngay_them) values(?, ?, ?, ?)";
pdo_execute($sql, $noi_dung, $id_product, $_SESSION['user']['id'], $date);
header("location: http://localhost/pro1014_duan1/index.php?act=sanphamct&idsp=$id_product");
