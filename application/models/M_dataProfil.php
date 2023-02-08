<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_dataProfil extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_user');
 
        $this->db->order_by('id_user','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_user', $data);
    }
    
    public function detail($id_user){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id_user',$id_user);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('tbl_user',$data);
    }
    
    public function delete($data){
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('tbl_user',$data);
    }

}

/* End of file M_user.php */
