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
    <title>Proverbes</title>
</head>
  <style>
        body{
          background-color: #d1dfe3;
        }
  </style>
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
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>

<section class="container">
    <?php foreach ($affiche as $row): ?>
      <div class="carte1" data-aos="fade-up">
        <div class="card mb-3 m-4" style="max-width: 1000px;">
            <div class="row g-0 border-none" style="height: 270px;">
          <div class="col-md-4 h-100">
              <img src="<?= base_url()."images/".$row['Image']?>" class="img-fluid rounded-start h-100 w-100" alt="image1">
          </div>
          <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $row['Titre']?></h5>
                <p class="card-text"><?= $row['Contenu'] ?></p>
                <p class="card-text text-end"><small class="text-muted"><?= $row['Auteur'] ?></small></p>
              </div>
            </div>
          </div>
          </div>
        </div>
      <?php endforeach?>
  </section>
  <footer class="footer container">
        <p class="p-3 mb-5 mt-4" > &copy; <?= date('Y')?> <span class="text-primary">My News</span> Kamour, all right reserved </p>
    </footer>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/aos-master/dist/aos.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>