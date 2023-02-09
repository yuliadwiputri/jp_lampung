<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jpAstor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jpAstor');
    }

    public function index()
    {
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => 'JP-ASTOR',
            'jpAstor' => $this->m_jpAstor->list(),
            'isi' => 'admin/jpAstor/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('lingkup', 'Ruang Lingkup ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan', 'Resiko yang dijamin ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('tidak_jaminan', 'Resiko yang  tidak dijamin ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jenis', 'Jenis Jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas1', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas2', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas3', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpAstor/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 9000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpAstor')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),

                    'isi' => 'admin/jpAstor/v_add'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpAstor/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'foto_jpAstor' => $upload_data['uploads']['file_name'],
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                    'lingkup' => $this->input->post('lingkup'),
                    'ilustrasi' => $this->input->post('ilustrasi'),
                    'jaminan' => $this->input->post('jaminan'),
                    'tidak_jaminan' => $this->input->post('tidak_jaminan'),
                    'jenis' => $this->input->post('jenis'),
                    'berkas1' => $this->input->post('berkas1'),
                    'berkas2' => $this->input->post('berkas2'),
                    'berkas3' => $this->input->post('berkas3'),


                );
                $this->m_jpAstor->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                redirect('jpAstor');
            }
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',

            'isi' => 'admin/jpAstor/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }


    public function edit($id_jpAstor)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('subjudul', 'Subjudul', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc1', 'Deskripsi Singkat', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('desc2', 'Deskripsi ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('lingkup', 'Ruang Lingkup ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jaminan', 'Resiko yang dijamin ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('tidak_jaminan', 'Resiko yang  tidak dijamin ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('jenis', 'Jenis Jaminan ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas1', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas2', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('berkas3', 'Berkas ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_jpAstor/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_jpAstor')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'jpAstor' => $this->m_jpAstor->detail($id_jpAstor),
                    'isi' => 'admin/jpAstor/v_edit'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_jpAstor/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $jpAstor = $this->m_jpAstor->detail($id_jpAstor);
                if ($jpAstor->foto_jpAstor != "") {
                    unlink('./foto_jpAstor/' . $jpAstor->foto_jpAstor);
                }
                $data = array(
                    'id_jpAstor' => $id_jpAstor,
                    'judul' => $this->input->post('judul'),
                    'subjudul' => $this->input->post('subjudul'),
                    'desc1' => $this->input->post('desc1'),
                    'desc2' => $this->input->post('desc2'),
                    'lingkup' => $this->input->post('lingkup'),
                    'ilustrasi' => $this->input->post('ilustrasi'),
                    'jaminan' => $this->input->post('jaminan'),
                    'tidak_jaminan' => $this->input->post('tidak_jaminan'),
                    'jenis' => $this->input->post('jenis'),
                    'berkas1' => $this->input->post('berkas1'),
                    'berkas2' => $this->input->post('berkas2'),
                    'berkas3' => $this->input->post('berkas3'),
                    'foto_jpAstor' => $upload_data['uploads']['file_name']

                );
                $this->m_jpAstor->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('jpAstor');
            }
            $data = array(
                'id_jpAstor' => $id_jpAstor,
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
                'judul' => $this->input->post('judul'),
                'subjudul' => $this->input->post('subjudul'),
                'desc1' => $this->input->post('desc1'),
                'desc2' => $this->input->post('desc2'),
                'lingkup' => $this->input->post('lingkup'),
                'ilustrasi' => $this->input->post('ilustrasi'),
                'jaminan' => $this->input->post('jaminan'),
                'tidak_jaminan' => $this->input->post('tidak_jaminan'),
                'jenis' => $this->input->post('jenis'),
                'berkas1' => $this->input->post('berkas1'),
                'berkas2' => $this->input->post('berkas2'),
                'berkas3' => $this->input->post('berkas3'),


            );
            $this->m_jpAstor->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('jpAstor');
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',
            'jpAstor' => $this->m_jpAstor->detail($id_jpAstor),
            'isi' => 'admin/jpAstor/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_jpAstor)
    {
        $jpAstor = $this->m_jpAstor->detail($id_jpAstor);
        if ($jpAstor->foto_jpAstor != "") {
            unlink('./foto_jpAstor/' . $jpAstor->foto_jpAstor);
        }
        $data = array(
            'id_jpAstor' => $id_jpAstor,

        );
        $this->m_jpAstor->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('jpAstor');
    }
}

/* End of file jpAstor.php */
