<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTQ-Book</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="view/images/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="products.html">Sản phẩm</a></li>
                        <li class="dropdown">Danh mục
                            <ul class="dropdown-content">
                                <li><a href="#">Thiếu nhi</a></li>
                                <li><a href="#">Văn học</a></li>
                                <li><a href="#">Truyện</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Liên hệ</a></li>
                        <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="view/images/cart.png" width="30px" height="30px"></a>
                <img src="view/images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <style>
                .dropdown {
                    position: relative;
                    display: inline-block;
                    margin-right: 25px;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f1f1f1;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                    text-align: center;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    text-align: center;

                }

                .dropdown-content a:hover {
                    background-color: #ddd;
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }

                .avatar {
                    vertical-align: middle;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                }
            </style>