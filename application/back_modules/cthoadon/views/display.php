





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
                        <h1 >Chi Tiết Hóa Đơn</h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <div id="printableArea">
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>MÃ CTHĐ</th>
                                <th>MÃ HĐ</th>
                                <th>MÃ MH</th>
                                <th>SỐ LƯỢNG BÁN</th>
                                <th>ĐƠN GIÁ BÁN</th>
                                <th>THÀNH TIỀN BÁN</th>
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
            <td><?php echo $row->cthoadon_id; ?></td>
            <td><?php echo $row->hoadon_id; ?></td>
            <td><?php echo $row->mathang_id; ?></td>
            <td><?php echo $row->soluongban; ?></td>  
            <td><?php echo $row->dongiaban; ?></td>
            <td><?php echo $row->thanhtienban; ?></td>    
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo "cthoadon/delete/".$row->cthoadon_id ?>"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo "cthoadon/addedit/".$row->cthoadon_id ?>">Edit</a></td>
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

