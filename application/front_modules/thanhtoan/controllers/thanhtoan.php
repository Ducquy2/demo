<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thanhtoan extends MX_Controller {
 
 
    private $MAKH = 0;
    public function __construct() {
        parent::__construct();
        $this->load->model('Models_thanhtoan' , "TT" , TRUE); 
        $this->load->model('loaihang/model_loaihang',"Mdl_loaihang",TRUE);
        $this->load->library('cart');
        
    }
	public function index()
	{
         redirect(base_url());
	}
    public function buoc1(){  
        //Trong buoc 1 chu yeu kiem tra khach hang co ton tai hay khong, neu chua ton tai thi them vao bang kh
        //neu ton tai roi thi tiep tuc buoc 2
        
        $this->load->model('khachhang/model_khachhang',"Mdl_khachhang",TRUE);
        $data_post = $this->input->post();
        if($data_post){
            //$id_KhachHang = 0; 
            // Check khach hang ton tai hay chua
            $where['EMAILKH'] = $data_post['emailkh']; 
            $khachhang_exist = $this->TT->checkKhachHang($where);
            if(empty($khachhang_exist)){ // EMAIL KHACH HANG nay chua ton tai , insert khach hang moi
                $this->Mdl_khachhang->_insert($data_post);
                //Lay lai ma kh vua ínert
                
                
                // Thong bao thanh cong
                $newdata = array( 'thanhcong'  => 'Bạn là khách hàng mới, tài khoản và mật khẩu của bạn đã được chuyển vào email !!' ); 
                $this->session->set_userdata($newdata); 
            }
            
            $khachhang_exist = $this->TT->checkKhachHang($where);
            $id_KhachHang = $this->Mdl_khachhang->get_id($data_post['emailkh']);
            $idkh= $id_KhachHang->result();
                // Thong bao thanh cong
                $newdata = array( 'thanhcong'  => 'Chào bạn '.$khachhang_exist[0]->tenkh.' !!' ); 
                $this->session->set_userdata($newdata);
            
            
           // $this->MAKH = $id_KhachHang;
            
            
           
            if(!empty($idkh)){// var_dump($idkh); exit;
                redirect(base_url().'thanhtoan/buoc2?id='.$idkh[0]->khachhang_id );
            }
             
        }
        
         
        // List Gio Hang
       $data['list'] = $this->cart->contents(); 
       $data['total_item'] = $this->cart->total_items();
       $data['total_amount'] = $this->cart->total();
       
       $data['view_file']="buoc1";
       $data['module']="thanhtoan";
       $data['khoangoai']=$this->Mdl_loaihang->get(1);
       echo Modules::run('template/four_col',$data);
      // $this->template->build('buoc1' , $data);
    }
    
    public function buoc2( ){
        
       $data_get = $this->input->get();
     
        $khachhang_id = $data_get['id'];
       // echo $khachhang_id; exit;
        // Lay thong tin khach hang
        
        $where['khachhang_id'] = $khachhang_id;
        $khachHangInfo = $this->TT->checkKhachHang($where);
        
        
        
        $data['tenkh'] = $khachHangInfo[0]->tenkh;
        $data['sdtkh'] = $khachHangInfo[0]->sdtkh;
        $data['diachikh'] = $khachHangInfo[0]->diachikh;
        
      
        // List Gio Hang
       $data['list'] = $this->cart->contents(); 
       $data['total_item'] = $this->cart->total_items();
       $data['total_amount'] = $this->cart->total();
        
       $data_post = $this->input->post();
        if($data_post){   
            //Insert Hoa donạo hóa đơn
            
            $dataInsertHoaDon['khachhang_id'] = $khachhang_id;
            $dataInsertHoaDon['trangthaihd'] = 0; 
            $date= date("Y-m-d H:i:s");
           // print_r($date); exit;
            $dataInsertHoaDon['ngaylaphd'] = $date;
            
            
            $idHoaDon = $this->TT->insert( $dataInsertHoaDon , 'hoadon');
            unset($dataInsertHoaDon);
            
            // Insert CT Hoa Don
            $dataInsertCTHoaDon['hoadon_id'] = $idHoaDon;
            
            // Insert tung mat hang trong gio hang vao CT Hoa Don
            $dataGioHang=$this->cart->contents();
            foreach($dataGioHang as $item){
               
                    $dataInsertCTHoaDon['mathang_id'] = $item['id']; 
                    $dataInsertCTHoaDon['soluongban'] = $item['qty']; 
                    $dataInsertCTHoaDon['dongiaban'] = $item['price']; 
                    $dataInsertCTHoaDon['thanhtienban'] = $item['subtotal']; 
                     

                   
           
                    $this->TT->insert($dataInsertCTHoaDon , 'cthoadon' );
                    $tonkhoInfo = $this->TT->get_where_tonkho($item['id']);
                    //var_dump($tonkhoInfo->result()); exit;
                   $slt=$tonkhoInfo->result();
                   
                   $slcapnhat= $slt[0]->soluongton-$item['qty'];
                   $data1['soluongton'] = $slcapnhat;
                   // echo $slt[0]->soluongton; exit;
                   $this->TT->tonkho_update($item['id'],$data1);
            }
           
          
         
            // Thong bao thanh cong
            $newdata = array( 'thanhcong'  => 'Đặt hàng thành công !!' ); 
            $this->session->set_userdata($newdata);
            
            redirect(base_url()."thanhtoan/buoc3");
            
            
        }
       
           
        $data['view_file']="buoc2";
        $data['module']="thanhtoan";
        $data['khoangoai']=$this->Mdl_loaihang->get(1);
        echo Modules::run('template/four_col',$data);
        //$this->template->build('buoc2' , $data);
    }
    public function buoc3(){
        $data['view_file']="buoc3";
        $data['module']="thanhtoan";
        $data['khoangoai']=$this->Mdl_loaihang->get(1);
        echo Modules::run('template/four_col',$data);
        //$this->template->build('buoc3' , "thanhcong");
    }
     
    
        
}
 