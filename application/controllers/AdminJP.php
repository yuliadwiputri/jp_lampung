<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminJP extends CI_Controller {

    public function index()
    {
        $data = array(
			'title' => 'Login Admin',
            
	 );
		$this->load->view('v_login',$data,FALSE);
    }

}

/* End of file Controllername.php */

?>