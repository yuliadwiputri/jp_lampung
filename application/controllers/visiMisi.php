<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class visiMisi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_visiMisi');
        
    }
    
        public function index()
        {
            $data = array(
                'title' => 'Protector for Protection',
                'title2' => 'Visi Misi JRP',
               'visiMisi' => $this->m_visiMisi->list(),
                'isi' => 'admin/visiMisi/v_list'
         );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }

        public function add1 (){
            $data=array(
                'title' => 'Protector for Protection',
                'title2' => '',
               
            
                'isi' => 'admin/visiMisi/v_add'
                
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }

        public function add (){
            $this->form_validation->set_rules('visi', 'Visi', 'required',array('required'=>'%s Harus Diisi'));
            $this->form_validation->set_rules('misi', 'Misi', 'required',array('required'=>'%s Harus Diisi'));
  
                        $data=array(
                         
                            'visi' => $this->input->post('visi'),
                            'misi' => $this->input->post('misi')
                            

                            
                        );
                        $this->m_visiMisi->add($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                        redirect('visiMisi');
                        
    
                }
           
                public function edit1 ($id){
                    $data=array(
                        'title' => 'Protector for Protection',
                        'title2' => '',
                     
                    'visiMisi' => $this->m_visiMisi->detail($id),
                        'isi' => 'admin/visiMisi/v_edit'
                        
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
    
        public function edit($id){
                        $data=array(
                            'id' => $id,
                            'visi' => $this->input->post('visi'),
                            'misi' => $this->input->post('misi'),
                          
                            
                        );
                        $this->m_visiMisi->edit($data);
                        $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                        redirect('visiMisi');
        
        }
    
        public function delete($id){
           
            $data=array(
                'id'=>$id,
               
            );
            $this->m_visiMisi->delete($data);
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect('visiMisi');
        }
    
    

}

/* End of file visiMisi.php */
