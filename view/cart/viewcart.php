</div>

<div class="small-container cart-page">
    <div>
        <?php
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!isset($_SESSION['user'])) {
            echo '<p style="color:red;">Bạn cần đăng nhập để xem giỏ hàng. <a href="index.php?act=dangnhap">Đăng nhập ngay</a></p>';
        } else {
            echo '<table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                        
                    </tr>';
                    echo'<hr>';
            viewcart(1);
            echo '</table>';
        }
        ?>
        <hr>
    </div>

    <div>


        <?php
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (isset($_SESSION['user'])) {
            if (isset($error_message)) {
                echo '<p style="color:red;">' . $error_message . '</p>';
            } else {
                echo '<a href="index.php?act=bill"><input type="submit" value="Đặt Hàng" style="border-radius:10px;background-color:#ff523b;color:white;width: 120px;float: right;margin-top: 5px;height: 30px;margin-right: 5px;"> </a>';
                echo '<a href="index.php?act=delcart"><input type="submit" value="Xóa Giỏ Hàng" style="border-radius:10px;background-color:#ff523b;color:white;width: 150px;float: right;margin-top: 5px;height: 30px;margin-right: 5px;"></a>';
            }
        }
        
        ?>
    </div>
</div>
</div>
