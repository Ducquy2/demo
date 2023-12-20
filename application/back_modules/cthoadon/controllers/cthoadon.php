<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class cthoadon extends MX_Controller
{
function __construct() {
    parent::__construct();
    //Khai bao model hien tai
    $this->load->model('model_cthoadon',"Mdl_cthoadon",TRUE);
    //Khai bao model chua khoa ngoai neu co
    $this->load->model('mathang/model_mathang',"Mdl_mathang",TRUE);
    $this->load->model('hoadon/model_hoadon',"Mdl_hoadon",TRUE);
     $this->load->model('login/model_login',"Mdl_login",TRUE);
    
    // Check Login
 
    if ($this->session->userdata('isLoggedInAdminDemo') == FALSE) {
        redirect(base_url() .'admin/login');  
    } 
    // End Check Login 
    // Check quyen 
    //echo var_dump($this->session->userdata); exit;
    //echo $this->Mdl_login->phanquyen($this->session->userdata('admin_user')); exit;
    if ( $this->Mdl_login->phanquyen($this->session->userdata('admin_user')) == true) 
            redirect(base_url() . 'admin/login');
//            //echo "Khong quyen truy cap"; die;
//    }
// end Check quyen 
   
}

public function index()
	{
	        //Goi ham trong model thong qua bien khai bao tren
                $data['detail']=  $this->Mdl_cthoadon->get('1');
                            
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="cthoadon";
                $data['view_file']="display";
                
                //Hien thi $data trong tempale 
                echo Modules::run('template/two_col',$data);
	}
      
public function addedit($id = false){
    // Lay Du lieu tu view
    $data_post = $this->input->post();
    $this->load->library('upload');
    if(intval($id)){  // Update
        //Xoa hinh cu truoc khi update
        $getpic = $this->Mdl_cthoadon->get_where($id);
        if(!empty($_FILES['userfile']['name'][0]))
             {
                 foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
             }
        //Ket thuc Xoa hinh cu truoc khi update
        
//        if($data_post){    // Click Submit
//                $data_post1 = $this->Mdl_cthoadon->do_upload(); 
//                $data_post['hinh']=$data_post1['hinh'];
//                $data_post['path']=$data_post1['path'];
//                
//                $this->Mdl_cthoadon->_update($id, $data_post);
//            }
//            // lấy nội dung theo $id
//             $data['detail'] = $this->Mdl_cthoadon->get_where($id);
//             //$data['khoangoai']=$this->Mdl_tbl_name_a->get(1);
//        }else{
//            // Insert
//             if($data_post){    // Click Submit
//                    //Lay hinh va duong dan upload de luu vao db
//                      $data_post1 = $this->Mdl_cthoadon->do_upload(); 
//                      $data_post['hinh']=$data_post1['hinh'];
//                      $data_post['path']=$data_post1['path'];
//                     
//                    //Thuc hien insert vao db
//                    $this->Mdl_cthoadon->_insert($data_post);
//                     
//                 }
        }
        //$this->load->model('tbl_name_a/model',"Mdl_tbl_name_a");
        $data['khoangoai']=$this->Mdl_mathang->get(1);
        $data['khoangoai1']=$this->Mdl_hoadon->get(1);
       
        // Thuc hien viec day du lieu ra view
        $data['module']="cthoadon";
        $data['view_file']="addedit";
        echo Modules::run('template/two_col',$data);
       
       //Kiem tra neu bam nut submit thi chuyen huong ve index.php
        /* @var $_POST type */
        if ($_POST) {
            redirect(base_url() . "admin/cthoadon");
        }
    }
public function delete($id) {
       //Xoa hinhf trong thu muc
        $getpic = $this->Mdl_cthoadon->get_where($id);
        foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
        //Ket thuc Xoa hinh cu truoc khi update
        //Xoas du lieu trong db
        $this->Mdl_cthoadon->_delete($id);
        redirect(base_url()."admin/cthoadon");
}

    
}


