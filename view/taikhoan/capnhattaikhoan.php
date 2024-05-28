<div class="container">
    <div class="row">
        <div class="col-1">
            <img src="view/images/image1.jpg" width="100%">
        </div>
        <div class="col-1">
            <div class="form-container">
                <div class="form-btn">
                    <span>Cập nhật tài khoản</span>
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                </div>
                <form id="RegForm" action="index.php?act=capnhattaikhoan" method="post">
                   <span>
                   Tên Đăng Nhập
                   </span> 
                   
                                   <input type="text" name="user" value="<?= $user ?>" placeholder="Tên đăng nhập">
                                   <span>
Mật Khẩu
                                   </span>
                    <input type="password" name="pass" value="<?= $pass ?>" placeholder="Mật khẩu">
                    <span>Email</span>
                    <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
                    <span>Số điện thoại</span>
                    <input type="tel" name="tel" placeholder="Điện thoại">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" class="btn " value="Cập nhật" name="capnhat">
                </form>
            </div>
        </div>
    </div>
</div>
</div>