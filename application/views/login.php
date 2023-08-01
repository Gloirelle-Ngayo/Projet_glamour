<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/style1.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/aos-master/dist/aos.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/carousel.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css'?>">
</head>
<style>
    @media (min-width: 996px) {
      form{
        width: 30% !important;
        position: relative;
        left: 35%;
        }
      }

    </style>
<body id="body">
    <main class="container" id ='section1'>
        <div >
            <form action="<?= base_url().'Login/validation' ?>" method="post" id="form" class="p-4 row">
        <div data-aos="fade-down"   data-aos-easing="linear" data-aos-duration="1500">
                    
            <div id='logo' class="text-center mt-4">
                <i class='fas fa-tools'></i>
                <p>Identification</p>
            </div>

            <?php
                if (strlen($erreur) > 1) {
                    echo "<p class=\"alert alert-danger text-danger fs-5 text-center\" role=\"alert\" id=\"alert\"> $erreur!</p>";
                }else{
                
                }
            ?>

            <div class="input-group flex-nowrap mb-3 col-md-6">
                <span class="input-group-text fas fa-user" id="email"></span>
                <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Email" aria-label="email" aria-describedby="email" name='email'>

            </div>
            <p class='text-danger'><?php echo form_error('email'); ?></p>

            <div class="input-group flex-nowrap mb-3 col-md-6">
                <span class="input-group-text fas fa-lock" id="password"></span>
                <input type="password" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Mot de passe" aria-label="password" aria-describedby="password" name='password'>
            </div>
            <p class='text-danger'><?php echo form_error('email'); ?></p>

            <div class="mb-3">
                <input class="btn btn-primary w-100" type="submit" value="Connecter">
            </div>
                </div>
            </form>
        </div>
        </main>
</body>

    <script src=" <?= base_url().'assets/js/jquery.min.js'?>"></script>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
    <script src=" <?= base_url().'assets/aos-master/dist/aos.js' ?>"></script>
    <script>
     AOS.init();
    </script>
</body>
</html>