
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTQ-BOOK</title>
  <link rel="stylesheet" href="view/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
    .dropdown {
      position: relative;
      display: inline-block;
      text-align: center;
    }

/* CSS cho phần dropdown */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 180px;
  z-index: 1;
  text-align: left; /* Đặt văn bản trong dropdown sang trái */
  border-radius: 5px; /* Bo tròn các góc của dropdown */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Đổ bóng cho dropdown */
}

.dropdown-content ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition: background-color 0.3s;
}

.dropdown-content a:hover {
  background-color: gray;
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

    .container1 {
      display: flex;
      width: 100%;
    }

    .left-section {
      flex: 20%;
    }

    .right-section {
      flex: 80%;
    }
    .left-section {
        position: relative;
    }
    .dm{
      border: 30px;
    }



    .prev-btn,
    .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }
    .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination a {
    padding: 8px 16px;
    margin: 0 4px;
    text-decoration: none;
    color: #007bff;
    border: 1px solid #007bff;
    border-radius: 4px;
}

.pagination a.active {
    background-color: #007bff;
    color: #fff;
}

  </style>
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php"><img src="view/images/logo.png" width="125px"></a>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="iindex.php">Sản phẩm</a></li>
            <li><a href="index.php?act=contact">Liên hệ</a></li>
            

            <?php
            if (isset($_SESSION['user'])) {
              extract($_SESSION['user']);
            ?>
            <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
              <li class="dropdown"><img src="view/images/user.svg" height="27px" width="27px" class="Avatar" alt="avatar">
                <ul class="dropdown-content">
                  <?php if ($role == 2) { ?>
                    <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                  <?php } ?>
                  <li><a href="index.php?act=capnhattaikhoan">Cập nhật tài khoản</a></li>
                  <li><a href="index.php?act=thoat">Thoát</a></li>
                </ul>
              </li>
            <?php
            } else {
            ?>
              <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
            <?php } ?>

          </ul>
        </nav>
        <a href="index.php?act=addtocart"><img src="view/images/cart.png" width="30px" height="30px"></a>
        <img src="view/images/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>