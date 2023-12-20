<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dathang extends MX_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->model('Models_dathang' , "DH" , TRUE);
        $this->load->library('cart');
        
    }
	public function index( )
	{
        if(empty($_POST)){ echo '123';
            redirect(base_url());
        }
        $this->cart->product_name_rules = "^."; 
        $ma = $_POST['MAMH'];
        //echo $ma; exit;
        $TenMH = $_POST['TENMH'];
	$giamh = $_POST['GIAMH'];
        $hinh = $_POST['hinh'];
        $soluong = $_POST['soluong'];
	//var_dump($_POST); exit();	 
        $exist = 0;
        $data=$this->cart->contents();
        foreach($data as $item){
            if($item['id'] == $ma){
                
                $this->update($ma , $item['qty']+$soluong);
                $exist = true;
            }
        }
        //echo $exist; exit;
        if($exist==0){
            $data = array(
                   'id'      => $ma,
                   'qty'     => $soluong,
                   'price'   => $giamh,
                   'name'    => $TenMH ,
                   'hinh' =>  $hinh 
                  );
            //var_dump($data); exit();
            $this->cart->insert($data); 
        } 
        
  
        redirect(base_url().'giohang');
	} 
    
    
    public function product(){
        $data=$this->cart->contents();
        foreach($data as $item){
            if($this->cart->has_options($item['rowid'])){
                foreach($this->cart->product_options($item['rowid']) as $option_name => $option_value){
                    echo "<b>$option_name</b>: $option_value</br />";
                }
            }
        }
    }
 
    public function deleteOne($id){
       $data=$this->cart->contents();
        foreach($data as $item){
            if($item['id'] == $id){
                $item['qty'] = 1;
                $delOne = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($delOne)){
            echo "Xoa san pham thanh cong";
        }else{
            echo "Xoa san pham that bai";
        }
    }
    
    public function update($id , $qty){
        $data=$this->cart->contents();
        foreach($data as $item){
            if($item['id'] == $id){
                $item['qty'] = $qty;
                $update = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($update)){
            echo "Update san pham thanh cong";
        }else{
            echo "Update san pham that bai";
        }
    }
    
    public function del(){
        $this->cart->destroy();
        echo "Done";
        redirect(base_url());
    }
    public function total(){
       echo 'Hien tai co '.$this->cart->total_items().' san pham trong gio hang';
    }
    
    public function totalmoney(){
          echo 'Tong tien '.$this->cart->total().'$ trong gio hang';
    }
        
}
 