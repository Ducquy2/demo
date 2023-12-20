<!-- Themes2 -->
<!--<div id="content" class="col-sm-9">
   <div class="row">
      <div class="col-sm-8">
<?php
foreach ($detail->result() as $row) {
    ?>
             <ul class="thumbnails">
                <li><a class="thumbnail" href=" <?php echo site_url('mathang/detail/' . $row->slug) ?>" title="Áo Thun Body Sọc Cổ Đổ"><img src=" <?php echo $row->giamh ?>" title="Áo Thun Body Sọc Cổ Đổ" alt="Áo Thun Body Sọc Cổ Đổ"></a></li>
                <li class="image-additional"><a class="thumbnail" href=" title="Áo Thun Body Sọc Cổ Đổ"> <img src="" title="Áo Thun Body Sọc Cổ Đổ" alt="Áo Thun Body Sọc Cổ Đổ"></a></li>
                <li class="image-additional"><a class="thumbnail" href="" title="Áo Thun Body Sọc Cổ Đổ"> <img src="" title="Áo Thun Body Sọc Cổ Đổ" alt="Áo Thun Body Sọc Cổ Đổ"></a></li>
             </ul>
             <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-description" data-toggle="tab">Mô tả</a></li>
                <li><a href="#tab-review" data-toggle="tab">Đánh giá (0)</a></li>
             </ul>
             <div class="tab-content">
                <div class="tab-pane active" id="tab-description">
                   <p>Áo Thun Body Sọc Cổ Đổ Sơn Nguyễn 58101 - Kiểu Dáng Đơn Giản, Trẻ Trung – Cực Kỳ Dễ Phối Theo Style Năng Động, Hiện Đại.</p>
                   <h3><strong>Điểm nổi bật</strong></h3>
                   <p>- Kiểu dáng:&nbsp; Áo cổ đổ, tay ngắn.</p>
                   <p>- Chất liệu: Thun cotton lạnh</p>
                   <p>- Màu sắc: Trắng sọc đen</p>
                   <p>- Size: S, M, L, XL</p>
                </div>
                <div class="tab-pane" id="tab-review">
                   <form class="form-horizontal" id="form-review">
                      <div id="review"></div>
                      <h2>Viết đánh giá</h2>
                      <div class="form-group required">
                         <div class="col-sm-12">
                            <label class="control-label" for="input-name">Họ tên</label>
                            <input type="text" name="name" value="" id="input-name" class="form-control">
                         </div>
                      </div>
                      <div class="form-group required">
                         <div class="col-sm-12">
                            <label class="control-label" for="input-review">Đánh giá của bạn</label>
                            <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                            <div class="help-block"><span style="color: #FF0000;">Lưu ý:</span> không hỗ trợ HTML!</div>
                         </div>
                      </div>
                      <div class="form-group required">
                         <div class="col-sm-12">
                            <label class="control-label">Điểm</label>
                            &nbsp;&nbsp;&nbsp; Bình thường&nbsp;
                            <input type="radio" name="rating" value="1">
                            &nbsp;
                            <input type="radio" name="rating" value="2">
                            &nbsp;
                            <input type="radio" name="rating" value="3">
                            &nbsp;
                            <input type="radio" name="rating" value="4">
                            &nbsp;
                            <input type="radio" name="rating" value="5">
                            &nbsp;Tốt
                         </div>
                      </div>
                      <div class="buttons clearfix">
                         <div class="pull-right">
                            <button type="button" id="button-review" data-loading-text="Đang xử lý..." class="btn btn-primary">Tiếp tục</button>
                         </div>
                      </div>
                   </form>
                </div>
             </div>
          </div>
          <div class="col-sm-4">
             <div class="btn-group">
                <button type="button" data-toggle="tooltip" class="btn btn-default" title="" onclick="wishlist.add('58');" data-original-title="Thêm yêu thích"><i class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" class="btn btn-default" title="" onclick="compare.add('58');" data-original-title="Thêm so sánh"><i class="fa fa-exchange"></i></button>
             </div>
             <h1><?php echo $row->tenmh ?></h1>
             <ul class="list-unstyled">
                <li>Mã hàng: Thời Trang Nữ</li>
                <li>Tình trạng: Còn hàng</li>
             </ul>
             <ul class="list-unstyled">
                <li>
                   <h2><?php echo $row->giamh ?></h2>
                </li>
             </ul>
             <div id="product">
                <div class="form-group">
                   <label class="control-label" for="input-quantity">Số lượng</label>
                   <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control">
                   <input type="hidden" name="product_id" value="58">
                   <br>
                   <button type="button" id="button-cart" data-loading-text="Đang xử lý..." class="btn btn-primary btn-lg btn-block">Mua hàng</button>
                </div>
             </div>
             <div class="rating">
                <p>
                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                   <a href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 đánh giá</a> / <a href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Viết đánh giá</a>
                </p>
                <hr>
                 AddThis Button BEGIN 
                <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                <script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                 AddThis Button END 
             </div>
          </div>
<?php } ?>
   </div>
</div>-->
<!-- End Themes 2 -->


