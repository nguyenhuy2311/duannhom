<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $img = $img_path . $cart[1];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_th = '<th> Thao tác</th>';
            $xoasp_td = '<a href="index.php?act=delcart&idcart=' . $i . '"><input style="text-align:center;border-radius:10px;background-color:#ff523b;color:white;" type="button" value="Xóa"></a>';
        } else {
            $xoasp_th = '';
            $xoasp_td = '';
        }
        echo '
                  <tr>
                  <td><img src="' . $cart[2] . '" alt="" height="80px"></td>
                  <td>' . $cart[1] . '</td>
                  <td>' . $cart[3] . '</td>
                  <td>' . $cart[4] . '</td>
                  <td>' . $ttien . '</td>
                  <td>' . $xoasp_td . '</td>
                  </tr>';
        $i += 1;
    }
    echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>' . $tong . '</td>
                
                <td></td>
            </tr>';
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '<tr>
                <th> Hình </th>
                <th> Sản Phẩm </th>
                <th>Đơn Giá </th>
                <th> Số Lượng </th>
                <th>Thành Tiền </th>
                
                </tr>';

    foreach ($listbill as $cart) {
        $img = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '                    
                    <tr>
                    <td><img src="' . $img . '" alt="" height="80px"></td>
                    <td>' . $cart['name'] . '</td>
                    <td>' . $cart['price'] . '</td>
                    <td>' . $cart['soluong'] . '</td>
                    <td>' . $cart['thanhtien'] . '</td>                                           
                    </tr> ';
        $i += 1;
    }
    echo '
    <hr> <tr>
                    <td style="text-align: center;" colspan="4">Tổng Đơn Hàng</td>
                    <td>' . $tong . '</td>
                    </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($name, $address, $tel, $email, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(bill_name,bill_address,bill_tel,bill_email,ngaydathang,total) values('$name','$address','$tel','$email','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $name, $img, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,name,img,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$name','$img','$price','$soluong','$thanhtien','$idbill')";

    return pdo_execute($sql);
}
function delete_bill($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{

    $sql = "select * from bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng Mới";
            break;
        case '1':
            $tt = "Đang Xử Lý";
            break;
        case '2':
            $tt = "Đang Giao Hàng ";
            break;
        case '3':
            $tt = "Hoàn Tất";
            break;
        default:
            $tt = "Đơn hàng Mới";
            break;
    }
    return $tt;
}
