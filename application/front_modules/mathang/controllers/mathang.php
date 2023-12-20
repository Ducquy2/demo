<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class mathang extends MX_Controller
{
function __construct() {
    parent::__construct();
    //Khai bao model hien tai
    $this->load->model('model_mathang',"Mdl_mathang",TRUE);
    $this->load->model('loaihang/model_loaihang',"Mdl_loaihang",TRUE);
    //$this->load->model('login/model_login',"Mdl_login",TRUE);
    

// Check Login
 
//    if ($this->session->userdata('isLoggedInAdminDemo') == FALSE) {
//        redirect(base_url() .'admin/login');  
//    } 
    // End Check Login    


// Check quyen 
    //echo var_dump($this->session->userdata); exit;
    //echo $this->Mdl_login->phanquyen($this->session->userdata('admin_user')); exit;
//    if ( $this->Mdl_login->phanquyen($this->session->userdata('admin_user')) == true) {
//            redirect(base_url() . 'admin/login');
//            //echo "Khong quyen truy cap"; die;
//    }
// end Check quyen 
}

public function index($id1 = false,$id = false)
	{
          // Phan trang       
                 $this->load->library('pagination');
                 $config=array();
                 $config['base_url']=  base_url().'mathang/index';
                 $config['total_rows']=  $this->Mdl_mathang->count_all();
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
                //$data['detail']=  $this->Mdl_mathang->get('1');
                 //echo $this->uri->segment(2); exit;    
                
                if($id1==false)
                 $data['detail']= $this->Mdl_mathang->get_with_limit($config['per_page'],$id,1);
                else
                 $data['detail']= $this->Mdl_mathang->get_with_limit_where($id1,$config['per_page'],$id,1);
                
                $data['khoangoai']=$this->Mdl_loaihang->get(1);
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="mathang";
                $data['view_file']="display";
                
                //Hien thi $data trong tempale 
                echo Modules::run('template/four_col',$data);
	}
      

public function search()
{
    
    $data_post = $this->input->post();
   
    $data['detail']= $this->Mdl_mathang->get_where_custom_like('mh',$data_post['search']);
               
     //Cho du lieu : teen model va ten view vao mang $data
     $data['module']="mathang";
     $data['view_file']="display";
     $data['links']="";           
     //Hien thi $data trong tempale 
      echo Modules::run('template/',$data);
}
public function detail($slug = false)
	{
                $data['khoangoai']=$this->Mdl_loaihang->get(1);
                $data['detail']= $this->Mdl_mathang->get_where_slug($slug);
                 
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="mathang";
                $data['view_file']="detail";
                
                //Hien thi $data trong tempale 
                echo Modules::run('template/four_col',$data);
	}

public function listview($id1 = false,$id = false)
    {
          // Phan trang 
          
                 $this->load->library('pagination');
                 $config=array();
                 $config['base_url']=  base_url().'mathang/listview';
                 $config['total_rows']=  $this->Mdl_mathang->count_all();
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
                //$data['detail']=  $this->Mdl_mathang->get('1');
                 //echo $this->uri->segment(2); exit;    
                 if($id1==false)
                     
                 $data['detail']= $this->Mdl_mathang->get_with_limit($config['per_page'],$id,1);
                else
                 $data['detail']= $this->Mdl_mathang->get_with_limit_where($id1,$config['per_page'],$id,1);
                 
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="mathang";
                $data['view_file']="listview";
                $data['khoangoai']=$this->Mdl_loaihang->get(1);
                
                //Hien thi $data trong tempale 
                echo Modules::run('template/four_col',$data);
    }
   

    

    
    }


