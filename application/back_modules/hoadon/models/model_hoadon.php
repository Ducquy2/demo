
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_hoadon extends CI_Model {
 
function __construct() {
parent::__construct();

}
function get_table() {
$table = "hoadon";
return $table;
}
function get($order_by) {
$table = $this->get_table();
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}
function get_with_limit($limit, $offset, $order_by) {
$table = $this->get_table();
$this->db->limit($limit, $offset);
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;


}
function get_where($id) {
$table = $this->get_table();
$this->db->where('hoadon_id', $id);
$query=$this->db->get($table);
return $query;

}
function get_where_custom($col, $value) {
$table = $this->get_table();
$this->db->where($col, $value);
$query=$this->db->get($table);
return $query;
}


function _insert($data) {
$table = $this->get_table();
$this->db->insert($table, $data);
}
function _update($id, $data) {
$table = $this->get_table();
$this->db->where('hoadon_id', $id);
$this->db->update($table, $data);
}
function _delete($id) {
$table = $this->get_table();
$this->db->where('hoadon_id', $id);
$this->db->delete($table);
}
function count_where($column, $value) {
$table = $this->get_table();
$this->db->where($column, $value);
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}
function count_all() {
$table = $this->get_table();
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}
function get_max() {
$table = $this->get_table();
$this->db->select_max('id');
$query = $this->db->get($table);
$row=$query->row();
$id=$row->hoadon_id;
return $id;
}
function _custom_query($mysql_query) {
$query = $this->db->query($mysql_query);
return $query;
}

// public function _resize_pic($file_name,$new_width,$new_hieght)
//        {
//            $config['image_library'] = 'gd2';
//            //Chu y khia bao source iamge
//            $config['source_image'] = '../uploads/'.$file_name;
//            $config['create_thumb'] = FALSE;
//            $config['maintain_ratio'] = TRUE;
//            $config['width']         = $new_width;
//            $config['height']       = $new_hieght;
//            //$this->load->library('image_lib', $config); Lenh nay khong goi nhieu lan
//            $this->image_lib->initialize($config);
//            $this->image_lib->resize();
//            
//            
//            $this->image_lib->clear();
//        }
//        private function setup_upload_option()
//        {
//             
//             $config=array();
//             $config['upload_path']          = '../uploads/';
//             $config['allowed_types']        = '*';
//             //$config['max_size']             = 10000; 
//             $config['overwrite']            = FALSE;
//             return $config;
//              
//        }
//        public function do_upload()
//        {
//                $this->load->library('image_lib');
//                $this->load->library('upload');
//                $files = $_FILES;
//                
//                    $_FILES['userfile']['name'] = $files['userfile']['name'][0];
//                    $_FILES['userfile']['type'] = $files['userfile']['type'][0];
//                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][0];
//                    $_FILES['userfile']['error'] = $files['userfile']['error'][0];
//                    $_FILES['userfile']['size'] = $files['userfile']['size'][0];
//
//                    $this->upload->initialize($this->setup_upload_option());
//                    if ( ! $this->upload->do_upload())
//                    {
//                         $error = array('error' => $this->upload->display_errors());
//                            print_r($error);
//                         return '';
//                    }
//                    else
//                {
////                    // Khai baos thoong so dr resize
//                      $data= $this->upload->data();   
//                      $dataarray=array(
//                          'hinh'        => $data['orig_name'],
//                          'path'        => $data['full_path']
//                      );
//                      
//
//                      $file_name=$data['file_name'];
//                
//                      $new_width=200;
//                      $new_height=200;
//                      $this->_resize_pic($file_name, $new_width, $new_height);
//                   
//             }
//                return $dataarray;
//            } 
           
     
       
}

?>