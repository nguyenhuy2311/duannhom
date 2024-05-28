<?php
session_start();
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./model/taikhoan.php";
include "./model/cart.php";
include "model/pdo.php";
require_once "./admin/function.php";
$dsdm = loadall_danhmuc();
include "view/header.php";
include "./global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$trangsp = loadall_sanphamtrang();
$dstop10 = loadall_sanpham_top10();


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
            // BƯỚC 2: TÌM TỔNG SỐ RECORDS
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "./view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "./view/sanphamct.php";
            } else {
                include "./view/home.php";
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
            //include "./view/cart/viewcart.php";
            header('Location: index.php?act=addtocart');
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user, $email, $pass);
                $thongbao = "Đã đăng ký thành công . vui lòng đăng nhập để thực hiện chức năng hoặc đặt hàng !";
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                    //$thongbao="bạn đã đăng nhập thành công  !";
                } else {
                    $thongbao = " Tài khoản không tồn tại . Vui lòng kiểm tra hoặc đăng ký";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;

        case 'capnhattaikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $status, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=capnhattaikhoan');
            }
            include "view/taikhoan/capnhattaikhoan.php";
            break;
        case 'viewcart';

            include "./view/cart/viewcart.php";
            break;
        case 'bill';
            include "view/cart/bill.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=viewcart');
            break;

        case 'billcomfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                $name = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = ['pttt'];
                $ngaydathang = date('h:i:sa d/m/y');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($name, $address, $tel, $email, $ngaydathang, $tongdonhang);
                if (!isset($_SESSION['user']['id'])) {
                    $iduser = 0;
                } else {
                    $iduser = $_SESSION['user']['id'];
                }
                $thongtinkhackhang = $name . "<br>" . $email . "<br>" . $address . "<br>" . $tel . "<br>";
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billcomfirm.php";
            break;
        case 'mybill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "view/cart/mybill.php";
            break;
        case 'contact':
            include "contact.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
