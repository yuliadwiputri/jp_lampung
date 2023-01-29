<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_jpGraha extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_jpGraha');
 
        $this->db->order_by('id_jpGraha','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_jpGraha', $data);
    }
    
    public function detail($id_jpGraha){
        $this->db->select('*');
        $this->db->from('tbl_jpGraha');
        $this->db->where('id_jpGraha',$id_jpGraha);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_jpGraha', $data['id_jpGraha']);
        $this->db->update('tbl_jpGraha',$data);
    }
    
    public function delete($data){
        $this->db->where('id_jpGraha', $data['id_jpGraha']);
        $this->db->delete('tbl_jpGraha',$data);
    }

}

/* End of file M_jpGraha.php */
