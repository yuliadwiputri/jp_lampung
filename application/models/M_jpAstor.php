<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_jpAstor extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_jpAstor');
 
        $this->db->order_by('id_jpAstor','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_jpAstor', $data);
    }
    
    public function detail($id_jpAstor){
        $this->db->select('*');
        $this->db->from('tbl_jpAstor');
        $this->db->where('id_jpAstor',$id_jpAstor);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_jpAstor', $data['id_jpAstor']);
        $this->db->update('tbl_jpAstor',$data);
    }
    
    public function delete($data){
        $this->db->where('id_jpAstor', $data['id_jpAstor']);
        $this->db->delete('tbl_jpAstor',$data);
    }

}

/* End of file M_jpAstor.php */
