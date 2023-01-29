<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jpAspri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jpAspri');
    }

    public function index()
    {
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => 'JP-ASTOR',
            'jpAspri' => $this->m_jpAspri->list(),
            'isi' => 'admin/jpAspri/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
      
        $this->form_validation->set_rules('kelebihan', 'Resiko yang dijamin ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('tidak_jaminan', 'Resiko yang  tidak dijamin ', 'required', array('required' => '%s Harus Diisi'));
       
        $this->form_validation->set_rules('berkas1', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas2', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas3', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpAspri/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpAspri')) {

                $data = array(
                    'title' => 'Jasa Raharja Lampung',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),

                    'isi' => 'admin/jpAspri/v_add'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpAspri/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'foto_jpAspri' => $upload_data['uploads']['file_name'],
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                 
                    'kelebihan' => $this->input->post('kelebihan'),
                    'tidak_jaminan' => $this->input->post('tidak_jaminan'),
              
                    'berkas1' => $this->input->post('berkas1'),
                    'berkas2' => $this->input->post('berkas2'),
                    'berkas3' => $this->input->post('berkas3'),


                );
                $this->m_jpAspri->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                redirect('jpAspri');
            }
        }
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',

            'isi' => 'admin/jpAspri/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }


    public function edit($id_jpAspri)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
       
        $this->form_validation->set_rules('kelebihan', 'Resiko yang dijamin ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('tidak_jaminan', 'Resiko yang  tidak dijamin ', 'required', array('required' => '%s Harus Diisi'));
        
        $this->form_validation->set_rules('berkas2', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas3', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpAspri/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpAspri')) {

                $data = array(
                    'title' => 'Jasa Raharja Lampung',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'jpAspri' => $this->m_jpAspri->detail($id_jpAspri),
                    'isi' => 'admin/jpAspri/v_edit'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpAspri/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $jpAspri = $this->m_jpAspri->detail($id_jpAspri);
                if ($jpAspri->foto_jpAspri != "") {
                    unlink('./foto_jpAspri/' . $jpAspri->foto_jpAspri);
                }
                $data = array(
                    'id_jpAspri' => $id_jpAspri,
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                  
                    'kelebihan' => $this->input->post('kelebihan'),
                    'tidak_jaminan' => $this->input->post('tidak_jaminan'),
               
                    'berkas1' => $this->input->post('berkas1'),
                    'berkas2' => $this->input->post('berkas2'),
                    'berkas3' => $this->input->post('berkas3'),
                    'foto_jpAspri' => $upload_data['uploads']['file_name']

                );
                $this->m_jpAspri->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('jpAspri');
            }
            $data = array(
                'id_jpAspri' => $id_jpAspri,
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
              
                'kelebihan' => $this->input->post('kelebihan'),
                'tidak_jaminan' => $this->input->post('tidak_jaminan'),
               
                'berkas1' => $this->input->post('berkas1'),
                'berkas2' => $this->input->post('berkas2'),
                'berkas3' => $this->input->post('berkas3'),


            );
            $this->m_jpAspri->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('jpAspri');
        }
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',
            'jpAspri' => $this->m_jpAspri->detail($id_jpAspri),
            'isi' => 'admin/jpAspri/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_jpAspri)
    {
        $jpAspri = $this->m_jpAspri->detail($id_jpAspri);
        if ($jpAspri->foto_jpAspri != "") {
            unlink('./foto_jpAspri/' . $jpAspri->foto_jpAspri);
        }
        $data = array(
            'id_jpAspri' => $id_jpAspri,

        );
        $this->m_jpAspri->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('jpAspri');
    }
}

/* End of file jpAspri.php */
