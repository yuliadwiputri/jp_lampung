<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_carousel extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_carousel');
 
        $this->db->order_by('id_carousel','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_carousel', $data);
    }
    
    public function detail($id_carousel){
        $this->db->select('*');
        $this->db->from('tbl_carousel');
        $this->db->where('id_carousel',$id_carousel);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_carousel', $data['id_carousel']);
        $this->db->update('tbl_carousel',$data);
    }
    
    public function delete($data){
        $this->db->where('id_carousel', $data['id_carousel']);
        $this->db->delete('tbl_carousel',$data);
    }

    

}

/* End of file M_carousel.php */
