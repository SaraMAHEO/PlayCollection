<h2 class="col-12" style="text-align:center;"><?php echo $title ?></h2>
<br/>
<ul class="row" >
<?php foreach($collectionneurlist as $collectionneur):?>
    <div class= "col-12 col-lg-3" style="margin : 0 auto; text-align : center;">
        <div class="noir" style=" padding-right: 5px;  border-style: solid; border-color: #3f51b5;">
        <img src='<?php echo base_url();?>assets/images/avatar.jfif?>' width="70em" height="100em" style="border-radius: 50px;  border-style: solid; border-color: white; ">
        <br/>
<?php echo $collectionneur['identifiant']."<br/> Last Name : ".$collectionneur['nom']."<br/> First Name : ".$collectionneur['prenom']."<br/> Password : ".$collectionneur['motdepasse']."<br/>".anchor('index.php/controllerAccueilAdministrateur/del/'.$collectionneur['identifiant'],'[DEL]');?>
            </div>
    </div>
<?php endforeach ?>
</ul>