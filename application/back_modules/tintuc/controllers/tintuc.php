<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class tintuc extends MX_Controller
{
function __construct() {
    parent::__construct();
    //Khai bao model hien tai
    $this->load->model('model_tintuc',"Mdl_tintuc",TRUE);
    //Khai bao model chua khoa ngoai neu co
    $this->load->model('admin/model_admin',"Mdl_admin",TRUE);
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
                $data['detail']=  $this->Mdl_tintuc->get('1');
                            
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="tintuc";
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
        $getpic = $this->Mdl_tintuc->get_where($id);
        if(!empty($_FILES['userfile']['name'][0]))
             {
                 foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
             }
        //Ket thuc Xoa hinh cu truoc khi update
        
        if($data_post){    // Click Submit
                $data_post1 = $this->Mdl_tintuc->do_upload(); 
                $data_post['hinhanhtin']=$data_post1['hinhanhtin'];
                $data_post['path']=$data_post1['path'];
                
                $this->Mdl_tintuc->_update($id, $data_post);
            }
            // lấy nội dung theo $id
             $data['detail'] = $this->Mdl_tintuc->get_where($id);
             //$data['khoangoai']=$this->Mdl_tbl_name_a->get(1);
        }else{
            // Insert
             if($data_post){    // Click Submit
                    //Lay hinh va duong dan upload de luu vao db
                      $data_post1 = $this->Mdl_tintuc->do_upload(); 
                      $data_post['hinhanhtin']=$data_post1['hinhanhtin'];
                      $data_post['path']=$data_post1['path'];
                     
                    //Thuc hien insert vao db
                    $this->Mdl_tintuc->_insert($data_post);
                     
                 }
        }
        //$this->load->model('tbl_name_a/model',"Mdl_tbl_name_a");
        $data['khoangoai']=$this->Mdl_admin->get(1);
       
        // Thuc hien viec day du lieu ra view
        $data['module']="tintuc";
        $data['view_file']="addedit";
        echo Modules::run('template/two_col',$data);
       
       //Kiem tra neu bam nut submit thi chuyen huong ve index.php
       if($_POST)
            redirect(base_url()."admin/tintuc");
    }
public function delete($id) {
       //Xoa hinhf trong thu muc
        $getpic = $this->Mdl_tintuc->get_where($id);
        foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
        //Ket thuc Xoa hinh cu truoc khi update
        //Xoas du lieu trong db
        $this->Mdl_tintuc->_delete($id);
        redirect(base_url()."admin/tintuc");
}

    
}


