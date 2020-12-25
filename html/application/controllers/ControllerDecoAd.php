<?php
class ControllerDecoAd extends CI_Controller {
    
public function __construct(){
 parent::__construct();
  $this->load->model('coll_model');
 $this->load->helper('url');
 $this->load->helper('form');
 $this->load->library('form_validation');
 }

 public function index(){
     if ($this->session->userdata('currently_logged_in'))   
        {  
           $this->load->view("deconnexionAd");
              
        } else {  
            redirect('index.php/ControllerLogin/index');  
        }  
    
 }
}

?>