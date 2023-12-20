<head>
     <!-- Khai bao trinh soan thao -->
        <meta charset="utf-8">
        <script src="<?php echo base_url()."ckeditor/ckeditor.js";?>"></script>
      <!--Ket thuc Khai bao trinh soan thao -->
</head>

<!--enctype="multipart/form-data" -->
<form  enctype="multipart/form-data"  method="post">
    
    
<?php echo Modules::run('header2') ; ?>
<?php echo Modules::run('menu2'); ?>
 <!-- Lay du lieu tu Controler -->
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa Cấm Quyền
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <?php 
                                        if(@($detail)){
                                                $data[0]=$detail->result();
                                                $tt=1;
                                                // Trang Thai Edit
                                        }
                                        else 
                                            // Trang Thai Insert
                                            $tt=0;            
                                            $data[2]=$khoangoai->result();
                                    ?>

                                  <?php

                                 ?>

                                 
                                      <?php 
                                        if(@($detail)){
                                                $data=$detail->result();
                                                $tt=1;
                                                // tt=1 la Trang Thai Edit
                                        }
                                        else 
                                                // tt=0 la Trang Thai Insert
                                                 $tt=0;            
                                      ?>
                            <div class="form-group">
                                <label>Admin</label>
                                <?php
                                     // lay Khoa ngoai
                                     $data[2]=$khoangoai->result();
                                    //var_dump($data[2]); exit;
                                ?>
                                <select class="form-control" name="username">
                                    <?php
            
                                        foreach($data[2] as $k=>$v){
                                           if($tt==1){
                                            ?>
                                    <option  <?php echo $data[0]->username==$v->username ?> value="<?php echo $v->username ?>" selected=""><?php echo $v->tenloaihang ?></option>
                                        <?php
                                            }
                                        else {
                                            ?>
                                        <option   value="<?php echo $v->username ?>" selected=""><?php echo $v->username ?></option>
                                        <?php
                                        }
                                        }
                                        ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cấm Quyền</label>
                                <input class="form-control" name="camquyen" value="
                                        <?php
                                            if($tt==1)
                                            {
                                               echo $data[0]->camquyen;
                                            }
                                         ?>
                                       
                                       " />
                            </div>
                            
                            
     <!-- Khai bao editor   -->
<!--   <div> <textarea name="thongtin" id="editor1" rows="10" cols="100">
             <?php
                if($tt==1)
                {
                   echo $data[0]->thongtin;
                }
             ?>   
        
        </textarea>-->
        <!-- Khai bao script cho edittor -->
         <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
         </script>
         <br>  
        
    <input type="submit" value="Xác Nhận" />
</form>
</div>