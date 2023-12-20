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



<div id="header" class="navbar navbar-default navbar-fixed-top" role="navigation">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                     <span class="sr-only">Toggle navigation</span>
                     <i class="fa fa-bars"></i>
                     </button>
                     <a href="indexf986.html?osCsid=245226a576e8f6c75870935e3c3067dd" title="POXI Fashion"><img src="images/store_logo.png" alt="POXI Fashion" width="142" height="50" /></a>
                  </div>
                  <nav class="navbar-collapse collapse" id="menu">
                     <ul class="menu nav navbar-nav">
                          <li class="">
                              <a href="<?php echo base_url() ?>">Trang Chủ <i class=""></i></a>
                           <ul class="submenu animated fadeIn">
                           </ul>
                        </li>
                          <?php
                            $stt = 0;
                           foreach ($khoangoai->result() as $row){
                                $stt++;
                          ?>
                        <li class="">
                           <a href="<?php echo base_url('mathang/listview/'.$row->loaihang_id) ?>"><?php echo $row->tenloaihang; ?><i class=""></i></a>
                           <ul class="submenu animated fadeIn">
                           </ul>
                        </li>
                           <?php } ?>
                        
                        <li class="hidden-lg hidden-md"><a href="shopping_cartf986.html?osCsid=245226a576e8f6c75870935e3c3067dd">Giỏ Hàng</a></li>
                     </ul>
                     <div class="mini-cart navbar-right visible-lg visible-md">
                        <a class="summary" href=""><i class="fa fa-shopping-cart"></i><span class="count">( 0 ) - 0 VNĐ</span></a>
                        <div class="submenu animated fadeIn">
                           <div class="cart-none">Giỏ hàng đang trống.</div>
                        </div>
                     </div>
                     <form name="quick_find_header" action="http://poxi.vn/advanced_search_result.php?osCsid=245226a576e8f6c75870935e3c3067dd" method="get" class="advanced-search-form navbar-form navbar-right">
                        <input type="hidden" name="main_page" value="advanced_search_result" />
                        <input type="hidden" name="search_in_description" value="1" />
                        <div class="row">
                           <div class="col-xs-12" style="padding-left:0;padding-right:0">
                              <input class="keyword form-control input-sm" type="text" name="keywords" placeholder="Tìm..." />
                           </div>
                        </div>
                     </form>
                     <ul class="top-nav nav navbar-nav navbar-right">
                        <li><a href="loginf986.html?osCsid=245226a576e8f6c75870935e3c3067dd" title="Đăng Nhập">Đăng Nhập</a></li>
                        <li><a href="create_accountf986.html?osCsid=245226a576e8f6c75870935e3c3067dd" title="Tạo Tài Khoản">Tạo Tài Khoản</a></li>
                     </ul>
                  </nav>
               </div>
            </div>