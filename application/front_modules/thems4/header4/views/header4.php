
<header class="site-header" role="banner">
    <div class="header-top">
        <div class="container">
            <p>free shipping on all orders (us only)
            </p>
        </div>
    </div>
    <div class="header-bottom on slide-down">
        <div class="container">
            <div class="header-mobile">
                <div class="menu-block visible-phone">
                    <!-- start Navigation Mobile  -->
                    <div id="showLeftPush"></div>
                </div>
                <!-- end Navigation Mobile  --> 
                <div class="customer-area dropdown">
                    <a data-toggle="dropdown" href="#">Dropdown trigger</a>
                    <div class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <p ><a href="account/login.html">My Account</a></p>
                        <div class="wishlist"><a href="pages/wish-list.html" title="Wishlist">My Wishlist</a></div>
                    </div>
                </div>
                <div class="menu-block cart">
                    <p class="top-cart">
                        <span class="icon"> </span>
                        <a href="cart.html">
                            <span class="first">Shopping Cart</span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="header-panel-top">
                <div class="wrapper-top-cart">
                    <p class="top-cart">
                        <a id="cartToggle" href="<?php echo base_url()."giohang"; ?>" >
                            <span class="first">Cart</span>
                           <?php echo Modules::run('giohang/giohang_top'); ?>

                            <i class="fa fa-shopping-cart"></i>                    
                        </a> 
                    </p>
                    <div id="dropdown-cart" style="display:none">
                        <div class="no-items">
                            <p>It appears that your cart is currently empty!</p>
                            <p class="text-continue"><a href="javascript:void(0)">Continue Shopping</a></p>
                        </div>
                        <div class="has-items">
                            <ol class="mini-products-list">  
                            </ol>
                            <div class="summary">
                                <p class="total">
                                    <span class="label" style="color:#000">Total:</span>
                                    <span class="price">$0.00</span> 
                                </p>
                            </div>
                            <div class="actions">
                                <button class="btn" onclick="window.location = 'checkout.html'">Checkout</button>
                            </div>
                            <p class="text-cart"><a href="cart.html">Or View Cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="nav-search">
                    <a class="icon-search" href="javascript:void(0)">Search</a>
                    <form action="https://xdorialife.com/search" method="get" class="input-group search-bar" role="search">
                        <input type="text" name="q" value="" placeholder="Search" class="input-group-field" aria-label="Search Site" autocomplete="off">
                        <span class="input-group-btn">
                            <input type="submit" class="btn" value="Search">
                        </span>
                    </form>
                </div>
                <div class="currency"></div>
            </div>
            <div class="header-panel">
                <div class="row">
                    <h1 class="header-logo col-xs-4 col-sm-push-4">
                        <a href="index.html">
                            <img src="http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/logodd3a.png?10141170344228319957" alt="X-Doria" />
                        </a>
                    </h1>
                    <div class="header-panel-bottom col-xs-4">
                        <div class="top-header ">
                        </div>
                        <!-- End Top Header --> 
                    </div>
                    <div class="nav-search on">
                        <a class="icon-search" href="javascript:void(0)">Search</a>
                        <form action="https://xdorialife.com/search" method="get" class="input-group search-bar" role="search">
                            <input type="text" name="q" value="" placeholder="Search" class="input-group-field" aria-label="Search Site" autocomplete="off">
                            <span class="input-group-btn">
                                <input type="submit" class="btn" value="Search">
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav-bar" role="navigation">
            <div class="header-logo-fix">
                <a href="index.html"><img src="http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/logo_fixdd3a.png?10141170344228319957" alt="X-Doria" /></a>
            </div>
            <div class="container">
                <ul class="site-nav">
                    <li><a href="http://localhost/webgiaodien/" class=""><span>Trang Chủ</span></a></li>
                    <li class="dropdown shop">
                        <a href="#" class=" shop"><span>Shop</span> </a> 	 
                        <ul class="site-nav-dropdown">
                            <?php
                            $stt = 0;
                            foreach ($khoangoai->result() as $row) {
                                $stt++;
                                ?>
                                <li><a href="<?php echo base_url('mathang/listview/' . $row->loaihang_id) ?>" class=""><?php echo $row->tenloaihang; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li >
                        <a href="#" class=" collections"><span>Tin Tức</span> </a> 	 
                    </li>
                    <li><a href="pages/socialize.html" class=""><span>Giới Thiệu</span></a></li>
                    <li><a href="pages/contact-us.html" class=""><span>Liên Hệ</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>