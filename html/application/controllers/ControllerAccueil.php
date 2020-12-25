<?php
class ControllerAccueil extends CI_Controller {
    
public function __construct(){
 parent::__construct();
  $this->load->model('coll_model');
 $this->load->helper('url');
 $this->load->helper('form');
 $this->load->library('form_validation');
 }

 public function index(){
    $data['collectionlist']=$this->coll_model->get_jeux();
    $data['title']='List of games'; // a title to display above the list
    $data['content']='CollectionList'; // template will call 'task_list ' sub - view
    $this->load->vars($data );
    $this->load->view("accueil");
 }
}

?>
