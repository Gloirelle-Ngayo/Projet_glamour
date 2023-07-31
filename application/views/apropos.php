<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/aos-master/dist/aos.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css'?>">
    <title>A propos</title>
</head>
<style>
        body{
          background-color: #d1dfe3;
        }
        #carteOld{
          background-color: #ffffff;
          border: 1px solid #ffffff;
        }
        #carteOld p{
          font-style: italic;
          line-height: 29px;
          color: #5a5a5a;
          text-align: justify;
        }
        #carteOld .card-title{
          color: #0dcaf0;
        }
        .card .col-md-8{
          font-size: 13px;
          padding: 0px !important;
        }
        
        @media (max-width: 768px) {
        .carte1{
          padding-bottom: 200px;
          margin-bottom: 50px; 
        }
        .card .col-md-8{
          font-size: 13px;
          padding: 0px !important;
        }
    }
    @media (max-width: 450px) {
      .carte1{
          padding-bottom: 300px !important;
          margin-bottom: 40px; 
        }
        .card .col-md-8{
          font-size: 12px;
          padding: 0px !important;
        }
    }
    </style>
<body>


<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#"><i class="fab fa-accusoft"></i>Glamour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fas fa-bars text-light"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
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

<section class="container" id="carteOld">
    <div class="titre">
        <h5 class="text-center">Ce travail a été réalisé par deux personnes</h5>
    </div>
      <div class="carte1" data-aos="fade-up">
        <div class="card m-5" style="max-width: 1000px; border: none !important">
          <div class="row g-0 border-none" style="height: 250px;">
            <div class="col-md-4 h-100">
              <img src="<?= base_url()."images/IMG-20211101-WA0024.png"?>" class="img-fluid h-100 w-75" alt="image1">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Gloirelle NGAYO</h5>
                <p class="card-text">Je suis une polytechnicienne. Je fais réseau et télécommunications, mais je suis une passionnée de l'informatique. Je suis une développeuse web, je fais aussi développement mobile notamment avec java. Ambitieuse et visionnaire, j'aime tout ce qui est lié de près ou de loin aux nouvelles techniques de l'information et de la communication. </p>
                <p class="card-text"><small class="text-muted">Conceptrice et developpeuse web</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carte1" data-aos="fade-up" id='Espacement'>
        <div class="card m-5" style="max-width: 1000px; border: none !important">
          <div class="row g-0 border-none" style="height:250px;">
            <div class="col-md-4 h-100">
              <img src="<?= base_url()."images/1627900887kajo.jpg"?>" class="img-fluid h-100 w-75"  alt="image2">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Dieuveille Baudry Loïc NTSAKALAS</h5>
                <p class="card-text">Je suis un homme à caractère respectueux, observable, pensif, rigoureux, romantique, etc. J'aime la placidité car c'est l'ombre de ma personne. Bien que selon ce que l'on écrit en amour paraît comme chimérique. Me concernant, j'ai été inspiré par plusieurs phénomènes de la vie courante(et amoureuse). Pour moi en tant que homme, je dirai que les hommes sérieux existent. </p>
                <p class="card-text"><small class="text-muted">Responsable du contenu du site</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
    
  <footer class="footer container">
        <p class="p-3 mb-5 mt-4" > &copy; <?= date('Y')?> <span class="text-primary">My News</span> glamour, all right reserved </p>
    </footer> 
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
    <script src=" <?= base_url().'assets/aos-master/dist/aos.js' ?>"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>