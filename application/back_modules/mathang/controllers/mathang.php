<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class mathang extends MX_Controller
{
function __construct() {
    parent::__construct();
    //Khai bao model hien tai
    $this->load->model('model_mathang',"Mdl_mathang",TRUE);
    //Khai bao model chua khoa ngoai neu co
    $this->load->model('loaihang/model_loaihang',"Mdl_loaihang",TRUE);
   
}

public function index()
	{
	        //Goi ham trong model thong qua bien khai bao tren
                $data['detail']=  $this->Mdl_mathang->get('1');
                            
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="mathang";
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
        $getpic = $this->Mdl_mathang->get_where($id);
        if(!empty($_FILES['userfile']['name'][0]))
             {
                 foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
             }
        //Ket thuc Xoa hinh cu truoc khi update
        
        if($data_post){    // Click Submit
                $data_post1 = $this->Mdl_mathang->do_upload(); 
                $data_post['hinh']=$data_post1['hinh'];
                $data_post['path']=$data_post1['path'];
                $data_post['slug']= str_replace(' ','-',trim($data_post['tenmh']));
                
                $this->Mdl_mathang->_update($id, $data_post);
            }
            // lấy nội dung theo $id
             $data['detail'] = $this->Mdl_mathang->get_where($id);
             //$data['khoangoai']=$this->Mdl_loaihang->get(1);
        }else{
            // Insert
             if($data_post){    // Click Submit
                    //Lay hinh va duong dan upload de luu vao db
                      $data_post1 = $this->Mdl_mathang->do_upload(); 
                      $data_post['hinh']=$data_post1['hinh'];
                      $data_post['path']=$data_post1['path'];
                      // Them vao slug trong db
                      $data_post['slug']= str_replace(' ','-',trim($data_post['tenmh']));
                      //$data_post['slug']= trim("     gdgha g    ");
                    //Thuc hien insert vao db
                    $this->Mdl_mathang->_insert($data_post);
                     
                 }
        }
        //$this->load->model('loaihang/model',"Mdl_loaihang");
        $data['khoangoai']=$this->Mdl_loaihang->get(1);
       
        // Thuc hien viec day du lieu ra view
        $data['module']="mathang";
        $data['view_file']="addedit";
        echo Modules::run('template/two_col',$data);
       
       //Kiem tra neu bam nut submit thi chuyen huong ve index.php
       if($_POST)
            redirect(base_url()."admin/mathang");
    }
public function delete($id) {
       //Xoa hinhf trong thu muc
        $getpic = $this->Mdl_mathang->get_where($id);
        foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
        //Ket thuc Xoa hinh cu truoc khi update
        //Xoas du lieu trong db
        $this->Mdl_mathang->_delete($id);
        redirect(base_url()."admin/mathang");
}
public function search()
{
    
    $data_post = $this->input->post();
   
    $data['detail']= $this->Mdl_mathang->get_where_custom_like('tenmathang',$data_post['search']);
               
     //Cho du lieu : teen model va ten view vao mang $data
     $data['module']="mathang";
     $data['view_file']="display";
     $data['links']="";           
     //Hien thi $data trong tempale 
      echo Modules::run('template/two_col',$data);
}

public function changestatus($id=false, $trangthai)
{
    $data[trangthai]= $trangthai;
    $this->Mdl_mathang->_update($id,$data);     
    redirect(base_url()."admin/".__CLASS__);
}

    
}


