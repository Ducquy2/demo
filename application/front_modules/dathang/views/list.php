<?php
if($this->session->userdata('thanhcong')){  // Nếu có session Thành Công
    // Show thông báo
    echo "<b style='color: red;'>".$this->session->userdata('thanhcong') . "</b><br / >";
    // Xóa session
    $this->session->unset_userdata('thanhcong');
}
?>

<b style="color: blue;">LOẠI HÀNG</b>

<table  border="1">
    <tr style="color: red; font-size: 14px;">
        <td>STT</td>
        <td>ID</td>
        <td>TEN</td>
        <td>SDT</td>
        <td>DIA CHI</td> 
    </tr>
    <?php
    $stt = 0;
    foreach($list as $k=>$v){
        $stt++;
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $v->MAKH; ?></td>
            <td><?php echo $v->TENKH; ?></td>
            <td><?php echo $v->SDT; ?></td>
            <td><?php echo $v->DIACHI; ?></td>
         
        </tr>
        <?php
    } 
    ?>
    
</table>
<?php 

for( $i = 1 ; $i <= $totalPage ; $i++){
    ?>
    <a style="color: <?php echo $page==$i?"red":"blue"; ?>;" href="<?php echo base_url().$classMain."?page=$i"; ?>"><?php echo $i; ?></a>
    <?php
}
 

?>