<div class="container1">
    <div class="row">
        <div class="left-section">
            <div class="container">     
                <div class="categories">
                    <h1>Danh Mục</h1>
                   <div class="dm">
                   <ul>
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                            echo '<li>
                                      <a href="' . $linkdm . '">' . $name . '</a>
                                  </li>';
                        }
                        ?>
                    </ul>
                   </div>
                   <form action="index.php?act=sanpham" method="post" class="mb-3">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm...">
                        </div>
                        <div class="col">
                            <input type="submit" name="listok" value="Tìm Kiếm Sản Phẩm" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div class="right-section">
            <img src="view/images/6.jpg" class="poster-img" alt="Beautiful Poster" width="110%" height="80%">
        </div>
    </div>
</div>


<div class="header1">
    <div class="small-container">

    

        <div class="row">
            <?php
            $i = 0;
            foreach ($spneww as $sp) {
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
                            <p>' . $formattedPrice  . '</p>
                            
                            
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
        </div>
    </div>
