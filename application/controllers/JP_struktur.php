<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class JP_struktur extends CI_Controller {

    public function __construct()
{
    parent::__construct();
    $this->load->model('m_struktur');
    
}

    public function index()
    {
        $data = array(
			'title' => 'Jasa Raharja Lampung',
            'title2' => 'Struktur',
           'struktur' => $this->m_struktur->list(),
			'isi' => 'admin/struktur/v_list'
	 );
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    public function add (){
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if ($this->form_validation->run() == TRUE ) {
            $config['upload_path']        = './struktur/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if ( !$this->upload->do_upload('struktur'))
            {
                   
                    $data=array(
                        'title' => 'Jasa Raharja Lampung',
                        'title2' => '',
                       'error' => $this->upload->display_errors(),
                    
                        'isi' => 'admin/struktur/v_add'
                        
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library']='gd2';
                    $config['source_image']='./struktur/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    $data=array(
                        'nama' => $this->input->post('nama'),
                        'struktur' => $upload_data['uploads']['file_name']
                        
                    );
                    $this->m_struktur->add($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                    redirect('JP_struktur');
                    

            }
        }
        $data = array(
			'title' => 'Jasa Raharja Lampung',
            'title2' => '',
          
			'isi' => 'admin/struktur/v_add'
	 );
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id_struktur){
        $this->form_validation->set_rules('nama', 'nama', 'required');
       
        if ($this->form_validation->run() == TRUE ) {
            $config['upload_path']        = './struktur/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if ( !$this->upload->do_upload('struktur'))
            {
                   
                    $data=array(
                        'title' => 'Jasa Raharja Lampung',
                        'title2' => '',
                       'error' => $this->upload->display_errors(),
                    'struktur' => $this->m_struktur->detail($id_struktur),
                        'isi' => 'admin/struktur/v_edit'
                        
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
            }
            else
            {
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library']='gd2';
                    $config['source_image']='./struktur/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    //hapus yg lma
                    $struktur=$this->m_struktur->detail($id_struktur);
                    if ($struktur->struktur !="") {
                        unlink('./struktur/'.$struktur->struktur);
                    }
                    $data=array(
                        'id_struktur' => $id_struktur,
                        'nama' => $this->input->post('nama'),
                        'struktur' => $upload_data['uploads']['file_name']
                        
                    );
                    $this->m_struktur->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                    redirect('JP_struktur');
                    

            }
            $data=array(
                'id_struktur' => $id_struktur,
                'nama' => $this->input->post('nama'),
               
                
            );
            $this->m_struktur->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('JP_struktur');
        }
        $data = array(
			'title' => 'Jasa Raharja Lampung',
            'title2' => '',
            'struktur' => $this->m_struktur->detail($id_struktur),
			'isi' => 'admin/struktur/v_edit'
	 );
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function delete($id_struktur){
        $struktur=$this->m_struktur->detail($id_struktur);
        if ($struktur->struktur !="") {
            unlink('./struktur/'.$struktur->struktur);
        }
        $data=array(
            'id_struktur'=>$id_struktur,
           
           
        );
        $this->m_struktur->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('JP_struktur');
    }



}

/* End of file Struktur1.php */
