
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Alexia Sorin Sara Maheo" />
    <meta name="description" content="CollectionJeux" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayCollection</title>
    <link rel="stylesheet" type="text/css" href="/c14/assets/style.css" />
    <link href="/c14/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="/c14/assets/js/bootstrap.min.js"></script>

</head>

<body class="container-fluid">
    <header class="row">
        <div class="row">
            <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><img class="image-fluid" src="<?php echo base_url();?>assets/images/burger.jpg.png" alt="menu" title="menu" width="50em"/></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item active" href='<?php echo base_url();?>'>Home</a>
                                <a class="dropdown-item" href='<?php echo base_url();?>index.php/controllerLogin/index'>Login</a>
                                <a class="dropdown-item" href='<?php echo base_url();?>index.php/controllerSignup/index'>SignUp</a>
                            </div>
                        </div>
            <h1>PlayCollection</h1>
            <img class="image-fluid" src='<?php echo base_url();?>assets/images/loading.png'  width="50em"/>
        </div>
        <div class="d-none d-md-block  actif" >
           
        <ul class=" nav">
            <li class="nav-item ">
                <a href='<?php echo base_url();?>index.php/controllerLogin/index'>Login</a>
            </li>
            <li class="nav-item ">
                <a href='<?php echo base_url();?>index.php/controllerSignup/index'>SignUp</a>
            </li>
        </ul>
        </div>
    </header>
    <main class="row">
        <div class="col-12">
        <?php $this->load->view($content); ?>
        </div>
    </main>
    <footer class="row">
        <div>
        <h4>PlayCollection</h4>
        <ul class="nav">
                <a href='<?php echo base_url();?>'>Home</a>
                -
                <a href='<?php echo base_url();?>index.php/controllerLogin/index'>Login</a>
                -
                <a href='<?php echo base_url();?>index.php/controllerSignup/index'>SignUp</a>
        </ul>
        </div>
        <div>
        <p>Alexia Sorin</p>
        <p>Sara Maheo</p>
        <p>Groupe C14</p>
        </div>
    </footer>
</body>

</html>

