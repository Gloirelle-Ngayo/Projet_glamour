
  <section class="container">
        <?php foreach ($affiche as $row): ?>
          <div class="carte1" data-aos="fade-up">
            <div class="card mb-3 m-4" style="max-width: 1000px;">
               <div class="row g-0 border-none" style="height: 270px;">
              <div class="col-md-4 h-100">
                  <img src="<?= base_url()."images/".$row['Image']?>" class="img-fluid rounded-start h-100 w-100" alt="image1">
              </div>
              <div class="col-md-8 p-4">
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
    