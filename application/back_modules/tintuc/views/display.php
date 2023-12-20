


<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

<?php echo Modules::run('header2') ; ?>
<?php echo Modules::run('menu2'); ?>




<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 >Tin Tức</h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <div id="printableArea">
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>MÃ TIN</th>
                                <th>USERNAME</th>
                                <th>HÌNH ẢNH TIN</th>
                                <th>TÓM TẮT</th>
                                <th>NỘI DUNG</th>
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
            <td><?php echo $row->tintuc_id; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->tieude; ?></td>
            <td> <img src="<?php echo base_url().'/uploads/' . $row->hinhanhtin; ?>" width="100px" height="100px"> </td>
            <td><?php echo $row->tomtat; ?></td>
            <td><?php echo $row->noidung; ?></td>  
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
