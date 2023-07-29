<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/animate.min.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css'?>">
    <title>Acceuil</title>
    <style>
        body{
          background-color: #d1dfe3;
        }
        .card{
          border: 1px solid #dee2e6;
          background-color: #d1dfe3;
        }
        .card img{
          position: relative;
          left: 97px;
        }
        .card-title{
          font-size: 30px;
          color:#5a5a5a;
        }
        .card p{
          text-align: justify;
          line-height: 30px;
        }
        @media (max-width: 990px) {
          .card{
            margin: 10px;
          }
          .card img{
            max-width : 100%;
            heigth: auto;
            display: block
          }
      }
    </style>
</head>
<body>


  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#"><i class="fab fa-accusoft"></i>Glamour</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="<?= base_url().'Acceuil'?>"> <i class="fas fa-home"></i>Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url().'Citations'?>"> <i class="fas fa-book-reader"></i> Citations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url().'Proverbes'?>"> <i class="fas fa-blind"></i> Proverbes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url().'Poemes'?>"> <i class="fab fa-audible"></i> Poèmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url().'Motivations'?>"> <i class="fas fa-assistive-listening-systems"></i> Motivations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url().'Apropos'?>"> <i class="fas fa-chalkboard-teacher"></i> A propos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <section class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner mb-5">
        <div class="carousel-item active">
          <img src="<?= base_url().'assets/img/images2.jpg'?>" class="d-block w-100 img-fluid" style="height: 500px;" alt="image1">
          <div class="carousel-caption d-md-block text-start pb-5">
            <h3 class="animate__animated animate__fadeInDown fs-1">Bienvenu sur Glamour</h3>
            <p class="animate__animated animate__fadeInRight animate__delay-2s fs-5">Vous y trouverez les paroles de motivations sur de vie, l'amour, le travail et la formation...</p>
            <button class="btn btn-primary animate__animated animate__fadeInUp animate__delay-3s fs-5">Pour votre plaisir</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url().'assets/img/images.jpg'?>" class="d-block w-100 img-fluid" style="height: 500px;" alt="image2">
          <div class="carousel-caption d-md-block text-center pb-5">
            <h3 class="animate__animated animate__fadeInDown fs-1 pb-3">Bienvenu sur Glamour</h3>
            <p class="animate__animated animate__fadeInRight animate__delay-2s fs-5 pb-3">Vous y trouverez les poèmes sur la vie, l'amour, le travail et la formation...</p>
            <button class="btn btn-primary animate__animated animate__fadeInUp animate__delay-3s fs-5">Pour votre plaisir</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url().'assets/img/images3.jpg'?>" class="d-block w-100 img-fluid" style="height: 500px;" alt="image3">
          <div class="carousel-caption d-md-block text-end pb-5">
            <h3 class="animate__animated animate__fadeInDown fs-1 pb-3">Bienvenu sur Glamour</h3>
            <p class="animate__animated animate__fadeInRight animate__delay-2s fs-5 pb-3">Vous y trouverez les citations sur la vie, l'amour, le travail et la formation...</p>
            <button class="btn btn-primary animate__animated animate__fadeInUp animate__delay-3s fs-5">Pour votre plaisir</button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <section class="section2 d-flex row">
        <div class="carte1 col-lg-4 col-md-6">
            <div class="card">
                <img src="<?= base_url().'assets/img/motivation.jpg'?>" style="height: 170px; width: 50%;" class="card-img-top rounded-circle" alt="image motivation">
              <div class="card-body">
                <h5 class="card-title text-center">Motivations</h5>
                <p class="card-text">Attitudes à avoir pendant les rudes moments de la vie. Pendant que vous traversez les routes les plus inhospitalières de la vie Souvenez vous de...</p>
                <a href="<?= base_url().'Motivations'?>" class="btn btn-secondary">Voir la page >></a>
              </div>
            </div>
        </div>
        <div class="carte2 col-lg-4 col-md-6">
            <div class="card">
                <img src="<?= base_url().'assets/img/citation.jpg'?>" style="height: 170px; width: 50%; text-center" class="card-img-top rounded-circle" alt="image citations">
              <div class="card-body">
                <h5 class="card-title text-center">Citations</h5>
                <p class="card-text">C'est pour nous donner une certaine reflexion sur les choses que nous traversons dans la vie quotidienne et nous faire acquerir une experience de vie...</p>
                <a href="<?= base_url().'Citations'?>" class="btn btn-secondary">Voir la page >></a>
              </div>
            </div>
        </div>
        <div class="carte3 col-lg-4 col-md-6">
            <div class="card">
                <img src="<?= base_url().'assets/img/proverbe.jpeg'?>" style="height: 170px; width: 50%;" class="card-img-top rounded-circle" alt="image proverbes">
              <div class="card-body">
                <h5 class="card-title text-center">Proverbes</h5>
                <p class="card-text">Aussi longtemps que vous êtes en vie, vous n'appriécez pas cette chose de merveilleuse, demande à une personne malade la chance que tu as...</p>
                <a href="<?= base_url().'Proverbes'?>" class="btn btn-secondary">Voir la page >></a>
              </div>
            </div>
        </div>
      </section>
    </section>

    <footer class="footer container">
        <p class="p-3 mb-5 mt-4" > &copy; <?= date('Y')?> <span class="text-primary">My News</span> glamour, all right reserved </p>
    </footer>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
    <script src="<?= base_url().'assets/js/jquery.min.js' ?>"></script>
</body>
</html>