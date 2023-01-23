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
        $this->form_validation->set_rules('nama_profil', 'nama_profil', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        // $this->form_validation->set_rules('foto_profil', 'foto_profil', 'required');

        
        if ($this->form_validation->run() == TRUE ) {
            $config['upload_path']        = './foto_profil/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if ( !$this->upload->do_upload('foto_profil'))
            {
                   
                    $data=array(
                        'title' => 'Jasa Raharja Lampung',
                        'title2' => '',
                       'error' => $this->upload->display_errors(),
                    
                        'isi' => 'admin/profil/v_add'
                        // 'nama_profil' => $this->input->post('nama_profil'),
                        // 'jabatan' => $this->input->post('jabatan'),
                        // 'foto_profil' => $this->input->post('foto_profil')
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library']='gd2';
                    $config['source_image']='./foto_profil/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    $data=array(
                        'nama_profil' => $this->input->post('nama_profil'),
                        'jabatan' => $this->input->post('jabatan'),
                        'foto_profil' => $upload_data['uploads']['file_name']
                        
                    );
                    $this->m_profil->add($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                    redirect('profil');
                    

            }
        }
        
        $data=array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',
          
            'isi' => 'admin/profil/v_add'
            // 'nama_profil' => $this->input->post('nama_profil'),
            // 'jabatan' => $this->input->post('jabatan'),
            // 'foto_profil' => $this->input->post('foto_profil')
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        
    }

    public function edit($id_profil){
        $this->form_validation->set_rules('nama_profil', 'nama_profil', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        // $this->form_validation->set_rules('foto_profil', 'foto_profil', 'required');

        
        if ($this->form_validation->run() == TRUE ) {
            $config['upload_path']        = './foto_profil/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if ( !$this->upload->do_upload('foto_profil'))
            {
                   
                    $data=array(
                        'title' => 'Jasa Raharja Lampung',
                        'title2' => '',
                       'error' => $this->upload->display_errors(),
                       'profil'=>$this->m_profil->detail($id_profil),
                       'isi' => 'admin/profil/v_edit'
                        // 'nama_profil' => $this->input->post('nama_profil'),
                        // 'jabatan' => $this->input->post('jabatan'),
                        // 'foto_profil' => $this->input->post('foto_profil')
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library']='gd2';
                    $config['source_image']='./foto_profil/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    //hapus yg lma
                    $profil=$this->m_profil->detail($id_profil);
                    if ($profil->foto_profil !="") {
                        unlink('./foto_profil/'.$profil->foto_profil);
                    }
                    $data=array(
                        'id_profil'=>$id_profil,
                        'nama_profil' => $this->input->post('nama_profil'),
                        'jabatan' => $this->input->post('jabatan'),
                        'foto_profil' => $upload_data['uploads']['file_name']
                        
                    );
                    $this->m_profil->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                    redirect('profil');
                    

            }
            $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library']='gd2';
                    $config['source_image']='./foto_profil/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    $data=array(
                        'id_profil'=>$id_profil,
                        'nama_profil' => $this->input->post('nama_profil'),
                        'jabatan' => $this->input->post('jabatan'),
                        
                        
                    );
                    $this->m_profil->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                    redirect('profil');
                    
        }
        $data=array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',
          'profil'=>$this->m_profil->detail($id_profil),
            'isi' => 'admin/profil/v_edit'
            // 'nama_profil' => $this->input->post('nama_profil'),
            // 'jabatan' => $this->input->post('jabatan'),
            // 'foto_profil' => $this->input->post('foto_profil')
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        
    }

    public function delete($id_profil){
        $profil=$this->m_profil->detail($id_profil);
        if ($profil->foto_profil !="") {
            unlink('./foto_profil/'.$profil->foto_profil);
        }
    $data=array(
        'id_profil'=>$id_profil,
       
    );
    $this->m_profil->delete($data);
    $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
    redirect('profil');
}
}

/* End of file Profil.php */
