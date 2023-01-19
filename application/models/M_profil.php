<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {
public function list(){
    $this->db->select('*');
    $this->db->from('tbl_profil');
    $this->db->order_by('id_profil','DESC');
    return $this->db->get()->result();
    
}

public function add($data){
        $this->db->insert('tbl_profil', $data);
}

public function edit($data){
    $this->db->where('id_profil', $data['id_profil']);
    $this->db->update('tbl_profil',$data);
}

public function delete($data){
    $this->db->where('id_profil', $data['id_profil']);
    $this->db->delete('tbl_profil',$data);
}

/* End of file M_profil.php */
}