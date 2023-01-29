<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jpGraha extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jpGraha');
    }

    public function index()
    {
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => 'JP-BONDING',
            'jpGraha' => $this->m_jpGraha->list(),
            'isi' => 'admin/jpGraha/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('bangunan', 'bangunan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('harta', 'harta', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('lingkup', 'lingkup ', 'required', array('required' => '%s Harus Diisi'));
         $this->form_validation->set_rules('jaminan1', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan2', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan3', 'jaminan ', 'required', array('required' => '%s Harus Diisi')); 
        $this->form_validation->set_rules('jaminan4', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan5', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas', 'berkas ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpGraha/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpGraha')) {

                $data = array(
                    'title' => 'Jasa Raharja Lampung',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),

                    'isi' => 'admin/jpGraha/v_add'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpGraha/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'foto_jpGraha' => $upload_data['uploads']['file_name'],
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                    'bangunan' => $this->input->post('bangunan'),
                    'harta' => $this->input->post('harta'),
                    'lingkup' => $this->input->post('lingkup'),
                    'jaminan1' => $this->input->post('jaminan1'),
                    'jaminan2' => $this->input->post('jaminan2'),
                    'jaminan3' => $this->input->post('jaminan3'),
                    'jaminan4' => $this->input->post('jaminan4'),
                    'jaminan5' => $this->input->post('jaminan5'),
                    'berkas' => $this->input->post('berkas'),


                );
                $this->m_jpGraha->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                redirect('jpGraha');
            }
        }
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',

            'isi' => 'admin/jpGraha/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }


    public function edit($id_jpGraha)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('bangunan', 'bangunan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('harta', 'harta', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('lingkup', 'lingkup ', 'required', array('required' => '%s Harus Diisi'));
         $this->form_validation->set_rules('jaminan1', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan2', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan3', 'jaminan ', 'required', array('required' => '%s Harus Diisi')); 
        $this->form_validation->set_rules('jaminan4', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan5', 'jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas', 'berkas ', 'required', array('required' => '%s Harus Diisi'));
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpGraha/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpGraha')) {

                $data = array(
                    'title' => 'Jasa Raharja Lampung',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'jpGraha' => $this->m_jpGraha->detail($id_jpGraha),
                    'isi' => 'admin/jpGraha/v_edit'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpGraha/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $jpGraha = $this->m_jpGraha->detail($id_jpGraha);
                if ($jpGraha->foto_jpGraha != "") {
                    unlink('./foto_jpGraha/' . $jpGraha->foto_jpGraha);
                }
                $data = array(
                    'id_jpGraha' => $id_jpGraha,
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                    'bangunan' => $this->input->post('bangunan'),
                    'harta' => $this->input->post('harta'),
                    'lingkup' => $this->input->post('lingkup'),
                    'jaminan1' => $this->input->post('jaminan1'),
                    'jaminan2' => $this->input->post('jaminan2'),
                    'jaminan3' => $this->input->post('jaminan3'),
                    'jaminan4' => $this->input->post('jaminan4'),
                    'jaminan5' => $this->input->post('jaminan5'),
                    'berkas' => $this->input->post('berkas'),
                    'foto_jpGraha' => $upload_data['uploads']['file_name']

                );
                $this->m_jpGraha->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('jpGraha');
            }
            $data = array(
                'id_jpGraha' => $id_jpGraha,
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
              
                'bangunan' => $this->input->post('bangunan'),
                'harta' => $this->input->post('harta'),
                'lingkup' => $this->input->post('lingkup'),
                'jaminan1' => $this->input->post('jaminan1'),
                'jaminan2' => $this->input->post('jaminan2'),
                'jaminan3' => $this->input->post('jaminan3'),
                'jaminan4' => $this->input->post('jaminan4'),
                'jaminan5' => $this->input->post('jaminan5'),
                'berkas' => $this->input->post('berkas'),

            );
            $this->m_jpGraha->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('jpGraha');
        }
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'title2' => '',
            'jpGraha' => $this->m_jpGraha->detail($id_jpGraha),
            'isi' => 'admin/jpGraha/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_jpGraha)
    {
        $jpGraha = $this->m_jpGraha->detail($id_jpGraha);
        if ($jpGraha->foto_jpGraha != "") {
            unlink('./foto_jpGraha/' . $jpGraha->foto_jpGraha);
        }
        $data = array(
            'id_jpGraha' => $id_jpGraha,

        );
        $this->m_jpGraha->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('jpGraha');
    }
}

/* End of file jpGraha.php */
