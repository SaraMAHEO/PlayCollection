

<?php $this->load->model('coll_model');?>
<h2 class="col-12" style="text-align : center;"><?php echo $title." : ".$this->session->userdata('identifiant')?></h2>
<ul class="row">

<?php foreach($collectionlistco as $collection):?>
<?php $jeu1=$this->coll_model->get_jeu1($collection['id_jeu1'],$collection['id_jeu2'],$collection['id_jeu3'],$collection['id_jeu4'],$collection['id_jeu5']) ?>
<?php endforeach ?> 
    
<?php foreach($jeu1 as $jeu):?>
    <?php $num=null;
    if($jeu['id']==$collection['id_jeu1']){
        $num='id_jeu1';
    }else if($jeu['id']==$collection['id_jeu2']){
        $num='id_jeu2';
    }else if($jeu['id']==$collection['id_jeu3']){
        $num='id_jeu3';
    }else if($jeu['id']==$collection['id_jeu4']){
        $num='id_jeu4';
    }else if($jeu['id']==$collection['id_jeu5']){
        $num='id_jeu5';
    }
?>
    <div class= "col-12 col-lg-4 " style="margin : 0 auto;">
        <div class="flip">
    <div class="front" style="text-align : center;" >
        <?php echo '<img src="',$jeu['couverture'],'" alt="" width="210em" height="260em" style="border-radius: 10px;  border-style: solid; border-color: black; " />'?>
       <h4 ><?php echo $jeu['titre'] ?></h4>
    </div>
    <div class="back">
       <?php echo "Id : ".$jeu['id']."<br/> Guid : ".$jeu['guid']."<br/> Release date : ".$jeu['sortie']."<br/> Description : ".$jeu['description']."<br/>".anchor('index.php/ControllerListePerso/del/'.$num,'[Del]');?>
    </div>
</div>
    </div>
<?php endforeach ?>
</ul>
