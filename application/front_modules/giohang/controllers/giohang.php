<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Giohang extends MX_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->model('Models_dathang' , "DH" , TRUE);
        $this->load->model('mathang/Model_mathang' , "Mdl_mathang" , TRUE);
        $this->load->model('loaihang/model_loaihang',"Mdl_loaihang",TRUE);
        $this->load->library('cart');
    }
	public function index( )
	{
       // List Gio Hang
       $data['list'] = $this->cart->contents();
       //var_dump($data['list']);exit;
       
       $data['total_item'] = $this->cart->total_items();
       $data['total_amount'] = $this->cart->total();
       
       $data['giohang_ajax'] = $this->load->view('giohang_ajax' , $data , true);
	 //  echo "<pre>"; print_r($data); exit;
       //$this->template->build('giohang_html' , $data);
       
       $data['khoangoai']=$this->Mdl_loaihang->get(1);
       
       $data['view_file']="giohang_html";
       $data['module']="giohang";
        //echo "<pre>"; print_r($data); exit;
                //$data['khoangoai']=$this->Mdl_loaihang->get(1);
                
                //Hien thi $data trong tempale 
        echo Modules::run('template/four_col',$data);
        
 
	} 
    
    
    
    public function giohang_ajax( )
	{
       // List Gio Hang
       $data['list'] = $this->cart->contents();
       
       $data['total_item'] = $this->cart->total_items();
       $data['total_amount'] = $this->cart->total();
       
       $this->load->view('giohang_ajax' , $data);
 
	} 
    
    
    
    function validate_add_cart_item(){
     
        $id = $this->input->post('product_id'); // Assign posted product_id to $id
        $cty = $this->input->post('quantity'); // Assign posted quantity to $cty 
       
        $where['mathang_id'] = $id;   
        $result = $this->SP->getList($where); // Select the products where a match is found and limit the query by 1 
        // Check if a row has matched our product id
        
         
        $cart_content = $this->cart->contents();
        
       
 
        
        if(isset($result[0]->mathang_id)){
             
                $rowid = md5($result[0]->mathang_id.'has_option'); 
              if($cart_content[$rowid]){
                    //upload
                    $data = array(
                       'rowid' => $rowid,
                       'qty'   => $cart_content[$rowid]['qty']+ 1
                    );
                     
                    // Update the cart with the new information
                    $this->cart->update($data);
                }else{
                     
                    // Insert
                    $data = array(
                        'id'      => $result[0]->mathang_id,
                        'qty'     => 1,
                        'price'   => 10000,
                        'name'    => $result[0]->tenmh,
                        'options' => array('hinh' => $result[0]->hinh_anh )
                    ); 
                    
                    
                    $this->cart->insert($data); 
                }
                 
                return TRUE; // Finally return TRUE
           
         
        }else{
            // Nothing found! Return FALSE! 
            return FALSE;
        }
    } 
    
    
    function add_cart_item(){
     
        if($this->validate_add_cart_item() == TRUE){
              
            if($this->input->post('ajax') != '1'){
                //redirect('cart'); // If javascript is not enabled, reload the page with new data
            }else{
                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
            }
        }
         
    }
    
    
    
    
   function update_cart(){
        // Get the total number of items in cart
        $total = $this->cart->total_items();
         
        // Retrieve the posted information
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        //$k=0;
        //$k++;
     
     
        $cart_content = $this->cart->contents();
        
        if($cart_content[$item]){
                    
            $data = array(
                   'rowid' => $item,
                   'qty'   => $qty,
                    'qty'   => 1
                );
             
            // Update the cart with the new information
            $this->cart->update($data);
            echo 'true';
        }else{
            echo 'false';
        }
     
      
    } 
    
    
    function remove_cart(){
        $rowid = $this->input->post('rowid');
        $data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );
             
            // Update the cart with the new information
            $this->cart->update($data);
        
    } 
     
   function empty_cart(){
        $this->cart->destroy(); // Destroy all cart data
        
    } 
 
    public function giohang_top() {   
        
        $cart_content = $this->cart->contents(); 
        if(is_array($cart_content)){ 
            $data['count'] = $this->cart->total_items(); 
        }
         
        $this->load->view('giohang_top', $data);
   }
        
   public function jquery_giohang(){
       ///4this
       $this->load->view('jquery_giohang');
   }
}
 