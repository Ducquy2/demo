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
                        <h1 class="page-header">Sửa Admin
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <!-- <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control">
                                    <option value="0">Please Choose Category</option>
                                    <option value="">Tin Tức</option>
                                </select>
                            </div> -->
        <div class="form-group">
            
                 
                <?php 
                    if(@($detail)){
                            $data[0]=$detail->result();
                            $tt=1;
                            // Trang Thai Edit
                    }
                    else 
                        // Trang Thai Insert
                        $tt=0;            

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
            <label>Username</label>
            <input class="form-control" name="username" value="
                    <?php
                     if($tt==1)
                     {
                        echo $data[0]->username;
                     }
                    ?>
                   " />
            </div>
            <div class="form-group">
            <label>Tên Admin</label>
            <input class="form-control" name="tenadmin" value="
                    <?php
                     if($tt==1)
                     {
                        echo $data[0]->tenadmin;
                     }
                    ?>
                   " />
            </div>
            <div class="form-group">
            <label>Địa Chỉ Admin</label>
            <input class="form-control" name="diachiadmin" value="
                    <?php
                     if($tt==1)
                     {
                        echo $data[0]->diachiadmin;
                     }
                    ?>
                   " />
            </div>
            <div class="form-group">
            <label>SĐT Admin</label>
            <input class="form-control" name="sdtadmin" value="
                    <?php
                     if($tt==1)
                     {
                        echo $data[0]->sdtadmin;
                     }
                    ?>
                   " />
            </div>
            <div class="form-group">
            <label>Pass</label>
            <input class="form-control" name="password" value="
                    <?php
                     if($tt==1)
                     {
                        echo $data[0]->password;
                     }
                    ?>
                   " />
        </div>
         
                           
               
                            
                            
                             
  <br>
<!-- Ket Thuc Truy van khoa ngoai va xuat hien ten cuar chung--> 
  
     <!--Khai bao editor   -->
<!--   <div> <textarea name="trangthai" id="editor1" rows="10" cols="100">
             <?php
                if($tt==1)
                {
                   echo $data[0]->trangthai;
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