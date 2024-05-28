<?php
session_start();
$_SESSION['mycart'] = array(); //Khởi tạo 'mycart' là một mảng trống trong phiên
$sp1 = [1, "san pham1", 100, 2];// Định nghĩa sản phẩm 1
$sp2 = [2, "san pham2", 200, 3]; // Định nghĩa sản phẩm 2
$cart = [];
$cart[] = $sp1; // Thêm sản phẩm 1 vào 'cart'
$cart[] = $sp2; // Thêm sản phẩm 2 vào 'cart'
$_SESSION['mycart'] = $cart; // Lưu trữ 'cart' trong biến phiên 'mycart'
echo '<h1>Session đã tạo</h1>'; // Hiển thị một thông báo cho biết phiên đã được tạo
echo '<a href="2.php">Show dữ liệu session</a>'; // Cung cấp một liên kết đến '2.php' để hiển thị dữ liệu phiên
