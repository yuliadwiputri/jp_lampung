<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jpBonding extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jpBonding');
    }

    public function index()
    {
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => 'JP-BONDING',
            'jpBonding' => $this->m_jpBonding->list(),
            'isi' => 'admin/jpBonding/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
         $this->form_validation->set_rules('berkas1', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas2', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas3', 'Berkas ', 'required', array('required' => '%s Harus Diisi')); 
        $this->form_validation->set_rules('berkas4', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas5', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpBonding/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpBonding')) {

                $data = array(
                    'title' => 'Jasa Raharja Lampung',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),

                    'isi' => 'admin/jpBonding/v_add'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpBonding/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'foto_jpBonding' => $upload_data['uploads']['file_name'],
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                    'berkas1' => $this->input->post('berkas1'),
                    'berkas2' => $this->input->post('berkas2'),
                    'berkas3' => $this->input->post('berkas3'),
                    'berkas4' => $this->input->post('berkas4'),
                    'berkas5' => $this->input->post('berkas5'),


                );
                $this->m_jpBonding->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                redirect('jpBonding');
            }
        }
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',

            'isi' => 'admin/jpBonding/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }


    public function edit($id_jpBonding)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
       
        $this->form_validation->set_rules('berkas4', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas5', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        
        $this->form_validation->set_rules('berkas2', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas3', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpBonding/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpBonding')) {

                $data = array(
                    'title' => 'Jasa Raharja Lampung',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'jpBonding' => $this->m_jpBonding->detail($id_jpBonding),
                    'isi' => 'admin/jpBonding/v_edit'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpBonding/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $jpBonding = $this->m_jpBonding->detail($id_jpBonding);
                if ($jpBonding->foto_jpBonding != "") {
                    unlink('./foto_jpBonding/' . $jpBonding->foto_jpBonding);
                }
                $data = array(
                    'id_jpBonding' => $id_jpBonding,
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                  
                    'berkas4' => $this->input->post('berkas4'),
                    'berkas5' => $this->input->post('berkas5'),
               
                    'berkas1' => $this->input->post('berkas1'),
                    'berkas2' => $this->input->post('berkas2'),
                    'berkas3' => $this->input->post('berkas3'),
                    'foto_jpBonding' => $upload_data['uploads']['file_name']

                );
                $this->m_jpBonding->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('jpBonding');
            }
            $data = array(
                'id_jpBonding' => $id_jpBonding,
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
              
                'berkas4' => $this->input->post('berkas4'),
                'berkas5' => $this->input->post('berkas5'),
               
                'berkas1' => $this->input->post('berkas1'),
                'berkas2' => $this->input->post('berkas2'),
                'berkas3' => $this->input->post('berkas3'),


            );
            $this->m_jpBonding->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('jpBonding');
        }
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',
            'jpBonding' => $this->m_jpBonding->detail($id_jpBonding),
            'isi' => 'admin/jpBonding/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_jpBonding)
    {
        $jpBonding = $this->m_jpBonding->detail($id_jpBonding);
        if ($jpBonding->foto_jpBonding != "") {
            unlink('./foto_jpBonding/' . $jpBonding->foto_jpBonding);
        }
        $data = array(
            'id_jpBonding' => $id_jpBonding,

        );
        $this->m_jpBonding->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('jpBonding');
    }
}

/* End of file jpBonding.php */
