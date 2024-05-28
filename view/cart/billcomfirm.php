


<div class="small-container cart-page">
         <div class="content" style="text-align:center;padding-top:140px">
            <h2>CẢM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG !</h2>
         </div>   
    <?php
        if(isset($bill)&&(is_array($bill))){
            extract($bill);
        }
    ?>
    <div>
        <div class="content" style="text-align:center;background-color: white;">
        <table border="1">
            <tr>
        <td>Mã Đơn Hàng</td>
        <td>Ngày Đặt Hàng</td>
        <td>Tổng Đơn Hàng</td>
        <td  style="text-align:center;">Phương Thức Thanh Toán</td>
        </td>
        <tr>
        <td><?=$bill['id']?></td>
           <td><?=$bill['ngaydathang']?></td>
           <td><?=$bill['total']?></td>
           <td style="text-align:center;"><?=$bill['bill_pttt']?></td>
    </tr>
        </table>
        </div>
    </div>
    <div style="text-align:center;">
        <button style="border-radius:10px;background-color:#ff523b;width: 200px;margin-top:20px;height: 30px;margin-right: 5px;" type="submit"><a style="color:#fff;" href="index.php?act=mybill">Theo dõi đơn hàng</a></button>
        <button style="border-radius:10px;background-color:#ff523b;width: 200px;margin-top:20px;height: 30px;margin-right: 5px;" type="submit"><a style="color:#fff;" href="index.php?act=sanpham">Tiếp tục mua sắm</a></button>
    </div>
    </div>
</div>
<?php
        if(isset($bill)&&(is_array($bill))){
            extract($bill);
        }


?>

