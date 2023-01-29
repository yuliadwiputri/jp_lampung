<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_jpAspri extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_jpAspri');
 
        $this->db->order_by('id_jpAspri','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_jpAspri', $data);
    }
    
    public function detail($id_jpAspri){
        $this->db->select('*');
        $this->db->from('tbl_jpAspri');
        $this->db->where('id_jpAspri',$id_jpAspri);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_jpAspri', $data['id_jpAspri']);
        $this->db->update('tbl_jpAspri',$data);
    }
    
    public function delete($data){
        $this->db->where('id_jpAspri', $data['id_jpAspri']);
        $this->db->delete('tbl_jpAspri',$data);
    }

}

/* End of file M_jpAspri.php */