<!-- Themes 3 -->
<!--<div class="container">
   <div class="row">
      <div class="col-xs-12">
         <div class="block product-detail" id="productGeneral">
            <div class="col-xs-12"></div>
            <div class="additional-images col-md-1 col-sm-1 hidden-xs">
               <div class="row">
                  <a data-jcarouselcontrol="true" class="jcarousel-control jcarousel-prev" href="#"><i class="fa fa-chevron-up"></i></a>
                  <div data-jcarousel="true" id="additional-images" class="jcarousel">
                     <div style="left: 0px; top: 0px;" class="jcarousel-list">
                        <div class="jcarousel-item"><a href="#" data-image="images/dam-ren-xoe-d37415-1.jpg" data-zoom-image="images/dam-ren-xoe-d37415-1.jpg"><img class="img-responsive" src="images/thumb/dam-ren-xoe-d37415-1.jpg" title="Đầm ren xòe D37415" alt="Đầm ren xòe D37415"></a></div>
                        <div class="jcarousel-item"><a href="#" data-image="images/dam-ren-xoe-d37415-2.jpg" data-zoom-image="images/dam-ren-xoe-d37415-2.jpg"><img class="img-responsive" src="images/thumb/dam-ren-xoe-d37415-2.jpg" title="Đầm ren xòe D37415" alt="Đầm ren xòe D37415"></a></div>
                        <div class="jcarousel-item"><a href="#" data-image="images/dam-ren-xoe-d37415-3.jpg" data-zoom-image="images/dam-ren-xoe-d37415-3.jpg"><img class="img-responsive" src="images/thumb/dam-ren-xoe-d37415-3.jpg" title="Đầm ren xòe D37415" alt="Đầm ren xòe D37415"></a></div>
                     </div>
                  </div>
                  <a data-jcarouselcontrol="true" class="jcarousel-control jcarousel-next" href="#"><i class="fa fa-chevron-down"></i></a>
               </div>
            </div>
            <div class="product-image col-lg-5 col-md-6 col-sm-6">
               <div class="navNextPrevWrapper">
                  <span class="navNextPrevList"><a class="" href="">« Sản Phẩm Trước</a> • </span>						<span class="navNextPrevList"> <a href="">Tất Cả</a> </span>
                  <span class="navNextPrevList"> • <a class="" href="">Sản Phẩm Tiếp Theo »</a></span>					
               </div>
               <div id="productMainImage" class="main-image">
                  <div class="controlBtn prevBtn"></div>
                  <a href="#"><img id="main-image" class="at_include" src="<?php echo base_url() . "/uploads/" . $row->hinh; ?>" data-zoom-image="images/dam-ren-xoe-d37415-1.jpg" title="" alt=""></a>
                  <div class="controlBtn nextBtn"></div>
               </div>
            </div>
            <script type="text/javascript">
               $(".prevBtn").click(function(){var a=$("img[id=main-image]").attr("src"),t=$('a[data-image="'+a+'"]').parent().prev(),i=$('a[href="#"]',t).attr("data-image"),n=$('a[href="#"]',t).attr("data-zoom-image");i.length>0&&n.length>0&&($("img[id=main-image]").attr("src",i).attr("data-zoom-image",n),$('div[class="zoomWindow"]').css("background-image","url("+n+")"))}),$(".nextBtn").click(function(){var a=$("img[id=main-image]").attr("src"),t=$('a[data-image="'+a+'"]').parent().next(),i=$('a[href="#"]',t).attr("data-image"),n=$('a[href="#"]',t).attr("data-zoom-image");i.length>0&&n.length>0&&($("img[id=main-image]").attr("src",i).attr("data-zoom-image",n),$('div[class="zoomWindow"]').css("background-image","url("+n+")"))});
            </script>
            <div class="product-info col-lg-5 col-md-5 col-sm-5">
               <h1 class="product-name"><?php echo $row->tenmh ?></h1>
               <div class="product-price"><?php echo $row->giamh ?></div>
               <div class="product-description">
                  <p>- vải ren chất liệu cotton</p>
                  <p>- lót thun chất liệu polyester</p>
               </div>
               <ul class="additional-info list-unstyled">
                  <li>Màu: Xanh đen</li>
                  <li>Size: S, M, L &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="bodySizeBtn" onclick="$('.sizeTable_container').slideToggle('fast');">Tham khảo bảng size</span></li>
                  <div class="sizeTable_container">
                     <div class="closeBtn" onclick="$('.sizeTable_container').slideToggle('fast');"></div>
                     <div class="content"><img src="images/body-size-table.png" alt=""></div>
                  </div>
               </ul>
               <form name="cart_quantity" action="http://poxi.vn/product_info.php?products_id=559&amp;action=add_product" method="post">
                  <div class="product-attributes form-group">
                     <div class="form-group">
                        <label class="option-name control-label"><label class="attribsSelect">Size</label></label>
                        <div class="option-select">
                           <select name="id[2]" class="form-control">
                              <option value="1">S</option>
                              <option value="2">M</option>
                              <option value="3">L</option>
                           </select>
                        </div>
                     </div>
                     <div class="addtocart form-group">
                        <span class="product-quantity">
                        <a href="#" class="minus" data-id="quantity"><i class="fa fa-caret-down"></i></a>
                        <input id="quantity" class="quantity form-control" name="cart_quantity" value="1" type="text">
                        <input name="products_id" value="559" type="hidden">
                        <a href="#" class="plus" data-id="quantity"><i class="fa fa-caret-up"></i></a>
                        </span>
                        <input class="btn btn-default" value="Thêm Vào Giỏ Hàng" type="submit">
                        <input class="btn btn-default" value="Mua Ngay" id="buynowBtn" type="button">
                     </div>
                     <script type="text/javascript">
                        jQuery("#buynowBtn").click(function(){quantityForm=$('form[name="cart_quantity"]'),buynowActionURL=quantityForm.attr("action"),newURL=buynowActionURL.replace("add_product","buy_now"),quantityForm.attr("action",newURL),quantityForm.submit()});
                     </script>
                  </div>
               </form>
               <script type="text/javascript">
                  var fb_product_link = "product_info6cb1.html?products_id=559";
               </script>
               <script type="text/javascript" src="includes/templates/zenn/js/sharing_button.js"></script>
               <div class="product_status">
                  Tình trạng: <span class="instock">Còn hàng</span>						
               </div>
               <div class="product-share">
                  <div class="addthis_toolbox addthis_default_style ">
                     <div class="pd_social_buttons">
                        <div id="fb-root" class=" fb_reset">
                           <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                              <div></div>
                           </div>
                           <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                              <div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://static.ak.facebook.com/connect/xd_arbiter/44OwK74u0Ie.js?version=41#channel=f2d057537ec4c88&amp;origin=file%3A%2F%2F" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter/44OwK74u0Ie.js?version=41#channel=f2d057537ec4c88&amp;origin=file%3A%2F%2F" style="border: none;"></iframe></div>
                           </div>
                        </div>
                        <script>(function(d, s, id) {						var js, fjs = d.getElementsByTagName(s)[0];						if (d.getElementById(id)) return;						js = d.createElement(s); js.id = id;						js.src = "../connect.facebook.net/en_US/all.js#xfbml=1";						fjs.parentNode.insertBefore(js, fjs);					}(document, 'script', 'facebook-jssdk'));					</script>					
                        <div class="fb-like fb_iframe_widget" data-href="product_info6cb1.html?products_id=559" data-layout="button" data-action="like" data-show-faces="false" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=file%3A%2F%2F%2FD%3A%2Fpoxi%2Fpoxi%2Fpoxi.vn%2Fproduct_info6cb1.html%3Fproducts_id%3D559&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=false"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f1e6afb0b53d808" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F44OwK74u0Ie.js%3Fversion%3D41%23cb%3Df1b3057d87f8008%26domain%3D%26origin%3Dfile%253A%252F%252F%252Ff2d057537ec4c88%26relation%3Dparent.parent&amp;container_width=0&amp;href=file%3A%2F%2F%2FD%3A%2Fpoxi%2Fpoxi%2Fpoxi.vn%2Fproduct_info6cb1.html%3Fproducts_id%3D559&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=false" style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span></div>
                        <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1470031590918" name="I0_1470031590918" src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;annotation=none&amp;hl=vi&amp;origin=file%3A%2F%2F&amp;url=file%3A%2F%2F%2FD%3A%2Fpoxi%2Fpoxi%2Fpoxi.vn%2Fproduct_info5c4c.html%3Fproducts_id%3D559%26osCsid%3D245226a576e8f6c75870935e3c3067dd&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.bxdITvSQaaE.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCMM4KPsgjs532Br4Bb-62pR2aAnMw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1470031590918&amp;parent=file%3A%2F%2F&amp;pfname=&amp;rpctoken=41092146"></iframe></div>
                        <div class="g-plusone" data-size="medium" data-annotation="none" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                        <script type="text/javascript">						window.___gcfg = {lang: 'vi'};						(function() {						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;						po.src = '../apis.google.com/js/platform.js';						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);						})();					</script>					
                        <div id="pinterest-btn">
                           <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png"></a>						<script type="text/javascript" async="" src="//assets.pinterest.com/js/pinit.js"></script>					
                        </div>
                        <div id="tweet-btn">
                           <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="none">Tweet</a>						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="../platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>					
                        </div>
                     </div>
                     <div class="atclear"></div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         
         <script type="text/javascript" src="includes/templates/zenn/js/listing-mouseevent.js"></script>
      </div>
   </div>
