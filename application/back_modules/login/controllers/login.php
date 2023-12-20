<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MX_Controller {
 
    public function __construct() {
        parent::__construct();      
        $this->load->model('model_login','Mdl_login',TRUE);
    }
	public function index()
	{
        
        //Goi ham trong model thong qua bien khai bao tren
        //Cho du lieu : teen model va ten view vao mang $data
//       $a=1; //Ngay viet ct +1 nam
//       $b=4; // Ngay he thong
//            if ($b>$a)
//           echo " Bao loi"; exit;
        
            $data_post = $this->input->post();
         
        if($data_post) {
            
            $where['username'] = $_POST['username'];
            $where['password'] = $_POST['password'];
           
			$row= $this->Mdl_login->get_where_login($where['username'],$where['password']);
			$data=$row->result();
                       
			if($data) {	 
					$userdata = array(
                                            'admin_user'=> $data[0]->username, 
                                            'admin_pass'=> $data[0]->password,
					    'isLoggedInAdminDemo'=> TRUE  );
					$this->session->set_userdata($userdata); 
                     //var_dump( $data); exit;
                     //echo "<pre>"; print_r($this->session->all_userdata()); exit;
                                        // Tro ve trang admin 
            				redirect(base_url()."admin/loaihang", 'refresh');
			}else{ 					 
			   // Refest lai trang login
                            redirect(base_url() . "admin/login", 'refresh');
			}
				 
		 
		} 
        
        //Tuc hien va tra ve view 
        $data['module']="login";
        $data['view_file']="display";
        echo Modules::run('template/two_col',$data); 
	}
    
    public function logout() {
		
                $userdata = array(
                                  'admin_user' => "", 
				  'admin_pass'=> "" ,
                                  'isLoggedInAdminDemo'=> FALSE);
                                         
		$this->session->set_userdata($userdata); 
                //var_dump($this->session->userdata); exit;    
                redirect( base_url()."admin/login" , 'refresh');
	}
        
}
 