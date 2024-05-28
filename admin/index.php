
<?php

include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "../admin/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
                pdo_execute($sql);
                $thongbao = "Cập nhật thành công";
            }
            $sql = "select * from danhmuc order by id desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;

            /* SẢN PHẨM */

        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $namesp = $_POST['namesp'];
                $amount = $_POST['amount'];
                $tacgia = $_POST['tacgia'];
                $price = $_POST['price'];
                $sell_price = $_POST['sell_price'];
                $luotxem = $_POST['luotxem'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                } else {
                }
                insert_sanpham($namesp, $amount, $tacgia, $price, $sell_price, $img, $luotxem, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $namesp = $_POST['namesp'];
                $amount = $_POST['amount'];
                $tacgia = $_POST['tacgia'];
                $price = $_POST['price'];
                $sell_price = $_POST['sell_price'];
                $luotxem = $_POST['luotxem'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                } else {
                }

                update_sanpham($id, $iddm, $namesp, $amount, $tacgia, $price, $sell_price, $luotxem, $mota, $img);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'listkh':
            
            include "user/index.php";
            break;
        case 'listbl':
            
            include "binhluan/list.php";
            break;
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "bill/listbill.php";
            break;
        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill();
            include "bill/listbill.php";
            break;

        case 'thongke':
            include "thongke/listtk.php";
            break;
        default:
            include "../admin/home.php";
            break;
    }
} else {
    include "../admin/home.php";
}

include "../admin/footer.php";
?>