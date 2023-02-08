<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_carousel');
    }

    public function index()
    {
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => 'Carousel JRP',
            'carousel' => $this->m_carousel->list(),
            'isi' => 'admin/carousel/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan ', 'required', array('required' => '%s Harus Diisi'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_carousel/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_carousel')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),

                    'isi' => 'admin/carousel/v_add'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_carousel/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'foto_carousel' => $upload_data['uploads']['file_name'],
                    'keterangan' => $this->input->post('keterangan'),

                );
                $this->m_carousel->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                redirect('carousel');
            }
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',

            'isi' => 'admin/carousel/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }


    public function edit($id_carousel)
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan ', 'required', array('required' => '%s Harus Diisi'));



        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_carousel/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_carousel')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'carousel' => $this->m_carousel->detail($id_carousel),
                    'isi' => 'admin/carousel/v_edit'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_carousel/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $carousel = $this->m_carousel->detail($id_carousel);
                if ($carousel->foto_carousel != "") {
                    unlink('./foto_carousel/' . $carousel->foto_carousel);
                }
                $data = array(
                    'id_carousel' => $id_carousel,
                    'keterangan' => $this->input->post('keterangan'),

                    'foto_carousel' => $upload_data['uploads']['file_name']

                );
                $this->m_carousel->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('carousel');
            }
            $data = array(
                'id_carousel' => $id_carousel,
                'keterangan' => $this->input->post('keterangan'),


            );
            $this->m_carousel->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('carousel');
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',
            'carousel' => $this->m_carousel->detail($id_carousel),
            'isi' => 'admin/carousel/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    public function delete($id_carousel)
    {
        $carousel = $this->m_carousel->detail($id_carousel);
        if ($carousel->foto_carousel != "") {
            unlink('./foto_carousel/' . $carousel->foto_carousel);
        }
        $data = array(
            'id_carousel' => $id_carousel,

        );
        $this->m_carousel->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('carousel');
    }
}

/* End of file Carousel.php */
