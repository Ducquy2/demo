<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

<div  class="well" align="center" >
  
<form class="form-inline" role="form" action="<?php echo base_url()."admin/loaihang/search" ?>" method="post">
  <div class="form-group">
      <input type="text" class="form-control"  name="search" placeholder="Nhap ten can tim">
  </div>
  <button type="submit" class="btn btn-info" name="submit">Tim Kiem</button>
</form>
    
<div  align="left">

<a class="btn btn-info" href="<?php echo base_url(). "admin/loaihang/addedit"?>" role="button">Tao moi</a>


</div>
    <br>
    <div id="printableArea">
        <H1> DANH SACH MAT HANG </H1>
<table class="table table-striped ">
    
    <tr style="color: red; font-size: 14px;">
        <td>STT</td>
        <td>TÊN</td>
        <td>TRẠNG THÁI</td>
        <td>CHỈNH SỬA</td>
    </tr>
  
    <?php
    $stt = 0;
   foreach ($detail->result() as $row){
        $stt++;
        ?>
       <tr>
           
            <td><?php echo $stt; ?></td>
            <td><?php echo $row->tenloaihang; ?></td>
            <td>
            <?php 
                if($row->trangthai == 1){
                    ?><a title="CLick de doi thanh UnPublic" href="<?php echo base_url()."admin/loaihang/changestatus/".$row->loaihang_id.'/0'; ?>">Ẩn</a><?php
                }else{
                    ?><a title="CLick de doi thanh Public" href="<?php echo base_url()."admin/loaihang/changestatus/".$row->loaihang_id.'/1'; ?>">Hiện</a><?php
                }
                
                 ?>
           </td>
            <td>
            <a href="<?php echo "loaihang/addedit/".$row->loaihang_id ?>">Sửa</a>
            <a href="<?php echo "loaihang/delete/".$row->loaihang_id?>">Xóa</a> 
            </td>
        </tr>
        <?php
    } 
  // echo base_url().uri_string().'.html'; 
  //echo $this->uri->segment(3); exit; 
    ?>
    
</table>
 </div>
  <input type="button" onclick="printDiv('printableArea')" value="Print Invoice" />  
<?php
    echo $links;
?>
      
</div>

