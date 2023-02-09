<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_carousel3 extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_carousel3');
 
        $this->db->order_by('id_carousel3','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_carousel3', $data);
    }
    
    public function detail($id_carousel3){
        $this->db->select('*');
        $this->db->from('tbl_carousel3');
        $this->db->where('id_carousel3',$id_carousel3);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_carousel3', $data['id_carousel3']);
        $this->db->update('tbl_carousel3',$data);
    }
    
    public function delete($data){
        $this->db->where('id_carousel3', $data['id_carousel3']);
        $this->db->delete('tbl_carousel3',$data);
    }

    

}

/* End of file M_carousel3.php */
