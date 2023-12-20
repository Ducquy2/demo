<!--<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags 
    <title>Bootstrap 101 Template</title>

     Bootstrap 
    <link href=<?php echo base_url()."css/bootstrap.min.css " ?>rel="stylesheet">
     <link href=<?php echo base_url()."css/starter-template.css " ?>rel="stylesheet">

  </head>
  
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gioi Thieu</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Trang Chu</a></li>
            <li><a href="#about">San Pham</a></li>
            <li><a href="#">Loai San Pham</a></li>
          </ul>
        </div>/.nav-collapse 
      </div>
    </nav> -->



<nav id="top">
   <div class="container">
      <div id="top-links" class="nav pull-right">
         <ul class="list-inline">
            <li><a href="index2724.html?route=information/contact"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">123456789</span></li>
            <li class="dropdown">
               <a href="indexe223.html?route=account/account" title="Tài khoản" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Tài khoản</span> <span class="caret"></span></a>
               <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="index5502.html?route=account/register">Đăng ký</a></li>
                  <li><a href="indexe223.html?route=account/login">Đăng nhập</a></li>
               </ul>
            </li>
            <li><a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="Yêu thích (0)"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Yêu thích (0)</span></a></li>
            <li><a href="index630e.html?route=checkout/cart" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Giỏ hàng</span></a></li>
            <li><a href="index630e.html?route=checkout/checkout" title="Thanh toán"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Thanh toán</span></a></li>
         </ul>
      </div>
   </div>
</nav>
<welcome>
   <div class="container">
      <div class="row">
         <div class="col-sm-4">
            <div id="logo">
            </div>
         </div>
         <div class="col-sm-5">
            <div id="search" class="input-group">
               <input type="text" name="search" value="" placeholder="Từ khóa..." class="form-control input-lg" />
               <span class="input-group-btn">
               <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
               </span>
            </div>
         </div>
         <div class="col-sm-3">
            <div id="cart" class="btn-group btn-block">
               <button type="button" data-toggle="dropdown" data-loading-text="Đang xử lý..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">0 sản phẩm - 0đ</span></button>
               <ul class="dropdown-menu pull-right">
                  <li>
                     <p class="text-center">Giỏ hàng đang trống!</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</welcome>
<div class="container">
   <nav id="menu" class="navbar">
      <div class="navbar-welcome"><span id="category" class="visible-xs">Danh mục</span>
         <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav">
   
 <li><a href="<?php echo base_url() ?>">Trang Chủ</a></li>
         <?php
    $stt = 0;
   foreach ($khoangoai->result() as $row){
        $stt++;
        ?>
          
            <li><a href="<?php echo base_url('mathang/listview/'.$row->loaihang_id) ?>"><?php echo $row->tenloaihang; ?></a></li>
         <?php  } ?>
         </ul>
      </div>
   </nav>
</div>