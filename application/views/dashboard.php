<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/style1.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/dashboard.css'?>">
    <link rel="stylesheet" href="<?= base_url().'assets/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css'?>">
</head>
<style>
    @media (max-width: 767px) {
      .card{
        width: 50% !important;
        position: relative;
        left: 25% !important;
      }
      }
    
    </style>
<body>
<header  class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow bg-dark" >
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-dark border-none" href="#"><i class="fab fa-accusoft"></i> Glamour</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <p class="h5 ext-dark w-100"  type="text" placeholder="Search" aria-label="Search">Dashboard</p>
  <div class="navbar-nav  ">
    <div class="nav-item text-nowrap">
      <div class="btn-group me-1 mb-1">
        <a target="_blank" class="btn btn-sm btn-outline-success" href="<?= base_url().'Acceuil'?>"><i class="fas fa-eye"></i> Voir le site</a>
        <a class="btn btn-sm btn-outline-danger" href="<?= base_url().'Login/deconect'?>"><i class="fas fa-user"></i> Deconnecter</a>
      </div>
    </div>
  </div>
</header>
        <section>
            <div class="row">
              <div id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="width: 220px;">
                  <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                  </a>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <button class="btn btn-toggle align-items-center rounded collapsed text-light w-100 text-start" data-bs-toggle="collapse" data-bs-target="#gloire1" aria-expanded="false">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                  </button>
                </li>
                <li>
                  <button class="btn btn-toggle align-items-center rounded collapsed text-light w-100 text-start" data-bs-toggle="collapse" data-bs-target="#gloire2" aria-expanded="false">
                    <i class="fas fa-podcast"></i> Citations
                  </button>
                  <div class="collapse" id="gloire2">
                  <ul class="btn-toggle-nav list-unstyled fw-normal">
                    <li><a href="<?= base_url().'Citations/ajoutCit'?>" class="link-light text-decoration-none ms-4">Ajouter</a></li>
                    <li><a href="<?= base_url().'Citations/modifCitations'?>" class="link-light text-decoration-none ms-4">Modifier</a></li>
                    <li><a href="<?= base_url().'Citations/supCit'?>" class="link-light text-decoration-none ms-4">Supprimer</a></li>
                  </ul>
                </div>
              </li>
              <li>
                <button class="btn btn-toggle align-items-center rounded collapsed text-light w-100 text-start" data-bs-toggle="collapse" data-bs-target="#gloire3" aria-expanded="false">
                  <i class="fas fa-eye-dropper"></i> Proverbes
                </button>
                <div class="collapse" id="gloire3">
                  <ul class="btn-toggle-nav list-unstyled fw-normal">
                    <li><a href="<?= base_url().'Proverbes/ajoutpro'?>" class="link-light text-decoration-none ms-4">Ajouter</a></li>
                    <li><a href="<?= base_url().'Proverbes/modifProverbes'?>" class="link-light text-decoration-none ms-4">Modifier</a></li>
                    <li><a href="<?= base_url().'Proverbes/supProv'?>" class="link-light text-decoration-none ms-4">Supprimer</a></li>
                  </ul>
                </div>
              </li>
              <li>
              <button class="btn btn-toggle align-items-center rounded collapsed text-light w-100 text-start" data-bs-toggle="collapse" data-bs-target="#gloire4" aria-expanded="false">
                <i class="fas fa-directions"></i> Poemes
                </button>
                <div class="collapse" id="gloire4">
                  <ul class="btn-toggle-nav list-unstyled fw-normal">
                    <li><a href="<?= base_url().'Poemes/ajoutPoeme'?>" class="link-light text-decoration-none ms-4">Ajouter</a></li>
                    <li><a href="<?= base_url().'Poemes/modifPoemes'?>" class="link-light text-decoration-none ms-4">Modifier</a></li>
                    <li><a href="<?= base_url().'Poemes/supPoeme'?>" class="link-light text-decoration-none ms-4">Supprimer</a></li>
                  </ul>
                </div>
              </li>
              <li>
              <button class="btn btn-toggle align-items-center rounded collapsed text-light w-100 text-start" data-bs-toggle="collapse" data-bs-target="#gloire5" aria-expanded="false">
                <i class="fas fa-compass"></i> Motivations
                </button>
                <div class="collapse" id="gloire5">
                  <ul class="btn-toggle-nav list-unstyled fw-normal">
                    <li><a href="<?= base_url().'Motivations/ajoutMotiv'?>" class="link-light text-decoration-none ms-4">Ajouter</a></li>
                    <li><a href="<?= base_url().'Motivations/modifMotivations'?>" class="link-light text-decoration-none ms-4">Modifier</a></li>
                    <li><a href="<?= base_url().'Motivations/supMotiv'?>" class="link-light text-decoration-none ms-4">Supprimer</a></li>
                  </ul>
                </div>
              </li>
              <li>
              <button class="btn btn-toggle align-items-center rounded collapsed text-light w-100 text-start" data-bs-toggle="collapse" data-bs-target="#gloire6" aria-expanded="false">
                <i class="fas fa-users"></i> Admnistrateurs
                </button>
                <div class="collapse" id="gloire6">
                  <ul class="btn-toggle-nav list-unstyled fw-normal">
                    <li><a href="<?= base_url().'AdminOld/ajoutAdmin'?>" class="link-light text-decoration-none ms-4">Ajouter</a></li>
                    <li><a href="<?= base_url().'AdminOld/supAdmin'?>" class="link-light text-decoration-none ms-4">Supprimer</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <div class="dropdown Admin" style="margin-top: 400px;">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src=<?= base_url().'images/MYXJ_20221022131303_fast.jpg'?> alt="image conceptrice du site" width="50" height="50" class="rounded-circle">
                  <strong class="ms-2">Gloirelle Ngayo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="#">Supprimer</a></li> <hr>
                  <li><a class="dropdown-item" href="<?= base_url().'Login/deconect'?>">Deconnexion</a></li>
                </ul>
              </div>
            </div>
       </div>
      
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
      <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary" style="width: 100%; height: 100%">
              <div class="card-body">
                <h5 class="card-title text-white">Motivations</h5> <br>
                <h6 class="card-title fs-1 text-center text-white"> <i class=" fas fa-compass"></i></h6>
                <p class="fs-2 text-center text-white "><?php echo $aff3 ?></p>
                <p class="text-center"><a href="<?= base_url().'Motivations/modifMotivations'?>" class="card-link text-white text-decoration-none">Voir la liste complète <i class='fas fa-paper-plane'></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          <div class="card bg-info" style="width: 100%; height: 100%">
              <div class="card-body">
                <h5 class="card-title text-white">Proverbes</h5>
                <h6 class="card-title fs-1 text-center text-white"> <i class="fas fa-eye-dropper"></i></h6>
                <p class="fs-2 text-center text-white mt-4"><?php echo $aff1 ?></p>
                <p class="text-center"><a href="<?= base_url().'Proverbes/modifProverbes'?>" class="card-link text-white text-decoration-none">Voir la liste complète <i class='fas fa-paper-plane'></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          <div class="card bg-success" style="width: 100%; height: 100%">
              <div class="card-body">
                <h5 class="card-title text-white">Citations</h5>
                <h6 class="card-title fs-1 text-center text-white"> <i class="fas fa-podcast"></i></h6>
                <p class="fs-2 text-center text-white mt-4"><?php echo $aff2 ?></p>
                <p class="text-center"> <a href="<?= base_url().'Citations/modifCitations' ?>" class="card-link text-white text-decoration-none">Voir la liste complète <i class='fas fa-paper-plane'></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          <div class="card bg-warning" style="width: 100%; height: 100%">
              <div class="card-body">
                <h5 class="card-title text-white">Poèmes</h5>
                <h6 class="card-title fs-1 text-center text-white"> <i class="fas fa-directions"></i></h6>
                <p class="fs-2 text-center text-white mt-4"><?php echo $aff ?></p>
                <p class="text-center"><a href="<?= base_url().'Poemes/modifPoemes'?>" class="card-link text-white text-decoration-none">Voir la liste complète <i class='fas fa-paper-plane'></i></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="tableau mt-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre minimal à atteindre</th>
              <th scope="col">nombre Actuel</th>
              <th scope="col">Pourcentage</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Motivations</th>
              <td>1000</td>
              <td> 
                <?php
                  echo $aff3;
                ?>
              </td>
              <td><?php echo $aff3/10 .'%'?></td>
            </tr>
            <tr>
              <th scope="row">Citations</th>
              <td>1000</td>
              <td> <?php
                  echo $aff2;
                ?></td>
              <td><?php echo $aff2/10 .'%'?></td>
            </tr>
            <tr>
              <th scope="row">Proverbes</th>
              <td>1000</td>
              <td> <?php
                  echo $aff1;
                ?></td>
              <td><?php echo $aff1/10 .'%'?></td>
            </tr>
            <tr>
              <th scope="row">Poèmes</th>
              <td>1000</td>
              <td> <?php
                  echo $aff;
                ?></td>
              <td><?php echo $aff/10 .'%'?></td> 
            </tr>
          </tbody>
        </table>
        </div>
        </main>
    </section>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/dashboard.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
</body>
</html>