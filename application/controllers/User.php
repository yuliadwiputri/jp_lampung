<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sejarah');
        $this->load->model('m_visiMisi');
        $this->load->model('m_jpAstor');
        $this->load->model('m_jpBonding');
        $this->load->model('m_jpAspri');
        $this->load->model('m_jpGraha');
        $this->load->model('m_carousel');
        $this->load->model('m_carousel2');
        $this->load->model('m_carousel3');
        
    }

    public function index()
    {
        $data = array(
            'title' => 'Jasa Raharja Lampung',
            'carousel' => $this->m_carousel->list(),
            'carousel2' => $this->m_carousel2->list(),
            'carousel3' => $this->m_carousel3->list(),
            'jpAstor' => $this->m_jpAstor->list(),
            'jpBonding' => $this->m_jpBonding->list(),
            'jpAspri' => $this->m_jpAspri->list(),
            'jpGraha' => $this->m_jpGraha->list(),
            'isi' => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function sejarah()
    {
        $data = array(
            'title' => 'Sejarah | Jasa Raharja Lampung',
            'isi' => 'user/v_sejarah',
            'sejarah' => $this->m_sejarah->list(),
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function visiMisi()
    {
        $data = array(
            'title' => 'Visi & Misi | Jasa Raharja Lampung',
            'isi' => 'user/v_visimisi',
            'visiMisi' => $this->m_visiMisi->list(),
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
    // Produk 
    public function astor()
    {
        $data = array(
            'title' => 'ASTOR | Jasa Raharja Lampung',
            'isi' => 'user/v_astor',
            'jpAstor' => $this->m_jpAstor->list(),
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function aspri()
    {
        $data = array(
            'title' => 'ASPRI | Jasa Raharja Lampung',
            'jpAspri' => $this->m_jpAspri->list(),
            'isi' => 'user/v_aspri'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function bonding()
    {
        $data = array(
            'title' => 'BONDING | Jasa Raharja Lampung',
            'jpBonding' => $this->m_jpBonding->list(),
            'isi' => 'user/v_bonding'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function graha()
    {
        $data = array(
            'title' => 'GRAHA | Jasa Raharja Lampung',
            'jpGraha' => $this->m_jpGraha->list(),
            'isi' => 'user/v_graha'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function contact()
    {
        $data = array(
            'title' => 'Contact | Jasa Raharja Lampung',
            'isi' => 'v_contact'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */