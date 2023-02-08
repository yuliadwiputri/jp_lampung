<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class dataProfil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dataProfil');
        
    }
    
        public function index()
        {
            $data = array(
                'title' => 'Protector for Protection',
                'title2' => 'Edit Data Profil',
                'dataProfil' => $this->m_dataProfil->detail($id_user),
            //    'dataProfil' => $this->m_dataProfil->list(),
                'isi' => 'admin/dataProfil/v_edit'
         );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }

                public function edit1 ($id_user=1){
                    $data=array(
                        'title' => 'Protector for Protection',
                        'title2' => '',
                     
                    'dataProfil' => $this->m_dataProfil->detail($id_user),
                        'isi' => 'admin/dataProfil/v_edit'
                        
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
    
        public function edit($id_user){
                        $data=array(
                            'id_user' => $id_user,
                            'nama_user' => $this->input->post('nama_user'),
                            'username' => $this->input->post('username'),
                            'password' => $this->input->post('password'),
                          
                            
                        );
                        $this->m_dataProfil->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                        redirect('adminJP/logout');
        
        }
    
       
    
    

}

/* End of file dataProfil.php */
