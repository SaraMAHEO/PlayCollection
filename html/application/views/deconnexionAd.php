<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Alexia Sorin Sara Maheo" />
    <meta name="description" content="PlayCollection ListePerso" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayCollection Listeperso</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css" />
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</head>

<body class="container-fluid">
    <header class="row">
        <div class="row">
            <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><img class="image-fluid" src="<?php echo base_url();?>assets/images/burger.jpg.png" alt="menu" title="menu" width="50em"/></a>
                            <div class="dropdown-menu">
                                <a><img src='<?php echo base_url();?>assets/images/avatar.jfif' height="50px" width="40px"><?php echo $this->session->userdata('identifiant') ?></a>
                                <a class="dropdown-item" href='<?php echo base_url();?>index.php/controllerAccueilAdministrateur/index'>Home</a>
                                <a class="dropdown-item active" href='<?php echo base_url();?>index.php/controllerDecoAd/index'>Logout</a>
                            </div>
                        </div>
            <h1>PlayCollection</h1>
            <img class="image-fluid" src='<?php echo base_url();?>assets/images/loading.png'  width="50em">
        </div>
        <div class="d-none d-md-block" >
           
        <ul class=" nav">
            <li class="nav-item actif">
                <a href="deconnexionAd.php">Logout</a>
            </li>
        </ul>
        </div>
    </header>


    <main class="row">
        <div class="test">
        <h2>Logout</h2>
      <div class="noir" >
            <div>
            <label for="title">Do you want to logout?</label>
            </div>
            <div>
             <a href='<?php echo base_url()."index.php/ControllerLogin/logout"; ?>'> Yes </a>
            <a href='<?php echo base_url()."index.php/ControllerAccueilCollectionneur/index"; ?>'> No</a>
            </div>
        </div>
     </div> 
    </main>
    <footer class="row">
        <div>
        <h4>PlayCollection</h4>
        <ul class="nav">
                <a href='<?php echo base_url();?>index.php/controllerAccueilAdministrateur/index'>Home</a>
                -
                <a href='<?php echo base_url();?>index.php/controllerDecoAd/index'>Logout</a>
        </ul>
        </div>
        <div>
                   <br/>
        <br/>
        <br/>
              <br/>
        <br/>
        <br/>
              <br/>
        <br/>
        <br/>
        <p>Alexia Sorin</p>
        <p>Sara Maheo</p>
        <p>Groupe C14</p>
   
        </div>
    </footer>
</body>

</html>
