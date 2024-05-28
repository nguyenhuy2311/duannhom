<div class="small-container cart-page">
        
    <form action="index.php?act=mybill" method="post">
      <div class="row boxcontent cart">
          <h2>Đơn hàng của bạn</h2>
          <table border="1">
          <tr>
                  <th>Mã đơn hàng</th>
                  <th>Ngày đặt</th>
                  <th>Số lượng mặt hàng</th>
                  <th>Tổng giá trị đơn hàng</th>
                  <th>Tình trạng đơn hàng</th>
                  
              </tr>
              <?php
                    if(is_array($listbill)){
                        foreach ($listbill as $bill){
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);   
                            $countsp=loadall_cart_count($bill['id']);
                            echo'
                                <tr>
                                    <td>'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td style="text-align:center;">'.$ttdh.'</td>   
                                </tr>';
                        }
                    }
                
                ?>

          </table>
      </div>  
    </form>
    </div> 
    
    
  
    
    
</div>