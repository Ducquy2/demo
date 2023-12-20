<main class="container main-content" role="main">
    <style>
                           .main-content.main-content {
                           padding-top: 200px;
                           }
                        </style>
<?php
if($this->session->userdata('thanhcong')){  // Nếu có session Thành Công
    // Show thông báo
    echo "<b style='color: black;'>".$this->session->userdata('thanhcong') . "</b><br / >";
    // Xóa session
    $this->session->unset_userdata('thanhcong');
}
?>

    
        
   
<a class="btn btn-primary" href="<?php echo base_url() ?>">Về trang chủ</a>
</main>