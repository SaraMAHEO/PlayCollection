<?php
class ControllerLogin extends CI_Controller {
    
public function _construct(){
		parent::_construct();
		$this->load->helper('url');
	}

 public function index(){
    $this->load->view('login');
 }
    
 public function login_action()  
    {  
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('identifiant', 'Id:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('motdepasse', 'Password:', 'required|trim');  
  
        if ($this->form_validation->run())   
        {  
            $data = array(  
                'identifiant' => $this->input->post('identifiant'),  
                'currently_logged_in' => 1  
                );    
                    $this->session->set_userdata($data);
               if ($this->session->userdata('identifiant')=='admin'){
                   redirect('index.php/ControllerAccueilAdministrateur/index');
               }else{
                   
                   redirect('index.php/ControllerAccueilCollectionneur/index');
               }
                                  
        }   
        else {  
            $this->load->view('login');  
        }  
    } 
    
    public function validation()  
    {  
        $this->load->model('coll_model');  
  
        if ($this->coll_model->validation())  
        {  
  
            return true;  
        } else {  
            $this->form_validation->set_message('validation', 'Password or id incorrect');  
            return false;  
        }  
    }  
  
    public function logout()  
    {  
        $this->session->sess_destroy();  
        $this->load->view('login');
    }  

}

?>
