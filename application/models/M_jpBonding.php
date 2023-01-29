<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_jpBonding extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_jpBonding');
 
        $this->db->order_by('id_jpBonding','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_jpBonding', $data);
    }
    
    public function detail($id_jpBonding){
        $this->db->select('*');
        $this->db->from('tbl_jpBonding');
        $this->db->where('id_jpBonding',$id_jpBonding);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_jpBonding', $data['id_jpBonding']);
        $this->db->update('tbl_jpBonding',$data);
    }
    
    public function delete($data){
        $this->db->where('id_jpBonding', $data['id_jpBonding']);
        $this->db->delete('tbl_jpBonding',$data);
    }

}

/* End of file M_jpBonding.php */
