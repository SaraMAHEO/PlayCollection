<?php
class ControllerAccueilAdministrateur extends CI_Controller {
    
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
           $data['collectionneurlist']=$this->coll_model->get_collectionneur();
    $data['title']='List of players'; // a title to display above the list
    $data['content']='CollectionneurList'; // template will call 'task_list ' sub - view
    $this->load->vars($data );
    $this->load->view("accueilAdministrateur");
              
        } else {  
            redirect('index.php/ControllerLogin/index');  
        } 
   

 }
    
public function del($identifiant){
$this->coll_model->del_collectionneur($identifiant); 
$this->index();   
}

}

?>