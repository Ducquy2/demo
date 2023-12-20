<!--Khai Bao Header-->
<?php 
    //echo $assign_to_config['modules_locations']; exit;
    $thems=1;
    switch ($thems)
    {
    case 1: 
        echo Modules::run('header1');
        break;
    case 2: 
        echo Modules::run('header2');
        break;
    case 3: 
        echo Modules::run('header3');
        break;
    default :
        echo Modules::run('header4');
       
        break;
    }
?>
<!--Khai Bao Body-->
<div class="row">  
   
  <div class="col-xs-12 col-md-8">
      <?php
      $this->load->view($module.'/'.$view_file);
    
      ?>
  </div>
  
</div>
 <!-- Khai Bao Footer -->
 <?php
 switch ($thems)
    {
    case 1: 
        echo Modules::run('header1');
        break;
    case 2: 
        echo Modules::run('header2');
        break;
    case 3: 
        echo Modules::run('header3');
        break;
    default :
        echo Modules::run('header4');
       
        break;
    }
 ?>