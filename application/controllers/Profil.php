<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_profil');
        
    }
    

    public function index()
    {
        $data = array(
			'title' => 'Jasa Raharja Lampung',
            'title2' => 'Profil Manajemen',
           'profil' => $this->m_profil->list(),
			'isi' => 'admin/profil/v_list'
	 );
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add(){
        $data=array(
            'nama_profil' => $this->input->post('nama_profil'),
            'jabatan' => $this->input->post('jabatan'),
            'foto_profil' => $this->input->post('foto_profil')
        );
        $this->m_profil->add($data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
        redirect('profil');
        
    }

    public function edit($id_profil){
        $data=array(
            'id_profil'=>$id_profil,
            'nama_profil' => $this->input->post('nama_profil'),
            'jabatan' => $this->input->post('jabatan'),
            'foto_profil' => $this->input->post('foto_profil')
        );
        $this->m_profil->edit($data);
        $this->session->set_flashdata('pesan', 'Data berhasil diedit');
        redirect('profil');
        
    }

    public function delete($id_profil){
    $data=array(
        'id_profil'=>$id_profil,
       
    );
    $this->m_profil->delete($data);
    $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
    redirect('profil');
}
}

/* End of file Profil.php */
