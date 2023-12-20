<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="vi" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="vi" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="vi">
<!--<![endif]-->

<!-- Mirrored from localhost/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jun 2016 06:02:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Your Store</title>
<base  />
<meta name="description" content="My Store" />
<script src=<?php echo  base_url()."javascript/jquery/jquery-2.1.1.min.js"?> type="text/javascript"></script>
<link href=<?php echo  base_url()."javascript/bootstrap/css/bootstrap.min.css"?> rel="stylesheet" media="screen" />
<script src=<?php echo  base_url()."javascript/bootstrap/js/bootstrap.min.js"?> type="text/javascript"></script>
<link href=<?php echo  base_url()."javascript/font-awesome/css/font-awesome.min.css"?> rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href=<?php echo  base_url()."catalog/view/theme/default/stylesheet/stylesheet.css"?> rel="stylesheet">
<link href=<?php echo  base_url()."javascript/jquery/owl-carousel/owl.carousel.css"?> type="text/css" rel="stylesheet" media="screen" />
<link href=<?php echo  base_url()."javascript/jquery/owl-carousel/owl.transitions.css"?> type="text/css" rel="stylesheet" media="screen" />
<script src=<?php echo  base_url()."javascript/common.js"?> type="text/javascript"></script>
<link href=<?php echo  base_url()."image/catalog/cart.png"?> rel="icon" />
<script src=<?php echo  base_url()."javascript/jquery/owl-carousel/owl.carousel.min.js"?> type="text/javascript"></script>
</head>
<body class="common-home">

    <?php echo Modules::run("header2"); ?>
     
<div class="container">
    
  <div class="row">
     <?php echo Modules::run("left2") ; ?>
     
 
   
  
      <?php
      $this->load->view($module.'/'.$view_file);
    
      ?>
  
  



<div id="carousel0" class="owl-carousel">
  </div>
<script type="text/javascript"><!--
$('#carousel0').owlCarousel({
	items: 6,
	autoPlay: 3000,
	navigation: true,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
	pagination: true
});
--></script></div>
    </div>
</div>
<?php  echo Modules::run("footer2"); ?>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->

</body>
<!-- Mirrored from localhost/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Jun 2016 06:03:51 GMT -->
</html>