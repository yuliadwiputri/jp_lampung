<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
        $this->load->model('m_sejarah');
    }

    public function index()
    {
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => 'Sejarah JRP',
            'sejarah' => $this->m_sejarah->list(),
            'isi' => 'admin/sejarah/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('desc1', 'Deskripsi sejarah', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi sejarah', 'required', array('required' => '%s Harus Diisi'));
        // $this->form_validation->set_rules('desc3', 'Deskripsi sejarah', 'required', array('required' => '%s Harus Diisi'));
        // $this->form_validation->set_rules('desc4', 'Deskripsi sejarah', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_sejarah/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_sejarah')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),

                    'isi' => 'admin/sejarah/v_add'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_sejarah/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'foto_sejarah' => $upload_data['uploads']['file_name'],
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                    // 'desc3' => $this->input->post('desc3'),
                    // 'desc4' => $this->input->post('desc4')


                );
                $this->m_sejarah->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                redirect('sejarah');
            }
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',

            'isi' => 'admin/sejarah/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }


    public function edit($id_sejarah)
    {
        $this->form_validation->set_rules('desc1', 'Deskripsi Sejarah', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi Sejarah', 'required', array('required' => '%s Harus Diisi'));
        // $this->form_validation->set_rules('desc3', 'Deskripsi sejarah', 'required', array('required' => '%s Harus Diisi'));
        // $this->form_validation->set_rules('desc4', 'Deskripsi sejarah', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_sejarah/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_sejarah')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'sejarah' => $this->m_sejarah->detail($id_sejarah),
                    'isi' => 'admin/sejarah/v_edit'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_sejarah/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $sejarah = $this->m_sejarah->detail($id_sejarah);
                if ($sejarah->foto_sejarah != "") {
                    unlink('./foto_sejarah/' . $sejarah->foto_sejarah);
                }
                $data = array(
                    'id_sejarah' => $id_sejarah,
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                    // 'desc3' => $this->input->post('desc3'),
                    // 'desc4' => $this->input->post('desc4'),
                    'foto_sejarah' => $upload_data['uploads']['file_name']

                );
                $this->m_sejarah->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('sejarah');
            }
            $data = array(
                'id_sejarah' => $id_sejarah,
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
                // 'desc3' => $this->input->post('desc3'),
                // 'desc4' => $this->input->post('desc4'),


            );
            $this->m_sejarah->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('sejarah');
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',
            'sejarah' => $this->m_sejarah->detail($id_sejarah),
            'isi' => 'admin/sejarah/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_sejarah)
    {
        $sejarah = $this->m_sejarah->detail($id_sejarah);
        if ($sejarah->foto_sejarah != "") {
            unlink('./foto_sejarah/' . $sejarah->foto_sejarah);
        }
        $data = array(
            'id_sejarah' => $id_sejarah,

        );
        $this->m_sejarah->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('sejarah');
    }
}

/* End of file Sejarah.php */
