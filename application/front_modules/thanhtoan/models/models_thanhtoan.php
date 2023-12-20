<?php
class Models_thanhtoan extends CI_Model {
    
     
    
    function __construct()
    {
        parent::__construct();
    }
    function get_table() {
    $table = "tonkho";
    return $table;
}
    
    public function checkKhachHang($where){
        $this->db->select('*');
        $this->db->from('khachhang');
        $this->db->where($where); 
        return $this->db->get()->result(); 
    }
     
    
    public function update($data , $where){ 
        $this->db->where($where);
        $this->db->update($this->_table, $data); 
    }
    
    public function insert($data , $table){
        $this->db->insert($table, $data); 
        return $this->db->insert_id();
    }
    
    public function get_where_tonkho($id) {
    $table = $this->get_table();
    $this->db->where('mathang_id', $id);
    $query=$this->db->get($table);
    return $query;

    }
    function tonkho_update($id, $data) {
    $table = $this->get_table();
    $this->db->where('mathang_id', $id);
    $this->db->update($table, $data);
    }
     
    
    
}

?>