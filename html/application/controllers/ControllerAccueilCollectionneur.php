<?php
class ControllerAccueilCollectionneur extends CI_Controller {
    
public function __construct(){
 parent::__construct();
  $this->load->model('coll_model');
 $this->load->helper('url');
 $this->load->helper('form');
 $this->load->library('form_validation');
 $this->test=false;
 }

 public function index(){
      if ($this->session->userdata('currently_logged_in'))   
        {  
           $data['collectionlist']=$this->coll_model->get_jeux();
            $data['title']='List of games'; // a title to display above the list
          if($this->test==true){
              $data['erreur']='Game already present';
          }else{
              $data['erreur']=' ';
          }
            $data['content']='CollectionListCo'; // template will call 'task_list ' sub - view
            $this->load->vars($data );
            $this->load->view("accueilCollectionneur");
          $this->test=false;
              
        } else {  
            redirect('index.php/ControllerLogin/index');  
        }  
   
 }
    
    public function add($id){
       if( ($this->coll_model->verif_jeu($id))==true ){
           
        $this->coll_model->add_jeu($id);  
        $this->index();       
           
       }else{
        $this->test=true;
          $this->index();
           
       }       
    
    }

}

?>