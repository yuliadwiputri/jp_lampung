<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_struktur extends CI_Model {

    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_struktur');
        $this->db->order_by('id_struktur','DESC');
        return $this->db->get()->result();
        
    }
    
    public function add($data){
            $this->db->insert('tbl_struktur', $data);
    }
    
    public function detail($id_struktur){
        $this->db->select('*');
        $this->db->from('tbl_struktur');
        $this->db->where('id_struktur',$id_struktur);
        return $this->db->get()->row();
    }
    public function edit($data){
        $this->db->where('id_struktur', $data['id_struktur']);
        $this->db->update('tbl_struktur',$data);
    }
    
    public function delete($data){
        $this->db->where('id_struktur', $data['id_struktur']);
        $this->db->delete('tbl_struktur',$data);
    }

}

/* End of file M_struktur.php */
