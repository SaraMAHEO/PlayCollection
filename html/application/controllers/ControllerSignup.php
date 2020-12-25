<?php
class ControllerSignup extends CI_Controller {
    
public function __construct(){
 parent::__construct();
  $this->load->model('coll_model');
 $this->load->helper('url');
 $this->load->helper('form');
 $this->load->library('form_validation');
 }

public function index(){
     $this->load->view("signup");
}
    
 public function create(){
        $this->form_validation->set_rules('id','identifiant',array('required','alpha_numeric','is_unique[_collectionneur.identifiant]'));
		$this->form_validation->set_rules('nom','Last Name','required');
		$this->form_validation->set_rules('prenom','First Name','required');
        $this->form_validation->set_rules('mdp','Password','required');
        $this->form_validation->set_rules('confirm_mdp', 'Confirm Password', 'required|matches[mdp]');
		if($this->form_validation->run()!==FALSE){
			$nom=$this->input->post('nom');
			$prenom=$this->input->post('prenom');
			$id=$this->input->post('id');
            $motdepasse=$this->input->post('mdp');
			$this->coll_model->add_collectionneur($id,$nom,$prenom,$motdepasse);
            $this->load->view("login");
        }else{
             $this->load->view("signup");
        }
   
 }


		
}

?>
