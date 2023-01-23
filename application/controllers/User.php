<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'isi' => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function sejarah()
    {
        $data = array(
            'title' => 'Sejarha | Jasa Raharja Lampung',
            'isi' => 'user/v_sejarah'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function visiMisi()
    {
        $data = array(
            'title' => 'Visi & Misi | Jasa Raharja Lampung',
            'isi' => 'user/v_visimisi'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function strukturOrganisasi()
    {
        $data = array(
            'title' => 'Struktur Organisasi | Jasa Raharja Lampung',
            'isi' => 'user/v_strukturOrganisasi'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function penghargaan()
    {
        $data = array(
            'title' => 'Penghargaan | Jasa Raharja Lampung',
            'isi' => 'user/v_penghargaan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function produk()
    {
        $data = array(
            'title' => 'Produk | Jasa Raharja Lampung',
            'isi' => 'user/v_produk'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */
