<main class="container main-content" role="main">
    
        
   <style>
                           .main-content.main-content {
                           padding-top: 100px;
                           }
                        </style>
   <div class="container">
             <div class="row">
                  <div class="col-xs-12">
                    <div class="row">
               </div>
            </div>
            
               </div>  
                <div id="giohang_ajax">
    
<div class="container">
	
  <div class="row">
    <div id="content" class="boxcontent col-sm-12">
			<h1>Giỏ Hàng Của Bạn</h1>
			<p>Bạn nhấp vào nút Đặt Hàng và làm theo hướng dẫn. Sau khi nhận được đơn đặt hàng và chuyển khoản thanh toán của bạn, chúng tôi sẽ ship hàng cho bạn trong thời gian sớm nhất. Nếu có bất cứ trục trặc nào, chúng tôi sẽ chủ động liên hệ với bạn.</p>
			<form name="cart_quantity" action="" method="post" class="shoping_cart">			<input type="hidden" name="id[692{2}1][2]" value="1">				<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
                                                        <td class="text-left">STT</td>
                                                        <td class="text-left">ID Mặt Hàng</td>
							<td class="text-center">Hình Ảnh</td>
							<td class="text-left">Tên Mặt Hàng</td>
							<td class="text-left">Số lượng</td>
							<td class="text-right">Giá</td>
							<td class="text-right">Tổng</td>
						</tr>
					</thead>
					<tbody>
                                             <?php
                                                $stt = 0;

                                                foreach($list as $k=>$v){
                                                    $stt++;

                                                    //var_dump($v); exit;
                                             ?>
                                            	<tr>
                                                        <td class="text-left"><?php echo $stt; ?></td>
                                                        <td class="text-left"><?php echo $v['id']; ?></td>
							<td class="text-center">
                                                            <div class="image"><a href=""><img src="<?php echo base_url().'/uploads/'. $v['hinh']?>" width="100px" height="100px" alt="A48515" title="A48515" class="img-thumbnail"></a></div>
							</td>
							<td class="text-left">
							<a href=""><?php echo $v['name']; ?></a><br>
					
							</td>
							<td class="text-left">
							
                                                            <input class="cart_quantity_input text" size="2" type="text" min="1" value="<?php echo $v['qty']; ?>" name="quantity" id="quantity" onchange="change_qty(this.value , '<?php echo $k; ?>');" />
                                                            <a onclick="remove_cart('<?php echo $k; ?>');"    href="javascript:void(0)" title="Delete"><img src="http://livedemo00.template-help.com/prestashop_35168/themes/theme211/img/icon/delete.gif" alt="Delete" class="icon"></a>
						
							</td>
							<td class="text-right"><div class="price"><?php echo $v['price']; ?></div></td>
							<td class="text-right"><div class="price price-total"><?php echo $v['subtotal']; ?></div></td>
						</tr>
                                          <?php
                                            } 
                                          ?>
                                                										</tbody>
				</table>
				</div>
								<div class="row">
				<div class="col-sm-5 col-sm-offset-7">
					<table class="table table-bordered">
						<tbody><tr>
							<td class="text-right"><strong> Tổng sản phẩm:</strong></td>
                                                        <td class="text-right"><div class="price"><?php echo $total_item; ?></div></td>
                                                        <td class="text-right"><strong>Tổng cộng:</strong></td>
                                                        <td class="text-right"><div class="price"><?php echo $total_amount . " VND"; ?></div></td>
						</tr>
					</tbody></table>
				</div>
				</div>
				
			</form>
		</div>
	</div>
</div>

            

    
    <br><br>
    <!-- Contextual button for informational alert messages -->
    <a class="btn btn-info" href="./">Mua thêm hàng</a>
    <a class="btn btn-success" href="<?php echo base_url()."thanhtoan/buoc1" ?>">Đăt Hàng</a>
    <a class="btn btn-warning" href="<?php echo base_url()."dathang/del" ?>">Hũy Giỏ Hàng</a>


 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div> 
            </div>
   <!-- End Rocket Fuel Conversion Action Tracking Code Version 9 -->
</main>
