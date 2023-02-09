<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_carousel2 extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_carousel2');
 
        $this->db->order_by('id_carousel2','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_carousel2', $data);
    }
    
    public function detail($id_carousel2){
        $this->db->select('*');
        $this->db->from('tbl_carousel2');
        $this->db->where('id_carousel2',$id_carousel2);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_carousel2', $data['id_carousel2']);
        $this->db->update('tbl_carousel2',$data);
    }
    
    public function delete($data){
        $this->db->where('id_carousel2', $data['id_carousel2']);
        $this->db->delete('tbl_carousel2',$data);
    }

    

}

/* End of file M_carousel2.php */
