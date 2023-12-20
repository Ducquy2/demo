
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model {
 
function __construct() {
parent::__construct();

}
function get_table() {
$table = "admin";
return $table;
}
function get_where($id) {
    $table = $this->get_table();
    $this->db->where('username', $id);
    $query=$this->db->get($table);
    return $query;

}
function get_where_login($users,$pass) {
    $table = $this->get_table();
    $this->db->where('username', $users);
    $this->db->where('password', $pass);
    $query=$this->db->get($table);
    return $query;

}

 public function phanquyen($username){
    
     $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $arr = explode("/", $_SERVER['REQUEST_URI']); 
        $so = 0; 
 if (strpos(base_url(), 'admin') == TRUE || (strpos($link, 'admin/login/logout') == FALSE || strpos($link, 'admin/login') == FALSE)) {
          
            $this->db->select('quyen_id');
            $this->db->from('camquyen');
            $this->db->where("INSTR(camquyen, 'http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "' ) > 0 AND username = '" . $username. "'");
            $rs1 = $this->db->get()->result();
     
            //echo "INSTR(camquyen, 'http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "' ) > 0 AND username = " . $username; exit;
            if(count($rs1)){
                return true;
            }
            return FALSE;   
        }
        
 }
 
}

?>