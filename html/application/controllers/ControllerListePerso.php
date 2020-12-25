<?php
class ControllerListePerso extends CI_Controller {
    
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
    $data['collectionlistco']=$this->coll_model->get_jeux_coll();
    $data['title']='List of your games'; // a title to display above the list
    $data['content']='CollectionneurListJeux'; // template will call 'task_list ' sub - view
    $this->load->vars($data );
    $this->load->view("listePersoCo");
              
        } else {  
            redirect('index.php/ControllerLogin/index');  
        } 
 }
    
    
public function del($id){
    $this->coll_model->del_jeux($id); 
    $this->index();   
}
    
    
    
    
}

?>