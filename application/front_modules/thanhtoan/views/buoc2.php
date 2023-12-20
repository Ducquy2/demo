<main class="container main-content" role="main">
<?php
if($this->session->userdata('thanhcong')){  // Nếu có session Thành Công
    // Show thông báo
    echo "<b style='color: black;'> ".$this->session->userdata('thanhcong') . "</br><br / >";
    // Xóa session
    $this->session->unset_userdata('thanhcong');
}
?>
<!--<table style="width:60%">
    <td>
 
        <div class="row">
          <div class="col-md-2">
                Họ & tên:  
          </div>
          <div class="col-md-10"> 
                <input type="text" name="TENKH" value="<?php echo $tenkh; ?>" readonly="readonly" />
          </div> 
          
          <div class="col-md-2">
                SDT:  
          </div>
          <div class="col-md-10"> 
                <input type="text" name="SDT" value="<?php echo $sdtkh; ?>" readonly="readonly" />
          </div> 
          
          
          <div class="col-md-2">
                Địa chỉ:  
          </div>
          <div class="col-md-10"> 
                <input type="text" name="DIACHI" value="<?php echo $diachikh; ?>" readonly="readonly" />
          </div> 
            
             
          <br /><br /> 
        </div> 
 
    </td>
</table>

 
<b style="color: blue;">GIỎ HÀNG</b>

<table  border="1">
    <tr style="color: red; font-size: 14px;">
        <td>STT</td>
        <td>ID Mặt Hàng</td>
        <td>TEN</td>
        <td>Hình Ảnh</td>
        <td>Giá</td>
        <td>Số Lượng</td> 
        <td>Thành tiền</td> 
    </tr>
    <?php
    $stt = 0;
    foreach($list as $k=>$v){
        $stt++;
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $v['id']; ?></td>
            <td><?php echo $v['name']; ?></td>
            <td><img src="<?php echo base_url().'/uploads/'. $v['hinh']?>" width="100px" height="100px" > 
            <td><?php echo $v['price']; ?></td>
            <td><?php echo $v['qty']; ?></td>
            <td><?php echo $v['subtotal']; ?></td>
            
         
        </tr>
        <?php
    } 
    ?>
    
</table>

<p>
Total Item: <b><?php echo $total_item; ?></b> <br />
Total Amount: <b><?php echo $total_amount . " VND"; ?></b> <br />  
</p>


<form method="post">
 
<input type="submit" name="xacnhan" class="btn btn-success" value="Xác nhận" /> 
</form>-->




    
        
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
                <script src="http://localhost/banxe/themes/admin/js/thanhtoan.js" type="text/javascript">
</script>
<div class="well">
     <div class="heading">
	<i class="fa fa-file-text-o"></i>
     </div>
<form class="cd-form floating" method="post">
        <fieldset>
            <legend>Thông Tin Khách Hàng</legend>
 
            
            <div class="form-group required">
                <div class="col-md-4">
                <label class="col-md-4 control-label" for="cd-name">Họ &amp; Tên</label>
                </div>
                <input class="user" type="text" name="TENKH"  value="<?php echo $tenkh; ?>"id="cd-name" required="">
               
            </div> 
 
            <div class="form-group required">
                <div class="col-md-4">
                <label class="col-md-4 control-label" for="cd-company">Số Điện Thoại</label>
                </div>
                <input class="company" type="text" name="sdtkh" value="<?php echo $sdtkh; ?>" id="cd-company">
               
            </div> 
 
           
            <div class="form-group required">
                <div class="col-md-4">
                <label class="col-md-4 control-label" for="cd-name">Địa Chỉ</label>
                </div>
                <input class="user" type="text" name="diachikh" value="<?php echo $diachikh; ?>" id="cd-name" required="">
                
            </div> 
            
            
            
 
            
        </fieldset>
 
       
    </form>


    </div>
<table class="table table-bordered" style="width:100%">
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
							
								<?php echo $v['qty']; ?>
                                                            
						
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
       <form method="post">
 
<input type="submit" name="xacnhan" class="btn btn-success" value="Xác nhận" /> 
</form>                 
</main>



