<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_carousel');
        $this->load->model('m_carousel2');
        $this->load->model('m_carousel3');
        $this->load->model('m_carousel4');
    }

    public function index()
    {
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => 'Carousel JRP',
            'carousel' => $this->m_carousel->list(),
            'carousel2' => $this->m_carousel2->list(),
            'carousel3' => $this->m_carousel3->list(),
            'carousel4' => $this->m_carousel4->list(),
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

    //carousel 2
    public function edit2($id_carousel2)
    {
        $this->form_validation->set_rules('keterangan2', 'Keterangan ', 'required', array('required' => '%s Harus Diisi'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_carousel2/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_carousel2')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'carousel2' => $this->m_carousel2->detail($id_carousel2),
                    'isi' => 'admin/carousel/v_edit2'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_carousel2/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $carousel2 = $this->m_carousel2->detail($id_carousel2);
                if ($carousel2->foto_carousel2 != "") {
                    unlink('./foto_carousel2/' . $carousel2->foto_carousel2);
                }
                $data = array(
                    'id_carousel2' => $id_carousel2,
                    'keterangan2' => $this->input->post('keterangan2'),

                    'foto_carousel2' => $upload_data['uploads']['file_name']

                );
                $this->m_carousel2->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('carousel');
            }
            $data = array(
                'id_carousel2' => $id_carousel2,
                'keterangan2' => $this->input->post('keterangan2'),


            );
            $this->m_carousel2->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('carousel');
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',
            'carousel2' => $this->m_carousel2->detail($id_carousel2),
            'isi' => 'admin/carousel/v_edit2'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    public function delete2($id_carousel2)
    {
        $carousel2 = $this->m_carousel2->detail($id_carousel2);
        if ($carousel2->foto_carousel2 != "") {
            unlink('./foto_carousel2/' . $carousel2->foto_carousel2);
        }
        $data = array(
            'id_carousel2' => $id_carousel2,

        );
        $this->m_carousel2->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('carousel');
    }

    //carousel 3
    public function edit3($id_carousel3)
    {
        $this->form_validation->set_rules('keterangan3', 'Keterangan ', 'required', array('required' => '%s Harus Diisi'));



        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']        = './foto_carousel3/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto_carousel3')) {

                $data = array(
                    'title' => 'Protector for Protection',
                    'title2' => '',
                    'error' => $this->upload->display_errors(),
                    'carousel3' => $this->m_carousel3->detail($id_carousel3),
                    'isi' => 'admin/carousel/v_edit3'

                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_carousel3/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //hapus yg lma
                $carousel3 = $this->m_carousel3->detail($id_carousel3);
                if ($carousel3->foto_carousel3 != "") {
                    unlink('./foto_carousel3/' . $carousel3->foto_carousel3);
                }
                $data = array(
                    'id_carousel3' => $id_carousel3,
                    'keterangan3' => $this->input->post('keterangan3'),

                    'foto_carousel3' => $upload_data['uploads']['file_name']

                );
                $this->m_carousel3->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
                redirect('carousel');
            }
            $data = array(
                'id_carousel3' => $id_carousel3,
                'keterangan3' => $this->input->post('keterangan3'),


            );
            $this->m_carousel3->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
            redirect('carousel');
        }
        $data = array(
            'title' => 'Protector for Protection',
            'title2' => '',
            'carousel3' => $this->m_carousel3->detail($id_carousel3),
            'isi' => 'admin/carousel/v_edit3'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    public function delete3($id_carousel3)
    {
        $carousel3 = $this->m_carousel3->detail($id_carousel3);
        if ($carousel3->foto_carousel3 != "") {
            unlink('./foto_carousel3/' . $carousel3->foto_carousel3);
        }
        $data = array(
            'id_carousel3' => $id_carousel3,

        );
        $this->m_carousel3->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('carousel');
    }

    //carousel 4
 public function edit4($id_carousel4)
 {
     $this->form_validation->set_rules('keterangan4', 'Keterangan ', 'required', array('required' => '%s Harus Diisi'));



     if ($this->form_validation->run() == TRUE) {
         $config['upload_path']        = './foto_carousel4/';
         $config['allowed_types']        = 'gif|jpg|png|jpeg';
         $config['max_size']             = 5000;
         $this->upload->initialize($config);
         if (!$this->upload->do_upload('foto_carousel4')) {

             $data = array(
                 'title' => 'Protector for Protection',
                 'title2' => '',
                 'error' => $this->upload->display_errors(),
                 'carousel4' => $this->m_carousel4->detail($id_carousel4),
                 'isi' => 'admin/carousel/v_edit4'

             );
             $this->load->view('admin/layout/v_wrapper', $data, FALSE);
         } else {
             $upload_data = array('uploads' => $this->upload->data());
             $config['image_library'] = 'gd2';
             $config['source_image'] = './foto_carousel4/' . $upload_data['uploads']['file_name'];
             $this->load->library('image_lib', $config);
             //hapus yg lma
             $carousel4 = $this->m_carousel4->detail($id_carousel4);
             if ($carousel4->foto_carousel4 != "") {
                 unlink('./foto_carousel4/' . $carousel4->foto_carousel4);
             }
             $data = array(
                 'id_carousel4' => $id_carousel4,
                 'keterangan4' => $this->input->post('keterangan4'),

                 'foto_carousel4' => $upload_data['uploads']['file_name']

             );
             $this->m_carousel4->edit($data);
             $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
             redirect('carousel');
         }
         $data = array(
             'id_carousel4' => $id_carousel4,
             'keterangan4' => $this->input->post('keterangan4'),


         );
         $this->m_carousel4->edit($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Di Reposting');
         redirect('carousel');
     }
     $data = array(
         'title' => 'Protector for Protection',
         'title2' => '',
         'carousel4' => $this->m_carousel4->detail($id_carousel4),
         'isi' => 'admin/carousel/v_edit4'
     );
     $this->load->view('admin/layout/v_wrapper', $data, FALSE);
 }
 public function delete4($id_carousel4)
 {
     $carousel4 = $this->m_carousel4->detail($id_carousel4);
     if ($carousel4->foto_carousel4 != "") {
         unlink('./foto_carousel4/' . $carousel4->foto_carousel4);
     }
     $data = array(
         'id_carousel4' => $id_carousel4,

     );
     $this->m_carousel4->delete($data);
     $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
     redirect('carousel');
 }


    }

/* End of file Carousel.php */
