<head>
     <!-- Khai bao trinh soan thao -->
        <meta charset="utf-8">
        <script src="<?php echo base_url()."ckeditor/ckeditor.js";?>"></script>
      <!--Ket thuc Khai bao trinh soan thao -->
</head>

<?php 
 //echo base_url().uri_string().'.html'; 
 // echo $this->uri->segment(3).'.html'. "<br>"; 

?>

<!--enctype="multipart/form-data" -->

<form  enctype="multipart/form-data"  method="post">
     <BR><p><b style="color: blue;">TÊN LOẠI HÀNG :</b></P>
    
 <!-- Lay du lieu tu Controler -->
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
 <!-- K thuc viec lay du lieu tu controller -->
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
 <input type="text" name="tenloaihang" value="
  <?php
                if($tt==1)
                {
                   echo $data[0]->tenloaihang;
                }
             ?>
        
      ">  
<!--     <p><b style="color: blue;">Chọn hình để up </b></P> <br>
         <?php
         if($tt==1){
             
             foreach ($data[0] as $rows){
            
             ?> 
         <img src="<?php echo base_url().'/uploads/' . $rows->hinh; ?>" height="50px"  /> 
             
             <?php 
             }
         }
         ?>
         
         <input type="file" multiple name="userfile[]" size="36" id="userfile"  />
     Khai bao editor   
        <textarea name="thongtin" id="editor1" rows="10" cols="100">
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