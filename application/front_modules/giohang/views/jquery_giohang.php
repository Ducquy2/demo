<script>
            var baseurl = '<?php echo base_url(); ?>';
            function add_cart_item(id , qty){
                $.post(baseurl + "giohang/add_cart_item", { product_id: id, quantity: qty, ajax: '1' },
  				function(data){	 
     		 			if(data == 'true'){ 
     		 			     alert('Đã thêm vào giỏ hàng!!!'); 
                            $.get(baseurl + "giohang/giohang_ajax", function(cart){ // Get the contents of the url cart/show_cart
      							$("#giohang_ajax").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						});
                            $.get(baseurl + "giohang/giohang_top", function(cart){ // Get the contents of the url cart/show_cart
      							$("#shopping_cart").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						});
                            
                              		
     		 			}else{
     		 				alert("Product does not exist");
     		 			}
     			 });
            }
            function remove_cart(id){
                $.post(baseurl + "giohang/remove_cart", { rowid: id, ajax: '1' },
  				function(data){	 
     		 		 
        			 		  		
                            $.get(baseurl + "giohang/giohang_ajax", function(cart){ // Get the contents of the url cart/show_cart
      							$("#giohang_ajax").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						});
                            $.get(baseurl + "giohang/giohang_top", function(cart){ // Get the contents of the url cart/show_cart
      							$("#shopping_cart").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						});
     			 });
            }	
            function empty_cart(){
                $.post(baseurl + "giohang/empty_cart", {  ajax: '1' },
  				function(data){	 
     		 		 
        				 
                            $.get(baseurl + "giohang/giohang_ajax", function(cart){ // Get the contents of the url cart/show_cart
      							$("#giohang_ajax").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						}); 
                            $.get(baseurl + "giohang/giohang_top", function(cart){ // Get the contents of the url cart/show_cart
      							$("#shopping_cart").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						});	  		
     		 		 
     			 });
            }    
                
            function change_qty( qty , rowid){
                $.post(baseurl + "giohang/update_cart", { rowid: rowid, qty: qty, ajax: '1' },
  				function(data){	 
//     		 			if(data == 'true'){ 
        		 
                            $.get(baseurl + "giohang/giohang_ajax", function(cart){ // Get the contents of the url cart/show_cart
      							$("#giohang_ajax").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						});
                            
                            
                            $.get(baseurl + "giohang/giohang_top", function(cart){ // Get the contents of the url cart/show_cart
      							$("#shopping_cart").html(cart); // Replace the information in the div #cart_content with the retrieved data
    						});
                            
                            
                              		
//     		 			}else{
//     		 				alert("Product does not exist");
//     		 			}
     			 });
            }
         </script>