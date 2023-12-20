<!--<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

<div  class="well" align="center" >
  
<form class="form-inline" role="form" action="<?php echo base_url()."admin/khachhang/search" ?>" method="post">
  <div class="form-group">
      <input type="text" class="form-control"  name="search" placeholder="Nhap ten can tim">
  </div>
  <button type="submit" class="btn btn-info" name="submit">Tim Kiem</button>
</form>
    
<div  align="left">

<a class="btn btn-info" href="<?php echo base_url(). "admin/khachhang/addedit"?>" role="button">Tao moi</a>


</div>
    <br>
    <div id="printableArea">
        <H1> DANH SACH MAT HANG </H1>
<table class="table table-striped ">
    
    <tr style="color: red; font-size: 14px;">
        <td>STT</td>
        <td>TÊN KH</td>
        <td>SĐT KH</td>
        <td>EMAIL KH</td>
        <td>ĐỊA CHỈ KH</td>
      
        <td>CHỈNH SỬA</td>
    </tr>
  
    <?php
    $stt = 0;
   foreach ($detail->result() as $row){
        $stt++;
        ?>
       <tr>
           
            <td><?php echo $stt; ?></td>
            <td><?php echo $row->tenkh; ?></td>
            <td><?php echo $row->sdtkh; ?></td>
            <td><?php echo $row->emailkh; ?></td>
            <td><?php echo $row->diachikh; ?></td>
            <td>
            <?php 
                if($row->trangthai == 1){
                    ?><a title="CLick de doi thanh UnPublic" href="<?php echo base_url()."admin/khachhang/changestatus/".$row->khachhang_id.'/0'; ?>">Ẩn</a><?php
                }else{
                    ?><a title="CLick de doi thanh Public" href="<?php echo base_url()."admin/khachhang/changestatus/".$row->khachhang_id.'/1'; ?>">Hiện</a><?php
                }
                
                 ?>
           </td>
            <td>
            <a href="<?php echo "khachhang/addedit/".$row->khachhang_id ?>">Sửa</a>
            <a href="<?php echo "khachhang/delete/".$row->khachhang_id?>">Xóa</a> 
            </td>
        </tr>
        <?php
    } 
  // echo base_url().uri_string().'.html'; 
  //echo $this->uri->segment(3); exit; 
    ?>
    
</table>
        <input type="button" onclick="printDiv('printableArea')" value="Print Invoice" />  
 </div>
 
<?php
    echo $links;
?>
      
</div>-->

                    
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>


<?php echo Modules::run('header2'); ?>
<?php echo Modules::run('menu2'); ?>




<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 >Khách Hàng</h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <div id="printableArea">
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>TÊN KH</th>
                                <th>SĐT KH</th>
                                <th>EMAIL KH</th>
                                <th>ĐỊA KH</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php
    $stt = 0;
   foreach ($detail->result() as $row){
        $stt++;
        ?>
            <tr class="odd gradeX" align="center">
                <td><?php echo $stt; ?></td>
            <td><?php echo $row->tenkh; ?></td>
            <td><?php echo $row->sdtkh; ?></td>
            <td><?php echo $row->emailkh; ?></td>
            <td><?php echo $row->diachikh; ?></td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?p=cate_del&idTL=1"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?p=cate_edit&idTL=1">Edit</a></td>
            </tr>
   <?php } ?>

                        </tbody>
                        
                    </table>
                    </div>
                      <input type="button" onclick="printDiv('printableArea')" value="Print Invoice" />  
     
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
     </div>

   





