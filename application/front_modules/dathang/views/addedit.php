<?php
if($this->session->userdata('thanhcong')){  // Nếu có session Thành Công
    // Show thông báo
    echo "<b style='color: red;'>".$this->session->userdata('thanhcong') . "</b><br / >";
    // Xóa session
    $this->session->unset_userdata('thanhcong');
}
?>

<?php
if($id){ // Dang Edit
    echo "Chỉnh Sửa DANH MỤC ID $id : ";
}else{
    echo "Thêm Mới DANH MỤC :";
}


?>


<form method="post">
    
    <input type="text" name="ten_danhmuc" placeholder="Nhập tên Danh Mục ...." value="<?php echo $detail[0]->ten_danhmuc;  ?>" />
    <br />
    
    <input type="radio" name="trang_thai" value="0" <?php echo $detail[0]->trang_thai==0?'checked="checked"':''  ?>  /> Ẩn 
    <input type="radio" name="trang_thai" value="1" <?php echo $detail[0]->trang_thai==1?'checked="checked"':''  ?>  /> Hiện
    <br />
    
    <input type="submit" value="Submit" />
</form>