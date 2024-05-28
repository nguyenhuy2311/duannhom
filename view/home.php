
<div class="container1">
    <div class="left-section">
        <div class="container">
            <button class="prev-btn" onclick="prevImage()">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </button>
            <img src="view/images/4.jpg" class="poster-img" alt="Beautiful Poster" width="825px" height="350px">
            <img src="view/images/4.jpg" class="poster-img" alt="Beautiful Poster" width="825px" height="350px">
            <img src="view/images/2.jpg" class="poster-img" alt="Beautiful Poster" width="825px" height="350px">
            <button class="next-btn" onclick="nextImage()">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </button>
        </div>
    </div>
    <div class="right-section">
        <img src="view/images/5.jpg" class="poster-img" alt="Beautiful Poster" width="100%" height="49%">
        <img src="view/images/3.jpg" class="poster-img" alt="Beautiful Poster" width="100%" height="49%">
    </div>
</div>
</div>
<div>

    <!-- ------------- featured products ---------------- -->
    <div class="small-container">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <div class="row">
            <?php
            foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $img = $img_path . $img;
                $formattedPrice = number_format($price, 0, ',', '.') . ' VNĐ';
                echo '<div class="col-4">
                        <a href="' . $linksp . '"><img src="' . $img . '" height="200px"></a>
                        <a href="' . $linksp . '">
                            <h4>' . $namesp . '</h4>
                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>' .  $formattedPrice . ' </p>
                        <div class="row btnaddtocart">
                               <form action="index.php?act=addtocart" method="post">
                                  <input type="hidden" name="id" value="' . $id . '">
                                  <input type="hidden" name="name" value="' . $namesp . '">
                                  <input type="hidden" name="img" value="' . $img . '">
                                  <input type="hidden" name="price" value="' . $price . '">
                                  <input type="submit" class="btn btn-success" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>
                           </div>
                    </div>';
            }
            ?>
        </div>
        <h2 class="title">Sản phẩm mới nhất</h2>
        <div class="row">

            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $img = $img_path . $img;
                if (($i == 3) || ($i == 7) || ($i == 11) || ($i == 15)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                $formattedPrice = number_format($price, 0, ',', '.') . ' VNĐ';
                echo '<div class="col-4 ' . $mr . '">
                           <a  href="' . $linksp . '"><img src="' . $img . '" style="height:200px;"></a>
                           <a href="' . $linksp . '">' . $namesp . '</a>
                           <div class="rating">
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-o"></i>
                            </div>
                            <p>' .  $formattedPrice . ' </p>
                            
                           <div class="row btnaddtocart">
                               <form action="index.php?act=addtocart" method="post">
                                  <input type="hidden" name="id" value="' . $id . '">
                                  <input type="hidden" name="name" value="' . $namesp . '">
                                  <input type="hidden" name="img" value="' . $img . '">
                                  <input type="hidden" name="price" value="' . $price . '">
                                  <input type="submit" class="btn btn-success" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>
                           </div>
                        </div>';
                $i += 1;
            }
            ?>