<?php
extract($onesp);
$cmts = select_cmt($id); // id product
?>
    

    <!-- ---------- single Products detail ----------- -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
            <?php
           $img=$img_path.$img;
           echo '<div><img src="'.$img.'" width="100%" id="productImg"></div>';
           
        ?>
       </div>
            <div class="col-2" >
                <?php
               $formattedPrice = number_format($price, 0, ',', '.') . ' VNĐ';

                echo '<h1>'.$namesp.'</h1>';
                echo '<h4>Tác giả: '.$tacgia.'</h4>';
                echo '<h4>  '. $formattedPrice.' </h4>';
                echo 'Số lượng: <input style="border-radius: 10px;;width:70%;color:black;margin-right:10px;" type="text" value="',$amount.'">';
                echo ' <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                   <input type="hidden" name="id" value="'.$id.'">
                   <input type="hidden" name="name" value="'.$namesp.'">
                   <input type="hidden" name="img" value="'.$img.'">
                   <input type="hidden" name="price" value="'.$price.'">
                   <input class="btn btn-danger" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                 </form>
            </div>';
                echo '<h3>Mô tả: </h3>
                    <br>';
                    echo '<p>'.$mota.'</p>';
                ?>

                
            </div>
            <div class="small-container" >
    <?php
        if(empty($cmts)){ //Kiểm tra xem mảng $cmts có rỗng không. Nếu rỗng, nghĩa là không có bình luận nào.
            echo "<h4 style='color:red; text-align:center'>Chưa có bình luận</h4>";
        } else {
            foreach($cmts as $cmt){ //Duyệt qua từng bình luận trong mảng $cmts.
                $user = select_one('taikhoan', $cmt['ma_kh']); //Lấy thông tin của người dùng đã đăng bình luận bằng cách sử dụng hàm select_one() truy vấn dữ liệu dựa và mã khách hàng
        ?>
        <div>
            <!-- Hiển thị tên người dùng đã đăng bình luận -->
            <h3><?=$user['user']?></h3> 
            <!-- Hiển thị ngày đăng bình luận -->
            <span style="font-size: 7px;"><?=$cmt['ngay_them']?></span>
            <!-- Hiển thị nội dung của bình luận -->
            <h4><?=$cmt['noi_dung']?></h4>
        </div>
        <?php
            }
        }
        ?>
        <div class="row row2">
            <h2>Đánh Giá</h2>
        </div>
        <?php
        if(isset($_SESSION['error'])){ //Kiểm tra xem biến $_SESSION['error'] có tồn tại không.
            echo "<span style='color:red'>" . $_SESSION['error'] . "</span>"; //hiển thị thông báo lỗi 
            unset($_SESSION['error']); //hủy biến $_SESSION['error'] để không hiển thị lại thông báo lỗi
        }
        ?>
        <form action="comment.php" method="POST" class="form-group row">
            <input type="hidden" name="id_product" value="<?=$id?>">
            <textarea name="noi_dung" style="max-width:100%" cols="150" rows="5" placeholder="Comment"></textarea>
            <?php
            if(isset($_SESSION['user'])){
            ?>
            <div class="form-group">
                <button class="btn">Gửi</button>
            </div>
            <?php }?>
        </form>
        <?php
            if(!isset($_SESSION['user'])){
        ?>
            <button class="btn btn-danger   "><a href="index.php?act=dangnhap">Đăng nhập để bình luận</a></button>
        <?php
        }
        ?>
    </div>
    
        </div>
    </div>
    </div>
    <!-- ----- title------------- -->
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm liên quan</h2>
        </div>
        <div class="row" >       
            <?php
            $linksp="index.php?act=sanphamct&idsp=".$id;
           foreach($sp_cung_loai as $sp_cung_loai){ //Duyệt qua từng sản phẩm trong mảng $sp_cung_loai
               extract($sp_cung_loai); //chuyển đổi các phần tử của mảng thành các biến
               $linksp="index.php?act=sanphamct&idsp=".$id;
               $img=$img_path.$img; //Tạo đường dẫn đầy đủ đến hình ảnh của sản phẩm bằng cách nối $img_path (đường dẫn cơ sở đến thư mục chứa hình ảnh) với $img (tên tệp hình ảnh)
               echo '<div><a href="'.$linksp.'"><img src="'.$img.'" width="100%" height="300px"></a></div>'; // hiển thị khối hình ảnh
           }
          ?>
            </div>
        </div>
    </div>

    
        <!-- ------------------- js for toggle menu-------------- -->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                }
                else {
                    MenuItems.style.maxHeight = "0px";
                }
            }

        </script>

<!-- ------------------- JS for  product gallery----------------->
        <script>
            var ProductImg = document.getElementById("productImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }

        </script>
