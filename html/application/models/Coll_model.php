<?php
class Coll_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_jeux(){
        $this->db->order_by('sortie','desc');
		$query=$this->db->get('_jeu');
		return $query->result_array();
    }
 
 
   
    public function get_jeux_coll(){
		$query=$this->db->get_where('_collection',array('id'=>$this->session->userdata('identifiant')));
		return $query->result_array();
 }

    public function get_jeu1($id1,$id2,$id3,$id4,$id5){
        $this->db->where('id', $id1);
        $this->db->or_where('id', $id2);
        $this->db->or_where('id', $id3);
        $this->db->or_where('id', $id4);
        $this->db->or_where('id', $id5);
        $this->db->order_by('sortie','desc');
        $query = $this->db->get('_jeu');
		return $query->result_array();
 }

    
    public function get_collectionneur(){
        
		$query=$this->db->get_where('_collectionneur',array('role'=>1));
		return $query->result_array();
 }
    
   public function add_collectionneur($id,$lastname,$firstname,$motdepasse){
		$data=array('identifiant'=>$id,'nom'=>$lastname,'prenom'=>$firstname,'motdepasse'=>$motdepasse
		);
       $data2=array('id'=>$id);
    
        $this->db->insert('_collectionneur',$data);
		$this->db->insert('_collection',$data2);
	} 
    
    public function del_collectionneur($identifiant) {
        $data=array('identifiant'=>$identifiant);
        $data2=array('id'=>$identifiant);
        $this->db->delete('_collection',$data2);
        return $this->db->delete('_collectionneur',$data);
    }
    
    public function del_jeux($id){        
          
         $this->db->where('id',$this->session->userdata('identifiant'));
         $this->db->set($id, NULL);
         $this->db->update('_collection'); // gives UPDATE `_collection` SET $id = NULL WHERE `id` = 'JP'

        
        
    }
    
  
    
    public function verif_jeu($id){
        
        $nom=$this->session->userdata('identifiant');   
       
        
        
        $sql1 = "SELECT id_jeu1, id_jeu2, id_jeu3, id_jeu4, id_jeu5 FROM jeux._collection WHERE id = ?";
        $id1=$this->db->query($sql1, array($nom));
        
        foreach ($id1->result() as $row)
        {
            $res1 = $row->id_jeu1;
            $res2 = $row->id_jeu2;
            $res3 = $row->id_jeu3;
            $res4 = $row->id_jeu4;
            $res5 = $row->id_jeu5;
            
        }
        
        if($res1==$id){   
            
            return false;                      

            
        } else if($res2==$id){
            
            return false;             

            
        } else if($res3==$id){
            
            return false;             

            
        }else if($res4==$id){
            
            return false;             

            
        }else if($res5==$id){
            
            return false;             

            
        }else{
              
           return true;
            
        }
        
    }
    
    
    public function add_jeu($id){
        
        $nom=$this->session->userdata('identifiant');        
        
        $sql1 = "SELECT id_jeu1, id_jeu2, id_jeu3, id_jeu4, id_jeu5 FROM jeux._collection WHERE id = ?";
        $id1=$this->db->query($sql1, array($nom));
        
        foreach ($id1->result() as $row)
        {
            $res1 = $row->id_jeu1;
            $res2 = $row->id_jeu2;
            $res3 = $row->id_jeu3;
            $res4 = $row->id_jeu4;
            $res5 = $row->id_jeu5;
            
        }       
        
        
        $sqldate1 = "SELECT sortie FROM jeux._jeu WHERE id = ?";
        $idDate1=$this->db->query($sqldate1, array($res1));
        
        $sqldate2 = "SELECT sortie FROM jeux._jeu WHERE id = ?";
        $idDate2=$this->db->query($sqldate2, array($res2));
        
        $sqldate3 = "SELECT sortie FROM jeux._jeu WHERE id = ?";
        $idDate3=$this->db->query($sqldate3, array($res3));
                
        $sqldate4 = "SELECT sortie FROM jeux._jeu WHERE id = ?";
        $idDate4=$this->db->query($sqldate4, array($res4));
                
        $sqldate5 = "SELECT sortie FROM jeux._jeu WHERE id = ?";
        $idDate5=$this->db->query($sqldate5, array($res5));
        
        foreach ($idDate1->result() as $row)
        {
            $date1 = $row->sortie;            
        }    
        
        foreach ($idDate2->result() as $row)
        {
            $date2 = $row->sortie;            
        }   
        
        foreach ($idDate3->result() as $row)
        {
            $date3 = $row->sortie;            
        }   
        
        foreach ($idDate4->result() as $row)
        {
            $date4 = $row->sortie;            
        }   
        
        foreach ($idDate5->result() as $row)
        {
            $date5 = $row->sortie;            
        }          

        
        if($res1==NULL){             
                      
         $this->db->set('id_jeu1', $id);
         $this->db->where('id', $nom);
         $this->db->update('_collection');
            
        } else if($res2==NULL){
            
         $this->db->set('id_jeu2', $id);
         $this->db->where('id', $nom);
         $this->db->update('_collection');
            
        } else if($res3==NULL){
            
         $this->db->set('id_jeu3', $id);
         $this->db->where('id', $nom);
         $this->db->update('_collection');
            
        }else if($res4==NULL){
            
         $this->db->set('id_jeu4', $id);
         $this->db->where('id', $nom);
         $this->db->update('_collection');
            
        }else if($res5==NULL){
            
         $this->db->set('id_jeu5', $id);
         $this->db->where('id', $nom);
         $this->db->update('_collection');
            
        }else{
              
            $max=$date1;
            $place='id_jeu1';
            
            if($max<$date2){                
                $max=$date2;
                $place='id_jeu2';
            }
            if($max<$date3){                
                $max=$date3; 
                $place='id_jeu3';
            }
            if($max<$date4){                
                $max=$date4;
                $place='id_jeu4';
            }
            if($max<$date5){                
                $max=$date5; 
                $place='id_jeu5';
            }
            
            $this->db->set($place, $id);
            $this->db->where('id', $nom);
            $this->db->update('_collection');           
        }
		
	} 
    
    
    public function validation() {  
  
        $this->db->where('identifiant', $this->input->post('identifiant'));  
        $this->db->where('motdepasse', $this->input->post('motdepasse'));  
        $query = $this->db->get('_collectionneur');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
  
    }  
 }
?>