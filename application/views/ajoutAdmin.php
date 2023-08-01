
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
            <div class="formulaire px-5 pb-5">

            <?php 
                if ($this->session->flashdata('statut')) {
                  echo '<p class="alert alert-success" role="alert">'.$this->session->flashdata('statut').'</p>';
                } else {
                  echo '<h2 class="border border-1 border-#dee2e6 p-3 bg-light">Ajout des Administrateurs</h2>';
                }
              ?>
                <form action="<?= base_url().'AdminOld/validation'?>" enctype="multipart/form-data" method='POST'>
                    <div class="mb-3">
                        <label for="nomAdmin" class="form-label">nom de l'Administrateur</label>
                        <input type="text" id="nomAdmin" name="nomAdmin" value="<?= set_value('nomAdmin')?>" class="form-control" placeholder="nom de l'administrateur">
                        <?php echo "<span class='text-danger'>".form_error('nomAdmin')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="prenomAdmin" class="form-label">prénom de l'Administrateur</label>
                        <input type="text" id="prenomAdmin" name="prenomAdmin" value="<?= set_value('prenomAdmin')?>" class="form-control" placeholder="prenom de l'administrateur">
                        <?php echo "<span class='text-danger'>".form_error('prenomAdmin')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="adresseAdmin" class="form-label">Adresse mail de l'Administrateur</label>
                        <input type="text" id="adresseAdmin" name="adresseAdmin" value="<?= set_value('adresseAdmin')?>" class="form-control" placeholder="Adresse de l'administrateur">
                        <?php echo "<span class='text-danger'>".form_error('adresseAdmin')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" id="password" name="password" value="<?= set_value('password')?>" class="form-control" placeholder="Mot de passe de l'administrateur">
                        <?php echo "<span class='text-danger'>".form_error('password')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant le poème</label>
                        <input type="file" id="image" name="image" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-25 float-end">Ajouter</button>
            </form>
            </div>
       </main>
    </section>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/dashboard.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
</body>
</html>