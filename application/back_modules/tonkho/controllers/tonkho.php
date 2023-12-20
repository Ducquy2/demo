<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class tonkho extends MX_Controller
{
function __construct() {
    parent::__construct();
    //Khai bao model hien tai
    $this->load->model('model_tonkho',"Mdl_tonkho",TRUE);
    //Khai bao model chua khoa ngoai neu co
    $this->load->model('mathang/model_mathang',"Mdl_mathang",TRUE);
   
}

public function index()
	{
	        //Goi ham trong model thong qua bien khai bao tren
                $data['detail']=  $this->Mdl_tonkho->get('1');
                            
                //Cho du lieu : teen model va ten view vao mang $data
                $data['module']="tonkho";
                $data['view_file']="display";
                
                //Hien thi $data trong tempale 
                echo Modules::run('template/two_col',$data);
	}
      
public function addedit($id = false){
       
        $this->load->model('model','Mdl_tonkho');
        $data_post = $this->input->post();
        
      
        if(intval($id)){  // Update
           if($data_post){    // Click Submit
               $this->Mdl_tonkho->_update($id, $data_post);
            }
            // lấy nội dung theo $id
             $data['detail'] = $this->Mdl_tonkho->get_where($id);
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
                     $this->Mdl_tonkho->_insert($data_post);
                     
                 }
                   $data['khoangoai']=$this->Mdl_mathang->get(1);
        }
        
        // Thuc hien viec day du lieu ra view
        $data['module']="tonkho";
        $data['view_file']="addedit";
        echo Modules::run('template/two_col',$data);
       
       //Kiem tra neu bam nut submit thi chuyen huong ve index.php
       if($_POST)
            redirect(base_url()."admin/tonkho");
    }
public function delete($id) {
       //Xoa hinhf trong thu muc
        $getpic = $this->Mdl_tonkho->get_where($id);
        foreach ($getpic->result() as $row)
                 {
                     unlink($row->path);
                 }
        //Ket thuc Xoa hinh cu truoc khi update
        //Xoas du lieu trong db
        $this->Mdl_tonkho->_delete($id);
        redirect(base_url()."admin/tonkho");
}
public function search()
{
    
    $data_post = $this->input->post();
   
    $data['detail']= $this->Mdl_tonkho->get_where_custom_like('tonkho',$data_post['search']);
               
     //Cho du lieu : teen model va ten view vao mang $data
     $data['module']="tonkho";
     $data['view_file']="display";
     $data['links']="";           
     //Hien thi $data trong tempale 
      echo Modules::run('template/two_col',$data);
}

public function changestatus($id=false, $trangthai)
{
    $data[trangthai]= $trangthai;
    $this->Mdl_tonkho->_update($id,$data);     
    redirect(base_url()."admin/".__CLASS__);
}

    
}


