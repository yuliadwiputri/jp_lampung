<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_carousel4 extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_carousel4');
 
        $this->db->order_by('id_carousel4','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_carousel4', $data);
    }
    
    public function detail($id_carousel4){
        $this->db->select('*');
        $this->db->from('tbl_carousel4');
        $this->db->where('id_carousel4',$id_carousel4);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_carousel4', $data['id_carousel4']);
        $this->db->update('tbl_carousel4',$data);
    }
    
    public function delete($data){
        $this->db->where('id_carousel4', $data['id_carousel4']);
        $this->db->delete('tbl_carousel4',$data);
    }

    

}

/* End of file M_carousel4.php */


