<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
$dsdm = loadall_danhmuc();
include "sanpham/header.php";
include "./global.php";
$spneww = loadall_sanphamtrang();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] > 0)) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "./sanpham/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "./sanpham/sanphamct.php";
            } else {
                include "./sanpham/home.php";
            }

            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $amount = 1;
                $ttien = $amount * $price;
                $spadd = [$id, $name, $img, $price, $amount, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "./view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=addtocart');
            break;

        case 'gioithieu':
            include "./sanpham/gioithieu.php";
            break;
        case 'lienhe':
            include "./sanpham/lienhe.php";
        default:
            include "./sanpham/home.php";
            break;
    }
} else {
    include "sanpham/home.php";
}
include "sanpham/footer.php";
