<?php
class Models_dathang extends CI_Model {
    
    private $_table = "khachhang"; 
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function getList($where = false , $limit = false){
        $this->db->select("*");
        $this->db->from($this->_table);
        if($where)
            $this->db->where($where);
            
        if($limit)    
            $this->db->limit($limit['per_page'] , $limit['start'] );
            
        return $this->db->get()->result();
    }
    public function countList($where = false){
        $this->db->select("*");
        $this->db->from($this->_table); 
        if($where)
            $this->db->where($where); 
        return $this->db->count_all_results(); 
    }
    
    public function update($data , $where){ 
        $this->db->where($where);
        $this->db->update($this->_table, $data); 
    }
    
    public function insert($data){
        $this->db->insert($this->_table, $data); 
    }
    
}

?>