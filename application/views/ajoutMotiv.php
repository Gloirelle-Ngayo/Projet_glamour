
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
            <div class="formulaire px-5 pb-5">
                <h2 class="border border-1 border-#dee2e6 p-3 bg-light mb-3 p-2 w-100">Ajout des Motivations dans l'application</h2>
            <form action="<?= base_url().'Motivations/validation'?>" enctype="multipart/form-data" method='POST'>
                <fieldset>
                    <div class="mb-3">
                        <label for="titreMotiv" class="form-label">Titre de la motivation</label>
                        <input type="text" id="titreMotiv" name="titreMotiv" value="<?= set_value('titreMotiv')?>" class="form-control" placeholder="titre de la motivation">
                        <?php echo "<span class='text-danger'>".form_error('titreMotiv')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="auteurMotiv" class="form-label">Auteur de la motivation</label>
                        <input type="text" id="auteurMotiv" name="auteurMotiv" value="<?= set_value('auteurMotiv')?>" class="form-control" placeholder="Auteur de la motivation">
                        <?php echo "<span class='text-danger'>".form_error('auteurMotiv')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuMotiv" class="form-label">Contenu de la motivation</label>
                        <textarea class="form-control" id="contenuMotiv" name="contenuMotiv" value="<?= set_value('contenuMotiv')?>" rows="6" placeholder="Contenu de la motivation"></textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuMotiv')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant la motivation</label>
                        <input type="file" id="image" name="image" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-25 float-end">Ajouter</button>
                </fieldset>
            </form>
            </div>
       
       </main>
    </section>

    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/dashboard.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
</body>
</html>