<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login

{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_login');
        
    }
public function login($username,$password){
$cek=$this->ci->m_login->login($username,$password);
if ($cek){
    $username= $cek->username;
    $nama_user = $cek->nama_user;
    $level= $cek->level;

    //session
    $this->ci->session->set_userdata('username',$username);
    $this->ci->session->set_userdata('nama_user',$nama_user);
    $this->ci->session->set_userdata('level',$level);
    redirect('admin');


}else{
    $this->ci->session->set_flashdata('pesan','Username atau Password salah.');
redirect('adminJP');
    
}
}
  public function cek_login(){
    if($this->ci->session->userdata('username')==""){
        $this->ci->session->set_flashdata('pesan','anda blm login');
        redirect('adminJP');

  }} 
  public function logout(){
    $this->ci->session->unset_userdata('username');
    $this->ci->session->unset_userdata('nama_user');
    $this->ci->session->unset_userdata('level');
    $this->ci->session->set_flashdata('pesan','anda logout');
    redirect('adminJP');
  }

}


/* End of file User_login
.php */