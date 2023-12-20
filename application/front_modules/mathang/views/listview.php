<main class="container main-content" role="main">
    <style>
        /* Hiding the options drop-downs. */
        /* Swatches Styles */
        .swatch { margin: 0 0 5px; }
        /* Label */
        .swatch ul {margin-bottom:0; padding:0;}
        .swatch .header { margin: 0; border: none; padding: 0 0 10px; color: #000; letter-spacing:3px; font-size:14px; text-transform:uppercase;}
        /* Hide radio buttons.*/
        .swatch input { display:none; }
        .swatch label { border: 1px solid #cbcbcb; float: left; font-weight: 400; font-size: 11px; width: 45px!important;
                        height: 24px!important; line-height: 32px; margin: 0; text-align: center; text-transform: uppercase; white-space: nowrap;
                        cursor: pointer; }
        .swatch-element label { padding:0 5px; }
        .color.swatch-element label { padding:0; }
        /* Styling selected swatch */
        /* Slightly raised */
        .swatch input:checked + label ,
        .swatch label:hover { border-color: #fff; border-width: 2px; line-height: 28px; outline: 1px solid #000;}
        .swatch .swatch-element {
            display:inline-block;
            -webkit-transform:translateZ(0); /* webkit flicker fix */
            -webkit-font-smoothing:antialiased; /* webkit text rendering fix */
            /* Spacing between buttons */
            margin: 0 5px;
            /* To position the sold out graphic and tooltip */
            position:relative;
        }
        /* Image with the cross in it */
        img.crossed-out { position:absolute; width:100%; height:100%; left:0; top:0; }
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
</main>

<main class="container main-content description" role="main">
    <style>
        .main-content.main-content {
            padding-top: 50px;
        }
    </style>
    <div class="row">
        <div>
            <h1>iPhone 5s/5 Cases</h1>
        </div>
        <div class="rte collection-description">
            <h3>Cool and Protective iPhone 5s and Phone 5 cases<br>Exceptional protection for your iPhone</h3>
        </div>
        <?php
        $stt = 0;
        foreach ($detail->result() as $row) {
            $stt++;
            ?>   
            <div class="block-row col-xs-4 col-xs-12">


                <div class="products-grid">


                    <div class="  no_crop_image  grid-item product-item  grid-4 wow fadeIn" data-wow-delay="1400ms" id="product-5347201029">

                        <div class="product-top">

                            <div class="product-image">
                                <a href="iphone-5s-5-cases/products/scene-iphone-5s-cases.html" class="product-grid-image">
                                    <img class="featured-image featured-image-5347201029" data-id="5347201029" src="<?php echo base_url() . "/uploads/" . $row->hinh; ?>" alt="Scene iPhone Cases | Cool iPhone 5, iPhone 5s &amp; iPhone SE Cases | X-Doria">
                                    <img src="<?php echo base_url() . "/uploads/" . $row->hinh; ?>" data-id="5347201029" class="color-images-5347201029 color-images black-5347201029" />     		
                                </a>
                            </div>

                            <div class="product-des">
                                <div class="action">
                                    <form action="https://xdorialife.com/cart/add" method="post" class="variants" id="product-actions-5347201029" enctype="multipart/form-data" style="padding:0px;">    
                                        <input class="btn" type="button" onclick="window.location.href = '<?php echo site_url('mathang/detail/' . $row->slug) ?>'" value="Đặt Hàng" />
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="product-bottom">
                            <a class="product-title" href="../products/scene-iphone-5s-cases.html">
                                <?php echo $row->tenmh ?> 
                                <span class="small" style="font-weight:normal; display:block;"> <?php echo $row->tenmh ?></span>

                                <div class="price-box">
                                    <p class="regular-product">
                                        <span ><?php echo $row->giamh ?></span>
                                    </p>
                                </div>

                                <!-- .swatch -->
                                <script>
                                    $('.color-images').css("display", "none");
                                    $(".swatch-element input").on("click", function () {
                                        var productID = $(this).data('id');
                                        var color = $(this).val();
                                        $('.color-images-' + productID).css("display", "none");
                                        $('.featured-image-' + productID).css("display", "none");
                                        $('.' + color).css("display", "block");
                                    });
                                </script>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
</main>
