

<div class="small-container cart-page">
            <form action="index.php?act=billcomfirm" method="post">   
                        <table>
                        <div class="Tendanhmuc2 ">THÔNG TIN ĐẶT HÀNG</div>
                            <?php
                                if(isset($_SESSION['user'])){
                                    $name=$_SESSION['user']['user'];
                                    $address=$_SESSION['user']['address'];
                                    $email=$_SESSION['user']['email'];
                                    $tel=$_SESSION['user']['tel'];
                                }else{
                                    $name="";
                                    $address="";
                                    $email="";
                                    $tel="";
                                }
                            ?>
                            <tr>
                                <td>Người Đặt Hàng : </td>
                                <td><input type="text" name="user" id="" value="<?=$user?>"></td>                       
                            </tr>
                            <tr>
                                <td>Địa Chỉ :  </td>
                                <td><input type="text" name="address" id="" value="<?=$address?>"></td>                       
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td><input type="text" name="email" id="" value="<?=$email?>"></td>                       
                            </tr>
                            <tr>
                                <td>Điện Thoại :</td>
                                <td><input type="text" name="tel" id="" value="<?=$tel?>"></td>                       
                            </tr>
                             
                        </table>
                          
                    <div class="frmDSloai" style="margin-top:5px ;">  
                                        
                </div> 
                </div>               
                </div>


<div class="small-container cart-page">
                    <div>
                        <table>
                        <tr>
                          <th>Hình</th>
                          <th>Sản phẩm</th>
                          <th>Đơn giá</th>
                          <th>Số lượng</th>
                          <th>Thành tiền</th>
                          <th>Thao tác</th>
                          
                      </tr>
                    
                            <?php
                                viewcart(1);
                            ?> 
                        </table>
                        <hr>
                </div>      
          <h3>Phương thức thanh toán</h3>
              <table>
                  <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                  <td><input type="radio" name="pttt" checked>Chuyển khoản ngân hàng</td>
                  <td><input type="radio" name="pttt" checked>Thanh toán online</td>
              </table>
              <hr>
              <a href="index.php?act=billcomfirm"><input class="btn" style='float: right;width: 180px;float: right;margin-top: 5px;height: 30px;box-shadow: 2px 2px 3px 2px;margin-right: 5px;' type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang"></a>
      </div>  
     
    </div> 

    </div>
          