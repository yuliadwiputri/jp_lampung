<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
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
}
