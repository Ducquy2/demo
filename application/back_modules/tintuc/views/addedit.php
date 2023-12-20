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
                        <h1 class="page-header">Tin Tức
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
                                    <option  <?php echo $data[0]->username==$v->username ?> value="<?php echo $v->username ?>" selected=""><?php echo $v->username ?></option>
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
                                <label>Tiêu Đề</label>
                                <input class="form-control" name="tieude" value="
                                        <?php
                                            if($tt==1)
                                            {
                                               echo $data[0]->tieude;
                                            }
                                         ?>
                                       
                                       " />
                            </div>
                            
                          
  <br>
<!-- Ket Thuc Truy van khoa ngoai va xuat hien ten cuar chung--> 
  <p></p>
  <?php
         if($tt==1){
             
            //foreach($data as $rows){
             //var_dump($data[0]); exit;
             ?> 
             <img src="<?php echo base_url().'/uploads/' . $data[0]->hinhanhtin; ?>" height="50px"  /> 
             
             <?php 
             }
        // }
         ?>
 <p></p>
 <label>HÌNH ẢNH TIN</label> 
 <p><b style="color: blue;">Chọn hình để up </b></P> <br>
       
         
         <input type="file" multiple name="userfile[]" size="36" id="userfile"  />
     <!--Khai bao editor   -->
   <div class="form-group">
           <label>Tóm Tắt</label> 
       <textarea name="tomtat" id="editor1" rows="10" cols="100">
             <?php
                if($tt==1)
                {
                   echo $data[0]->tomtat;
                }
             ?>   
        
        </textarea>
   </div>
     <div class="form-group">
           <label>Nội Dung</label> 
       <textarea name="noidung" id="editor1" rows="10" cols="100">
             <?php
                if($tt==1)
                {
                   echo $data[0]->noidung;
                }
             ?>   
        
        </textarea>
   </div>
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