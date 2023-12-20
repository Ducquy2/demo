

<!--Khai Bao Header-->
<!--Khai Bao Body-->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Vu Quoc Tuan">
      <title>Admin - Thiên Vũ</title>
      <!-- Bootstrap Core CSS -->
      <link href="http://localhost/webgiaodien/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- MetisMenu CSS -->
      <link href="http://localhost/webgiaodien/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="http://localhost/webgiaodien/dist/css/sb-admin-2.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="http://localhost/webgiaodien/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- DataTables CSS -->
      <link href="http://localhost/webgiaodien/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
      <!-- DataTables Responsive CSS -->
      <link href="http://localhost/webgiaodien/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
      <!-- phần scrip ở dưới thuộc phần product_add.php -->
      <script src="http://localhost/webgiaodien/bower_components/jquery/dist/jquery.min.js"></script>
      <script src="http://localhost/webgiaodien/js/ckeditor/ckeditor.js" type="text/javascript"></script>
      <style>.cke{visibility:hidden;}</style>
      <script src="http://localhost/webgiaodien/js/ckfinder/ckfinder.js" type="text/javascript"></script>
      <script src="http://localhost/webgiaodien/js/func_ckfinder.js" type="text/javascript"></script>
   </head>
   <body>
      <div id="wrapper">
         <!-- Navigation -->
        
         
                  <!-- /.col-lg-12 -->
                   <?php
      $this->load->view($module.'/'.$view_file);
    
      ?>
            <!-- /.container-fluid -->
         </div>
      </div>
      <!-- /#wrapper -->
      <!-- jQuery -->
      <!-- Bootstrap Core JavaScript -->
      <script src="http://localhost/webgiaodien/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- Metis Menu Plugin JavaScript -->
      <script src="http://localhost/webgiaodien/bower_components/metisMenu/dist/metisMenu.min.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="http://localhost/webgiaodien/dist/js/sb-admin-2.js"></script>
      <!-- DataTables JavaScript -->
      <script src="http://localhost/webgiaodien/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
      <script src="http://localhost/webgiaodien/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
      <!-- Page-Level Demo Scripts - Tables - Use for reference -->
      <script>
         $(document).ready(function() {
             $('#dataTables-example').DataTable({
                     responsive: true
             });
         });
      </script>
   </body>
</html>
<!-- Khai Bao Footer -->

