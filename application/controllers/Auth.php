<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
       
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password','Password', 'required|trim');

        if($this->form_validation->run()==false){
            $this->load->view('templates/auth_header');
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }else{
            $this->_login();
        }
	}

    private function _login(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $user=$this->db->get_where('user',['email'=>$email])->row_array();
        //user ada
        if($user){
            //user aktif
if($user['is_active']==1){
    //cek pw
    if(password_verify($password,$user['password'])){
        //bnr pw
        $data=[
            'email'=>$user['email'] ,
            'role_id'=>$user['role_id'] 
        ];
        $this->session->set_userdata($data);
        redirect('carousel');
    }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password</div>');
            
    redirect('auth');
    }
}else{
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not activated</div>');
            
    redirect('auth');
}
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered</div>');
            
            redirect('auth');
        }
    }
   
    public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout</div>');    
    redirect('auth');
  }
    public function registration(){
       
        $this->form_validation->set_rules('name','Name', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[user.email]',['is_unique'=>'This email already registered']);
        $this->form_validation->set_rules('password1','Password', 'required|trim|min_length[8]|matches[password2]',[
            'matches'=>'Password Dont Match', 
            'min_length'=>'Password Too Short']);
        $this->form_validation->set_rules('password2','Password', 'required|trim');

        if($this->form_validation->run()==false){
            $this->load->view('templates/auth_header');
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        }else{
            $email=$this->input->post('email',true);
            $data=[
                'name'=>htmlspecialchars($this->input->post('name',true)) ,
                'email'=> htmlspecialchars($email),
                'password'=>password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
                'role_id'=>1,
                'is_active'=>0,
                'date_created'=>time()

            ];

            //token
            $token=base64_encode(random_bytes(32));
           $user_token=[
            'email'=>$email,
            'token'=>$token,
            'date_created' => time()
           ];
            $this->db->insert('user',$data);
            $this->db->insert('user_token',$user_token);
            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been created. Please activate your account</div>');
            
            redirect('auth');
        }
    }
    private function _sendEmail($token,$type){
        $config=[
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.googlemail.com',
            'smtp_user'=>'jrp.lampung1500@gmail.com',
            'smtp_pass'=>'owedoxewsjxyilhi',
            'smtp_port'=>465,
            'mailtype'=>'html',
            'charset'=>'utf-8',
            'newline'=>"\r\n"

        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('jrp.lampung1500@gmail.com', 'Jasa Raharja Putera Lampung');
        $this->email->to($this->input->post('email'));

        if($type=='verify'){
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify your account : <a href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate<a/>');
        }else if($type=='forgot'){
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your passsword : <a href="'. base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password<a/>');
    
        }
       

       if($this->email->send()) {
        return true;
       }else{
        echo $this->email->print_debuggger();
        die;
       }
    }

    public function verify(){
        $email=$this->input->get('email');
        $token=$this->input->get('token');
        $user=$this->db->get_where('user', ['email'=>$email])->row_array();
        if($user){
            $user_token=$this->db->get_where('user_token', ['token' => $token])->row_array();
            if($user_token){
               if(time()-$user_token['date_created']<(60 * 60 * 24)){
                $this->db->set('is_active',1);
                $this->db->where('email', $email);
                $this->db->update('user');
                $this->db->delete('user_token', ['email'=>$email]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. $email .' has been activated. Please login.</div>');    
    redirect('auth');
               }else{
                $this->db->delete('user',['email'=>$email]);
                $this->db->delete('user_token',['email'=>$email]);
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account Activation Failed : Token Expired</div>');    
                redirect('auth');
               }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account Activation Failed : Wrong Token</div>');    
                redirect('auth');
            }
        }else{
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account Activation Failed : Wrong Email</div>');    
    redirect('auth');
        }
    }

    public function forgotPassword(){
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
        if($this->form_validation->run()==false){
            $this->load->view('templates/auth_header');
            $this->load->view('auth/forgot-password');
            $this->load->view('templates/auth_footer');
        } else{
            $email= $this->input->post('email');
            $user=$this->db->get_where('user', ['email'=> $email, 'is_active'=>1])->row_array();
            if($user){
                $token=base64_encode(random_bytes(32));
                $user_token=[
                    'email'=>$email,
                    'token'=>$token,
                    'date_created' => time()
                   ];
                    $this->db->insert('user_token',$user_token);
                    $this->_sendEmail($token, 'forgot');
        
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your email to reset your password</div>');
                    
                redirect('auth/forgotPassword');
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email is not registered</div>');    
    redirect('auth/forgotPassword');
            }
        }
       
    }

    public function resetpassword(){
        $email=$this->input->get('email');
        $token=$this->input->get('token');
        $user=$this->db->get_where('user', ['email'=>$email])->row_array();
        if($user){
            $user_token=$this->db->get_where('user_token', ['token' => $token])->row_array();
            if($user_token){
               if(time()-$user_token['date_created']<(60 * 60 * 24)){
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();

    //             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. $email .' has been activated. Please login.</div>');    
    // redirect('auth');
               }else{
                $this->db->delete('user',['email'=>$email]);
                $this->db->delete('user_token',['email'=>$email]);
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed : token expired</div>');    
                redirect('auth');
               }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed : Wrong token</div>');    
                redirect('auth');
            }
        }else{
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password failed : Wrong email</div>');    
    redirect('auth');
        }
    }

    public function changePassword(){
        if(!$this->session->userdata('reset_email')){
            redirect('auth');
        }
        $this->form_validation->set_rules('password1','Password', 'required|trim|min_length[8]|matches[password2]',[
            'matches'=>'Password Dont Match', 
            'min_length'=>'Password Too Short']);
        $this->form_validation->set_rules('password2','Password', 'required|trim');

        if($this->form_validation->run()==false){
 
        $this->load->view('templates/auth_header');
        $this->load->view('auth/change-password');
        $this->load->view('templates/auth_footer');
    }else{
        $password=password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
        $email=$this->session->userdata('reset_email');
        $this->db->set('password',$password);
        $this->db->where('email',$email);
        $this->db->update('user');
        $this->db->delete('user_token', ['email'=>$email]);
        $this->session->unset_userdata('reset_email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password has been changed! Please login.</div>');    
    redirect('auth');
    }
}
}