</div>-->
<!-- End Themes 3 -->






<main class="container main-content" role="main">
    <style>
        .main-content.main-content {
            padding-top: 100px;
        }
    </style>
    <div id= "hiddenProductId" style="display:none;" data-product-id="141381901"></div>
    <div class="row">
        <div class="breadcrumb">
            <style>
                .breadcrumb {
                    padding-left: 20px;
                }
            </style>
            <a href="../index.html" title="Back to the frontpage">Home</a>  
            <span class="separator">|</span> 
            <span>Defense 720º for iPhone SE, iPhone 5s and iPhone 5</span>
        </div>
    </div>
    <div class="row">

        <div class="col-xs-12 col-xs-12">
            <div itemscope itemtype="http://schema.org/Product" class="product">
                <meta itemprop="url" content="defense-720-5s-cases.html">
                <meta itemprop="image" content="http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/products/415255_Defense720_iPhone-5_X-Doria_Black_Angle_grande9bef.jpg?v=1469643040">
                <meta itemprop="priceCurrency" content="USD">
                <div class="row product-top">
                    <div class="col-sm-3 product-img-box ">
                        <div class="row product-images">
                            <div class="product-photo-container">
                                <img id="product-featured-image" src="<?php echo base_url() . "/uploads/" . $row->hinh; ?>" alt="Defense 720º for iPhone SE, iPhone 5s and iPhone 5" />
                            </div>
                        </div>
                    </div>
                    <form action="<?php echo base_url() . "dathang/index" ?>"  method="post"  >
                        <div class="col-sm-6 product-shop">
                            <!--Copy đoạn này -->
                            <input type="hidden" name="MAMH" value="<?php echo $row->mathang_id; ?>" />
                            <input type="hidden" name="GIAMH" value="<?php echo $row->giamh; ?>" />
                            <input type="hidden" name="soluong" value="1" size="2" id="input-quantity" class="form-control">
                            <input type="hidden" name="TENMH" value="<?php echo $row->tenmh; ?>" />
                            <input type="hidden" name="hinh" value="<?php echo htmlspecialchars($row->hinh); ?>">
                            <!-- Tới Đoạn Này -->
                            <div itemprop="offers" itemtype="http://schema.org/Offer">

                                <header class="product-title ">
                                    <
                                    <h2 itemprop="name">
                                        <?php echo $row->tenmh ?>
                                        <span class="smaller"><?php echo $row->mota ?></span>
                                    </h2>
                                </header>

                                <link itemprop="availability" href="http://schema.org/InStock">

                                <div class="reviews-share">
                                    <div class="share_toolbox">
                                        <ul>
                                            <li><a href="https://twitter.com/share?text=Defense%20720%c2%ba%20for%20iPhone%20SE,%20iPhone%205s%20and%20iPhone%205&amp;url=https://xdorialife.com/products/defense-720-5s-cases" class="icon-social"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://xdorialife.com/products/defense-720-5s-cases" class="icon-social"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="../../pinterest.com/pin/create/button/index5f89.html?url=https://xdorialife.com/products/defense-720-5s-cases&amp;media=//cdn.shopify.com/s/files/1/0115/0272/products/415255_Defense720_iPhone-5_X-Doria_Black_Angle_large.jpg?v=1469643040&amp;description=Defense%20720%c2%ba%20for%20iPhone%20SE,%20iPhone%205s%20and%20iPhone%205" class="icon-social"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="prices">
                                    <span class="price" itemprop="price"><?php echo $row->giamh ?></span>
                                </div>



                                <style>
                                    /* Swatches Styles */
                                    .swatch { margin: 0 0 11px; }
                                    /* Label */
                                    .swatch .header { margin: 0; border: none; padding: 0 0 10px; color: #000; letter-spacing:3px; font-size:14px; text-transform:uppercase;}
                                    /* Hide radio buttons.*/
                                    .swatch input { display:none; }
                                    .swatch label { border: 1px solid #cbcbcb; float: left; font-weight: 400; font-size: 11px; min-width: 48px!important;
                                                    height: 48px!important; line-height: 32px; margin: 0; text-align: center; text-transform: uppercase; white-space: nowrap;
                                                    cursor: pointer; }
                                    .swatch-element label { padding:0 5px; }
                                    .color.swatch-element label { padding:0; }
                                    /* Styling selected swatch */
                                    /* Slightly raised */
                                    .swatch input:checked + label ,
                                    .swatch label:hover { border-color: #fff; border-width: 2px; line-height: 28px; outline: 1px solid #000;} 
                                    .swatch .swatch-element {
                                        float:left;
                                        -webkit-transform:translateZ(0); /* webkit flicker fix */
                                        -webkit-font-smoothing:antialiased; /* webkit text rendering fix */
                                        /* Spacing between buttons */
                                        margin: 0 15px 15px 0;
                                        /* To position the sold out graphic and tooltip */
                                        position:relative;
                                    }
                                    /* Image with the cross in it */
                                    .crossed-out { position:absolute; width:100%; height:100%; left:0; top:0; }
                                    .swatch .swatch-element .crossed-out { display:none; }
                                    .swatch .swatch-element.soldout .crossed-out { display:block; }
                                    .swatch .swatch-element.soldout label { 
                                        filter: alpha(opacity=60); /* internet explorer */
                                        -khtml-opacity: 0.6;      /* khtml, old safari */
                                        -moz-opacity: 0.6;       /* mozilla, netscape */
                                        opacity: 0.6;           /* fx, safari, opera */
                                    }
                                    /* Tooltips */
                                    .swatch .tooltip {
                                        text-align:center;
                                        background:gray;
                                        color:#fff;
                                        bottom:100%;
                                        padding: 10px;
                                        display:block;
                                        position:absolute;
                                        width:100px;
                                        left:-28px;
                                        margin-bottom:15px;
                                        /* Make it invisible by default */
                                        filter:alpha(opacity=0);
                                        -khtml-opacity: 0;
                                        -moz-opacity: 0;
                                        opacity:0;
                                        visibility:hidden;
                                        /* Animations */
                                        -webkit-transform: translateY(10px);
                                        -moz-transform: translateY(10px);
                                        -ms-transform: translateY(10px);
                                        -o-transform: translateY(10px);
                                        transform: translateY(10px);
                                        -webkit-transition: all .25s ease-out;
                                        -moz-transition: all .25s ease-out;
                                        -ms-transition: all .25s ease-out;
                                        -o-transition: all .25s ease-out;
                                        transition: all .25s ease-out;
                                        -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
                                        -moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
                                        -ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
                                        -o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
                                        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
                                        z-index: 10000;
                                        -moz-box-sizing:border-box; 
                                        -webkit-box-sizing:border-box; 
                                        box-sizing:border-box;
                                    }
                                    .swatch .tooltip:before { bottom:-20px; content:" "; display:block; height:20px; left:0; position:absolute; width:100%; }
                                    /* CSS triangle */
                                    .swatch .tooltip:after { border-left:solid transparent 10px; border-right: solid transparent 10px; border-top:solid gray 10px; bottom:-10px; content:" "; height:0; left:50%; margin-left:-13px; position:absolute; width:0; }
                                    .swatch .swatch-element:hover .tooltip { filter:alpha(opacity=100); opacity:1; visibility:visible; -webkit-transform:translateY(0px); -moz-transform:translateY(0px); -ms-transform:translateY(0px); -o-transform:translateY(0px); transform:translateY(0px); }
                                    .swatch.error { background-color:#E8D2D2!important; color:#333!important; padding:1em; border-radius:5px; }
                                    .swatch.error p { margin:0.7em 0; }
                                    .swatch.error p:first-child { margin-top:0; }
                                    .swatch.error p:last-child { margin-bottom:0; }
                                    .swatch.error code { font-family: monospace; }
                                </style>
                                <style>
                                    label[for="product-select-option-0"] { display: none; }
                                    #add-to-cart-form .selector-wrapper {display:none}
                                    #product-select-option-0 { display: none; }
                                    #product-select-option-0 + .custom-style-select-box { display: none !important; }
                                </style>
                                <script>//jQuery(window).load(function() { jQuery('.product-shop .selector-wrapper:eq(0)').hide(); });</script>
                                <div class="swatch clearfix" data-option-index="0">
                                    <div class="header">Color</div>
                                    <div data-value="Black" class="swatch-element color black available">
                                        <div class="tooltip">Black</div>
                                        <input id="swatch-0-black" type="radio" name="option-0" value="Black" checked  />
                                        <label for="swatch-0-black" style="background-color: black; background-image: url(http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/blackdd3a.jpg?10141170344228319957)">
                                            <img class="crossed-out" src="http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/soldoutdd3a.png?10141170344228319957" />
                                        </label>
                                    </div>
                                    <script>
                                        jQuery('.swatch[data-option-index="0"] .black').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                    </script>
                                    <div data-value="Blue" class="swatch-element color blue available">
                                        <div class="tooltip">Blue</div>
                                        <input id="swatch-0-blue" type="radio" name="option-0" value="Blue"  />
                                        <label for="swatch-0-blue" style="background-color: blue; background-image: url(http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/bluedd3a.jpg?10141170344228319957)">
                                            <img class="crossed-out" src="http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/soldoutdd3a.png?10141170344228319957" />
                                        </label>
                                    </div>
                                    <script>
                                        jQuery('.swatch[data-option-index="0"] .blue').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                                    </script>
                                    <div data-value="Purple" class="swatch-element color purple soldout">
                                        <div class="tooltip">Purple</div>
                                        <input id="swatch-0-purple" type="radio" name="option-0" value="Purple" disabled />
                                        <label for="swatch-0-purple" style="background-color: purple; background-image: url(http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/purpledd3a.jpg?10141170344228319957)">
                                            <img class="crossed-out" src="http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/soldoutdd3a.png?10141170344228319957" />
                                        </label>
                                    </div>
                                    <div class="currentColor">
                                        Black
                                    </div>
                                </div>

                            </div>


                            <div style="display:none;">
                                <label for="quantity">Quantity: </label>
                                <div class="dec button">-</div>
                                <input type="text" id="quantity" name="quantity" value="1">
                                <div class="inc button">+</div>
                                <script>
                                    jQuery(".button").on("click", function () {
                                        var oldValue = jQuery("#quantity").val(),
                                                newVal = 1;

                                        if (jQuery(this).text() == "+") {
                                            newVal = parseInt(oldValue) + 1;
                                        } else if (oldValue > 1) {
                                            newVal = parseInt(oldValue) - 1;
                                        }

                                        jQuery("#quantity").val(newVal);

                                    });
                                </script>
                            </div>
                            <input type="submit" name="add" class="btn" id="product-add-to-cart" value="Đặt Hàng">          
                            

                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <script src="http://localhost/webgiaodien/includes/cdn.shopify.com/s/assets/themes_support/option_selection-a1983f26acff8c010f670901edcebf3812fe9ae764ada6a0bb595a82e4a95744.js" type="text/javascript"></script>
    </div>
</div>
<div class="productConditions">
    <ul>
        <li>Free Shipping</li>
        <li>Free Returns</li>
        <li>1 Year Warranty</li>
    </ul>
</div>
<div class="product-description" style="margin-top:50px;">
    <h3>Defense 720° iPhone SE, iPhone 5s and iPhone 5 case is the ultimate grip iPhone Case. Defense 720°takes our most popular product, Defense 360º, above and beyond to an incredible new level of protection. These <a href="../collections/iphone-5s-5-cases.html">iPhone 5s protective cases</a> are designed with a rubber bumper and a distinctive, alternating matte/glossy pattern that provides a no-slip grip for your iPhone SE, iPhone 5s and iPhone 5.</h3>
    <p>Defense 720<a href="../collections/iphone-5s-5-cases.html"> iPhone SE, iPhone 5s and iPhone 5 cases</a> are clear iPhone 5s cases with incredible full-screen, hard-plastic protective front shield that completely covers your screen but still allows total control. To provided additional protection, we added new and improved rear armor that combines a no-slip grip, protective iphone bumper with a sturdy rear shield.</p>
    <p>Defense 720º's two-piece construction easily snaps together to give your iPhone cases all-over protection from scratches, impacts, bumps and other hazards.</p>
    <ul>
        <li>Tough Grip iPhone SE, iPhone 5s and iPhone 5 case</li>
        <li>Full screen protection, full touch control</li>
        <li>Protects your device, front, sides and back from scratches, drops and impacts</li>
        <li>Side bumper adds real grip and control</li>
        <li>Two piece design easily snaps together for a secure fit</li>
    </ul>
</div>
</main>
<div>
    <div class="full-width">
    </div>
</div>
<main class="container main-content description" role="main">
    <script src="http://localhost/webgiaodien/includes/ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js" type="text/javascript"></script>
    <script src="http://localhost/webgiaodien/includes/cdn.shopify.com/s/files/1/0115/0272/t/16/assets/jquery.products.mindd3a.js?10141170344228319957" type="text/javascript"></script>
    <section class="recently-viewed-products">
        <h2>Recently Viewed</h2>
        <div class="products-grid" id="recently-viewed-products-grid">
        </div>
    </section>
    <script id="recently-viewed-product-grid-template"  type="text/x-jquery-tmpl">
        <div class="    no_crop_image  grid-item product-item  {{if !available}} sold-out {{/if}} {{if compare_at_price_min > price_min}} on-sale {{/if}}"  id="product-${id}">
        <div class="product-top">
        <div class="product-image">
        <a href="${url}" class="product-grid-image">
        <img src="${Shopify.Products.resizeImage(featured_image, "large")}" alt="${featured_image.alt}"/>
        <div class="hover"></div>
        </a>
        <div class="product-label">
        {{if compare_at_price_min > price_min}} 
        <strong class="label">Sale</strong>
        {{/if}}
        {{if !available}} 
        <strong class="sold-out-label">Sold Out</strong>
        {{/if}}
        </div>
        </div>
        </div>

        <div class="product-bottom">
        <a class="product-title" href="${url}">${title}</a>	

        <div class="price-box">   
        {{if compare_at_price_min > price_min}} 
        <p class="sale">
        <span class="old-price"> {{html Shopify.formatMoney(compare_at_price_min, window.money_format)}}</span>
        <span class="special-price">{{if price_varies}}<em>from </em>{{/if}}{{html Shopify.formatMoney(price_min, window.money_format)}}</span>
        </p>
        {{else}}
        <p class="regular-product">
        <span >{{if price_varies}}<em>from </em>{{/if}}{{html Shopify.formatMoney(price_min, window.money_format)}}</span>
        </p>
        {{/if}}
        </div>

        <div class="action">
        <form action="/cart/add" method="post" class="variants" id="product-actions-${id}" enctype="multipart/form-data" style="padding:0px;">    
        {{if !available}} 
        <input class="btn add-to-cart-btn" type="submit" value="Unavailable" disabled="disabled" />
        {{else variants.length > 1 }}
        <input class="btn" type="button" onclick="window.location.href='${url}'" value="Select options" />
        {{else}}
        <input type="hidden" name="id" value="${variants[0].id}" />      
        <input class="btn add-to-cart-btn" type="submit" value="Add to Cart" />
        {{/if}}
        </form>
        </div>    
        </div>
        </div>
    </script>
    <script>
                                    Shopify.Products.showRecentlyViewed({
                                        howManyToShow: 3,
                                        wrapperId: 'recently-viewed-products-grid',
                                        templateId: 'recently-viewed-product-grid-template',
                                        onComplete: function () {
                                            if (jQuery("#recently-viewed-products-grid").children().length > 0) {
                                                jQuery(".recently-viewed-products").show();
                                                if (window.product_image_resize) {
                                                    jQuery('#recently-viewed-products-grid img').fakecrop({
                                                        fill: window.images_size.is_crop,
                                                        widthSelector: ".products-grid .product-image",
                                                        ratioWrapper: window.images_size
                                                    });
                                                }

                                                if (window.show_multiple_currencies) {
                                                    Currency.convertAll(window.shop_currency, jQuery('#currencies').val(), 'span.money', 'money_format');
                                                }

                                                jQuery("#recently-viewed-products-grid").owlCarousel({
                                                    autoPlay: 8000,
                                                    scrollPerPage: true,
                                                    slideSpeed: 500,
                                                    stopOnHover: true,
                                                    navigation: true,
                                                    itemsTablet: [767, 3],
                                                    itemsTabletSmall: [721, 2]
                                                });
                                                if (jQuery(".spr-badge").length > 0) {
                                                    return window.SPR.registerCallbacks(), window.SPR.initRatingHandler(), window.SPR.initDomEls(), window.SPR.loadProducts(), window.SPR.loadBadges();
                                                }
                                            }
                                        }
                                    });
    </script>
    <div id="orankl-reviews"
         data-store-key="21a0bec8-22ae-4f3c-ac59-053e2d3ec812"
         data-product-name="Defense 720º for iPhone SE, iPhone 5s and iPhone 5"
         data-product-key="141381901"
         data-product-image-url="http://cdn.shopify.com/s/files/1/0115/0272/products/415255_Defense720_iPhone-5_X-Doria_Black_Angle_large.jpg?v=1469643040"
         data-product-description="Defense 720° iPhone SE, iPhone 5s and iPhone 5 case is the ultimate grip iPhone Case. Defense 720°takes our most popular product, Defense 360º, above and beyond to an incredible new level of protection. These iPhone 5s protective cases are designed with a rubber bumper and a distinctive, alternating matte/glossy pattern that provides a no-slip grip for your iPhone SE, iPhone 5s and iPhone 5.
         Defense 720 iPhone SE, iPhone 5s and iPhone 5 cases are clear iPhone 5s cases with incredible full-screen, hard-plastic protective front shield that completely covers your screen but still allows total control. To provided additional protection, we added new and improved rear armor that combines a no-slip grip, protective iphone bumper with a sturdy rear shield.
         Defense 720º&#39;s two-piece construction easily snaps together to give your iPhone cases all-over protection from scratches, impacts, bumps and other hazards.
         Tough Grip iPhone SE, iPhone 5s and iPhone 5 case
         Full screen protection, full touch control
         Protects your device, front, sides and back from scratches, drops and impacts
         Side bumper adds real grip and control
         Two piece design easily snaps together for a secure fit
         "
         data-product-price="2999"
         data-currency="USD"
         ></div>
    <script>
        //Shopify.Image.preload(["\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Angle.jpg?v=1469643040","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Exploded.jpg?v=1469643045","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Front.jpg?v=1469643050","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Back.jpg?v=1469643054","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Angle.jpg?v=1469643061","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Back.jpg?v=1469643068","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Exploded.jpg?v=1469643072","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Front.jpg?v=1469643077","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Angle.jpg?v=1469643087","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Back.jpg?v=1469643097","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Exploded.jpg?v=1469643108","\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Front-Flat.jpg?v=1466044590"], 'grande');



        var selectCallback = function (variant, selector) {

            var addToCart = jQuery('#product-add-to-cart'),
                    productPrice = jQuery('.product .price'),
                    comparePrice = jQuery('.product .compare-price');

            if (variant) {
                if (variant.available) {
                    // We have a valid product variant, so enable the submit button
                    addToCart.removeClass('disabled').removeAttr('disabled').val('Add to Cart');

                } else {
                    // Variant is sold out, disable the submit button
                    addToCart.val('Sold Out').addClass('disabled').attr('disabled', 'disabled');
                }

                // Regardless of stock, update the product price
                productPrice.html(Shopify.formatMoney(variant.price, "${{amount}}"));

                // Also update and show the product's compare price if necessary
                if (variant.compare_at_price > variant.price) {
                    productPrice.addClass("on-sale")
                    comparePrice
                            .html(Shopify.formatMoney(variant.compare_at_price, "${{amount}}"))
                            .show();
                } else {
                    comparePrice.hide();
                    productPrice.removeClass("on-sale");
                }

                // BEGIN SWATCHES
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, length = variant.options.length; i < length; i++) {
                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
                // END SWATCHES






            } else {
                // The variant doesn't exist. Just a safeguard for errors, but disable the submit button anyway
                addToCart.val('Unavailable').addClass('disabled').attr('disabled', 'disabled');
            }

            //update variant inventory


            /*begin variant image*/
            if (variant && variant.featured_image) {
                var originalImage = jQuery("#product-featured-image");
                var newImage = variant.featured_image;
                var element = originalImage[0];
                Shopify.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                    jQuery('.product-photo-thumbs img').each(function () {
                        var grandSize = jQuery(this).attr('src');
                        grandSize = grandSize.replace('compact', 'grande');
                        if (grandSize == newImageSizedSrc) {
                            jQuery(this).parent().trigger('click');
                            return false;
                        }
                    });
                });
            }
            /*end of variant image*/
        };

        jQuery(function ($) {

            new Shopify.OptionSelectors('product-selectors', {
                product: {"id": 141381901, "title": "Defense 720º for iPhone SE, iPhone 5s and iPhone 5", "handle": "defense-720-5s-cases", "description": "\u003ch3\u003eDefense 720° iPhone SE, iPhone 5s and iPhone 5 case is the ultimate grip iPhone Case. Defense 720°takes our most popular product, Defense 360º, above and beyond to an incredible new level of protection. These \u003ca href=\"https:\/\/xdorialife.com\/collections\/iphone-5s-5-cases\"\u003eiPhone 5s protective cases\u003c\/a\u003e are designed with a rubber bumper and a distinctive, alternating matte\/glossy pattern that provides a no-slip grip for your iPhone SE, iPhone 5s and iPhone 5.\u003c\/h3\u003e\n\u003cp\u003eDefense 720\u003ca href=\"https:\/\/xdorialife.com\/collections\/iphone-5s-5-cases\"\u003e iPhone SE, iPhone 5s and iPhone 5 cases\u003c\/a\u003e are clear iPhone 5s cases with incredible full-screen, hard-plastic protective front shield that completely covers your screen but still allows total control. To provided additional protection, we added new and improved rear armor that combines a no-slip grip, protective iphone bumper with a sturdy rear shield.\u003c\/p\u003e\n\u003cp\u003eDefense 720º's two-piece construction easily snaps together to give your iPhone cases all-over protection from scratches, impacts, bumps and other hazards.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eTough Grip iPhone SE, iPhone 5s and iPhone 5 case\u003c\/li\u003e\n\u003cli\u003eFull screen protection, full touch control\u003c\/li\u003e\n\u003cli\u003eProtects your device, front, sides and back from scratches, drops and impacts\u003c\/li\u003e\n\u003cli\u003eSide bumper adds real grip and control\u003c\/li\u003e\n\u003cli\u003eTwo piece design easily snaps together for a secure fit\u003c\/li\u003e\n\u003c\/ul\u003e", "published_at": "2013-09-10T04:37:00-07:00", "created_at": "2013-06-09T16:01:24-07:00", "vendor": "X-Doria", "type": "case", "tags": ["case", "iPhone 5s\/5", "type-case"], "price": 2999, "price_min": 2999, "price_max": 2999, "available": true, "price_varies": false, "compare_at_price": null, "compare_at_price_min": 0, "compare_at_price_max": 0, "compare_at_price_varies": false, "variants": [{"id": 322711411, "title": "Black", "option1": "Black", "option2": null, "option3": null, "sku": "415255", "requires_shipping": true, "taxable": true, "featured_image": {"id": 3540373957, "product_id": 141381901, "position": 1, "created_at": "2015-08-22T21:42:09-07:00", "updated_at": "2016-07-27T11:10:40-07:00", "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Angle.jpg?v=1469643040", "variant_ids": [322711411]}, "available": true, "name": "Defense 720º for iPhone SE, iPhone 5s and iPhone 5 - Black", "public_title": "Black", "options": ["Black"], "price": 2999, "weight": 0, "compare_at_price": null, "inventory_quantity": 35, "inventory_management": "shipwire-app", "inventory_policy": "deny", "barcode": "6950941415255"}, {"id": 322711409, "title": "Blue", "option1": "Blue", "option2": null, "option3": null, "sku": "415262", "requires_shipping": true, "taxable": true, "featured_image": {"id": 3540376773, "product_id": 141381901, "position": 5, "created_at": "2015-08-22T21:42:25-07:00", "updated_at": "2016-07-27T11:11:01-07:00", "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Angle.jpg?v=1469643061", "variant_ids": [322711409]}, "available": true, "name": "Defense 720º for iPhone SE, iPhone 5s and iPhone 5 - Blue", "public_title": "Blue", "options": ["Blue"], "price": 2999, "weight": 0, "compare_at_price": null, "inventory_quantity": 5, "inventory_management": "shipwire-app", "inventory_policy": "deny", "barcode": "6950941415262"}, {"id": 322711413, "title": "Purple", "option1": "Purple", "option2": null, "option3": null, "sku": "415279", "requires_shipping": true, "taxable": true, "featured_image": {"id": 3540379141, "product_id": 141381901, "position": 9, "created_at": "2015-08-22T21:42:43-07:00", "updated_at": "2016-07-27T11:11:27-07:00", "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Angle.jpg?v=1469643087", "variant_ids": [322711413]}, "available": false, "name": "Defense 720º for iPhone SE, iPhone 5s and iPhone 5 - Purple", "public_title": "Purple", "options": ["Purple"], "price": 2999, "weight": 0, "compare_at_price": null, "inventory_quantity": 0, "inventory_management": "shipwire-app", "inventory_policy": "deny", "barcode": "6950941415279"}], "images": ["\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Angle.jpg?v=1469643040", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Exploded.jpg?v=1469643045", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Front.jpg?v=1469643050", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Back.jpg?v=1469643054", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Angle.jpg?v=1469643061", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Back.jpg?v=1469643068", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Exploded.jpg?v=1469643072", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415262_Defense720_iPhone-5_X-Doria_Blue_Front.jpg?v=1469643077", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Angle.jpg?v=1469643087", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Back.jpg?v=1469643097", "#\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Exploded.jpg?v=1469643108", "\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415279_Defense720_iPhone-5_X-Doria_Purple_Front-Flat.jpg?v=1466044590"], "featured_image": "\/\/cdn.shopify.com\/s\/files\/1\/0115\/0272\/products\/415255_Defense720_iPhone-5_X-Doria_Black_Angle.jpg?v=1469643040", "options": ["Color"], "content": "\u003ch3\u003eDefense 720° iPhone SE, iPhone 5s and iPhone 5 case is the ultimate grip iPhone Case. Defense 720°takes our most popular product, Defense 360º, above and beyond to an incredible new level of protection. These \u003ca href=\"https:\/\/xdorialife.com\/collections\/iphone-5s-5-cases\"\u003eiPhone 5s protective cases\u003c\/a\u003e are designed with a rubber bumper and a distinctive, alternating matte\/glossy pattern that provides a no-slip grip for your iPhone SE, iPhone 5s and iPhone 5.\u003c\/h3\u003e\n\u003cp\u003eDefense 720\u003ca href=\"https:\/\/xdorialife.com\/collections\/iphone-5s-5-cases\"\u003e iPhone SE, iPhone 5s and iPhone 5 cases\u003c\/a\u003e are clear iPhone 5s cases with incredible full-screen, hard-plastic protective front shield that completely covers your screen but still allows total control. To provided additional protection, we added new and improved rear armor that combines a no-slip grip, protective iphone bumper with a sturdy rear shield.\u003c\/p\u003e\n\u003cp\u003eDefense 720º's two-piece construction easily snaps together to give your iPhone cases all-over protection from scratches, impacts, bumps and other hazards.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eTough Grip iPhone SE, iPhone 5s and iPhone 5 case\u003c\/li\u003e\n\u003cli\u003eFull screen protection, full touch control\u003c\/li\u003e\n\u003cli\u003eProtects your device, front, sides and back from scratches, drops and impacts\u003c\/li\u003e\n\u003cli\u003eSide bumper adds real grip and control\u003c\/li\u003e\n\u003cli\u003eTwo piece design easily snaps together for a secure fit\u003c\/li\u003e\n\u003c\/ul\u003e"},
                onVariantSelected: selectCallback,
                enableHistoryState: true
            });








            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

            $('.selector-wrapper:eq(0)').prepend('<label>Color</label>');


            // Hide selectors if we only have 1 variant and its title contains 'Default'.


            // Auto-select first available variant on page load. Otherwise the product looks sold out.





            $('.single-option-selector:eq(0)').val("Black").trigger('change');









            var reviewsTimeout = setInterval(function () {
                if (jQuery(".spr-badge-caption").length > 0) {
                    jQuery(".spr-badge-caption").on('click', function () {
                        jQuery('html,body').animate({
                            scrollTop: jQuery(".panel:last").offset().top},
                                '400');
                        jQuery("#collapse-tab4").collapse('show');
                    });
                    clearInterval(reviewsTimeout);
                }
            }, 1000);



        });
        $(".swatch .color input").on("click", function () {
            //$('.thumbnails').css("display", "none");
            var color = $(this).val();
            var string = color.split(' ').join('-');
            var stringx = string.toLowerCase()
            //$("#" + stringx).css("display", "block");  
            //$("#" + stringx+' ul li a').first().trigger('click');
            $('.currentColor').text(color);
        });


        $('.product-photo-thumbs .thumbnail a').on('click', function () {
            var thisDataImage = $(this).attr('data-image');
            $('#product-featured-image').attr('src', thisDataImage);
        });

        //     $( ".swatch .color input" ).each(function() {
        //       $(this).on( 'click', function() {
        //         var colorName = $( this ).val();
        //         var hi = $(this).parents(".product-shop").siblings('.product-img-box').find(".thumbnail");
        //         var hello = $(hi).find('a').attr('title');
        //         var bye = $(hi).find('a').attr('data-image');
        //         console.log(hello);
        //         console.log(colorName)
        //         if (hello == colorName) {
        //           var imgParent = $(hi).parents('.product-images').find('#product-featured-image');
        //           console.log(imgParent)
        //           $(imgParent).attr('src', bye);
        //         }
        //       });
        //     });

    </script>
    <!-- otest2 -->
</main>
