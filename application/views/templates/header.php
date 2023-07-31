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
    <title>Acceuil</title>
</head>
    <style>
       @media (max-width: 768px) {
        .carte1{
          padding-bottom: 200px;
          font-size: 13px;
        }
    }
    @media (max-width: 1200px) {
      #navbarSupportedContent{
          text-align: center;
        }
      }
    @media (max-width: 450px) {
        .carte1{
          padding-bottom: 200px !important;
          margin-bottom: 45px; 
        }
        .card .col-md-8{
          font-size: 13px;
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

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light active" aria-current="page" href="<?= base_url().'Acceuil'?>"> <i class="fas fa-home"></i>Acceuil</a>
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
      <form class="d-flex d-none d-lg-block" id="displayhome" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </nav>
    