<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_visiMisi2 extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_about');
 
        $this->db->order_by('id','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_about', $data);
    }
    
    public function detail($id){
        $this->db->select('*');
        $this->db->from('tbl_about');
        $this->db->where('id',$id);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_about',$data);
    }
    
    public function delete($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_about',$data);
    }

}

/* End of file M_visiMisi.php */
