
<h2 style="text-align : center;"><?php echo $title ?></h2>
<ul class="row">
    
<?php foreach($collectionlist as $jeu):?>
    <div class= "col-12 col-lg-3 " style="margin : 0 auto;">
        <div class="flip">
    <div class="front" style="text-align : center;" >
        <?php echo '<img src="',$jeu['couverture'],'" alt="" width="210em" height="260em" style="border-radius: 10px;  border-style: solid; border-color: black; " />'?>
       <h4 ><?php echo $jeu['titre'] ?></h4>
    </div>
    <div class="back">
       <?php echo "Id : ".$jeu['id']."<br/> Guid : ".$jeu['guid']."<br/> Release date : ".$jeu['sortie']."<br/> Description : ".$jeu['description'];?>
    </div>
</div>
    </div>
<?php endforeach ?>
</ul>
