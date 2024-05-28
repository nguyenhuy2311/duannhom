
<div class="row">
        <h2 class="title">Sản phẩm</h2>
        <div class="row">
        <?php
             $i = 0;
             foreach($dssp as $sp){
                 extract($sp);
                 $linksp="index.php?act=sanphamct&idsp=".$id;
                 $hinh=$img_path.$img;
                 if(($i==3)||($i==7)||($i==11)||($i==15)){
                     $mr="";
                 }else{
                     $mr="mr";
                 }
                 $formattedPrice = number_format($price, 0, ',', '.') . ' VNĐ';

                 echo '<div class="boxsp '.$mr.'">
                 <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="" width="100%" height="200px"></a></div>
                 <p>'. $formattedPrice.' </p>
                 <a href="'.$linksp.'">'.$namesp.'</a>
                 <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
           </div>
                 <div class="row btnaddtocart">
                      <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$namesp.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="hidden"  name="addtocart" value="Thêm vào giỏ hàng">
                      </form>
                  </div>
             </div>';
             $i+=1;
             }
           ?>

