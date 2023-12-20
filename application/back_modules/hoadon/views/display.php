


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
                <h1 >Hóa Đơn</h1>
            </div>

            <!-- /.col-lg-12 -->
            <div id="printableArea">

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    
                    <thead> 
                        
                    <tr align="center">
                        <th>STT</th>
                        <th>MÃ HĐ</th>
<!--                        <th>MÃ KH</th>-->
                        <th>NGÀY LẬP HĐ</th>
                        <th>TRẠNG THÁI</th>
                        <th>XEM CHI TIẾT</th>


                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 0;
                        foreach ($detail->result() as $row) {
                            $stt++;
                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $row->hoadon_id; ?></td>
<!--                                <td><?php //echo $row->khachhang_id; ?></td>-->
                                <td><?php echo $row->ngaylaphd; ?></td>
                                <td>
                                    <?php
                                    if ($row->trangthaihd == 1) {
                                        ?><a title="CLick de doi thanh UnPublic" href="<?php echo base_url() . "admin/hoadon/changestatus/" . $row->hoadon_id . '/0'; ?>">Mới Đặt Hàng</a><?php
                                        if ($row->trangthaihd == 2) {
                                            ?><a title="CLick de doi thanh Public" href="<?php echo base_url() . "admin/hoadon/changestatus/" . $row->hoadon_id . '/1'; ?>">Đang Giao Hàng</a><?php
                                        }
                                    } else {
                                        ?><button><a title="CLick de doi thanh Public" href="<?php echo base_url() . "admin/hoadon/changestatus/" . $row->hoadon_id . '/2'; ?>">Đã Hoàn Thành</a></button><?php
                                    }
                                    ?> 
                                </td>
                                <td>

                                    <a href="<?php echo base_url() . "admin/view_hoadon/index/" . $row->hoadon_id ?>">Chi Tiết</a>
                                </td>


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
