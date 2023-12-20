<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class loaihang extends MX_Controller
{
function __construct() {
    parent::__construct();
    //Khai bao model hien tai
    $this->load->model('model_loaihang',"Mdl_loaihang",TRUE);
    $this->load->model('login/model_login',"Mdl_login",TRUE);
    

// Check Login
 
    if ($this->session->userdata('isLoggedInAdminDemo') == FALSE) {
        redirect(base_url() .'admin/login');  
    } 
    // End Check Login    


// Check quyen 
    //echo var_dump($this->session->userdata); exit;
    //echo $this->Mdl_login->phanquyen($this->session->userdata('admin_user')); exit;
    if ( $this->Mdl_login->phanquyen($this->session->userdata('admin_user')) == true) {
            redirect(base_url() . 'admin/login');
            //echo "Khong quyen truy cap"; die;
    }
// end Check quyen 
}

public function index($id = false)
	{
          // Phan trang       
                 $this->load->library('pagination');
                 $config=array();
                 $config['base_url']=  base_url().'admin/loaihang/index';
                 $config['total_rows']=  $this->Mdl_loaihang->count_all();
                 $config['per_page']=10;
                 $config['num_links']=5; 
                 $config['full_tag_open']="<ul class='pagination'>";
                 $config['full_tag_close']="</ul>";
                 $config['num_tag_open']="<li>";
                 $config['num_tag_close']="</li>";
                 $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
                 $config['cur_tag_close']="<span class='sr-only'></span></a></li>";
                 $config['next_tag_open']="<li>";
                 $config['next_tag1_close']="</li>";
                 $config['prev_tag_open']="<li>";
                 $config['prev_tag_close']="</li>";
                 $config['first_tag_open']="<li>";
                 $config['first_tag_close']="</li>";
                 $config['last_tag_open']="<li>";
                 $config['last_tag_open']="</li>";
                 
                 $this->pagination->initialize($config);
                 
                 $data['links']=$this->pagination->create_links();
              // End Phan trang
              
                 
                //Goi ham trong model thong qua bien khai bao tren
                //$data['detail']=  $this->Mdl_loaihang->get('1');
                 //echo $this->uri->segment(2); exit;    
                $data['detail']= $this->Mdl_loaihang->get_with_limit($config['per_page'],$id,1);
                 
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="loaihang";
                $data['view_file']="display";
                
                //Hien thi $data trong tempale 
                echo Modules::run('template/two_col',$data);
	}
      
 public function addedit($id = false){
       
        $this->load->model('model','Mdl_loaihang');
        $data_post = $this->input->post();
        
      
        if(intval($id)){  // Update
           if($data_post){    // Click Submit
               $this->Mdl_loaihang->_update($id, $data_post);
            }
            // lấy nội dung theo $id
             $data['detail'] = $this->Mdl_loaihang->get_where($id);
        }else{
            // Insert
             if($data_post){    // Click Submit
                     //var_dump($data_post); exit; 
                     //Thuc hien upload hinh
                
                     // Upload xong se tra ve Name file
                     // Khi muon show hinh, thay can 1 default trong constants.php chu Duong dan de thu muc upload
                     // <img src=" FOLDER_UPLOAD + file_name " />
                     // Cau truc nhu vay la Ok
                
                     //$data_post['hinh1'] = $this->do_upload(); 
                     //Thuc hien insert vao db
                     //Lay hinh anh gan vao data_post
                     $data_post['slug1']= str_replace(' ','-',trim($data_post['tenloaihang']));
                     $this->Mdl_loaihang->_insert($data_post);
                     
                 }
        }
        
        // Thuc hien viec day du lieu ra view
        $data['module']="loaihang";
        $data['view_file']="addedit";
        echo Modules::run('template/two_col',$data);
       
       //Kiem tra neu bam nut submit thi chuyen huong ve index.php
       if($_POST)
            redirect(base_url()."admin/loaihang");
    }
public function delete($id) {
       //Xoa hinhf trong thu muc
        $getpic = $this->Mdl_loaihang->get_where($id);
        foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
        //Ket thuc Xoa hinh cu truoc khi update
        //Xoas du lieu trong db
        $this->Mdl_loaihang->_delete($id);
        redirect(base_url()."admin/loaihang");
}
public function search()
{
    
    $data_post = $this->input->post();
   
    $data['detail']= $this->Mdl_loaihang->get_where_custom_like('ten',$data_post['search']);
               
     //Cho du lieu : teen model va ten view vao mang $data
     $data['module']="loaihang";
     $data['view_file']="display";
     $data['links']="";           
     //Hien thi $data trong tempale 
      echo Modules::run('template/two_col',$data);
}

public function changestatus($id=false, $trangthai)
{
    $data[trangthai]= $trangthai;
    $this->Mdl_loaihang->_update($id,$data);     
    redirect(base_url()."admin/".__CLASS__);
}
        

    
}


