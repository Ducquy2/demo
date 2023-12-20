


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
        <div id="printableArea">
            <div class="row">
                <div class="col-lg-12" align="center">
                    <h1 >WEBSITE BÁN HÀNG</h1>
                    <b >Điện Thoại :01647884720</b>
                    <b>ĐỊA CHỈ : TPHCM</b>
                    <HR WIDTH=800>

                </div>
                <div class="col-lg-12">
                    <strong>
                        <h1 align="center">HOÁ ĐƠN BÁN HÀNG</h1>

                        <?php
                        if (@($detail)) {
                            $data = $detail->result();
                            $tt = 1;
                            // tt=1 la Trang Thai Edit
                        } else
                        // tt=0 la Trang Thai Insert
                            $tt = 0;
                        ?>
                        <h3>Tên Khách Hàng :
                            <?php
                            if ($tt == 1) {
                                echo $data[0]->tenkh;
                            }
                            ?>
                        </h3>
                        <h3>Số Điện Thoại:
<?php
if ($tt == 1) {
    echo $data[0]->sdtkh;
}
?>
                        </h3>
                        <h3>Email:
                            <?php
                            if ($tt == 1) {
                                echo $data[0]->emailkh;
                            }
                            ?>
                        </h3>
                        <h3>Địa Chỉ:
                            <?php
                            if ($tt == 1) {
                                echo $data[0]->diachikh;
                            }
                            ?>
                        </h3>
                    </strong>  
                </div>

                <!-- /.col-lg-12 -->


                <table class="table table-striped table-bordered table-hover" id="">

                    <thead>
                        <tr align="center">
                            <th>STT</th>
                            <th>MÃ HĐ</th>                               
                            <th>NGÀY LẬP</th>
                            <th>TÊN MH</th>
                            <th>SỐ LƯỢNG</th>
                            <th>ĐƠN GIÁ</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <HR WIDTH=800>
<?php
$stt = 0;
foreach ($detail->result() as $row) {
    $stt++;
    ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $row->hoadon_id; ?></td> 
                                <td><?php echo $row->ngaylaphd; ?></td>
                                <td><?php echo $row->tenmh; ?></td>
                                <td><?php echo $row->soluongban; ?></td>
                                <td><?php echo $row->dongiaban; ?></td>
                                <td><?php echo $row->thanhtienban; ?></td> 
                    <!--            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="index.php?p=cate_del&idTL=1"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?p=cate_edit&idTL=1">Edit</a></td>-->
                            </tr>
<?php } ?>

                    </tbody>

                </table>
            </div>
            <input type="button" onclick="printDiv('printableArea')" value="In Hoá Đơn" />  

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
