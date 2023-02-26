<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
        $this->load->model('m_carousel');

    }

    public function index()
    {
        $data = array(
			'title' => 'Jasa Raharja Branch Office Bandar Lampung',
            'title2' => 'Dashboard',
            'carousel' => $this->m_carousel->list(),
            // 'user'=>$this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array(),
			'isi' => 'admin/v_home'
	 );
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

}

/* End of file Controllername.php */

?>