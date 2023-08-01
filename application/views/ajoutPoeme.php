
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
            <div class="formulaire px-5 pb-5">
                <h2 class="border border-1 border-#dee2e6 p-3 bg-light mb-3 p-2 w-100">Ajout des Poèmes dans l'application</h2>
            <form action="<?= base_url().'Poemes/validation'?>" enctype="multipart/form-data" method='POST'>
                    <div class="mb-3">
                        <label for="titrePoeme" class="form-label">Titre du poème</label>
                        <input type="text" id="titrePoeme" name="titrePoeme" value="<?= set_value('titrePoeme')?>" class="form-control" placeholder="titre du poème">
                        <?php echo "<span class='text-danger'>".form_error('titrePoeme')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="auteurPoeme" class="form-label">Auteur du poème</label>
                        <input type="text" id="auteurPoeme" name="auteurPoeme" value="<?= set_value('auteurPoeme')?>" class="form-control" placeholder="Auteur du poème">
                        <?php echo "<span class='text-danger'>".form_error('auteurPoeme')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuPoeme" class="form-label">Contenu du poème</label>
                        <textarea class="form-control" name="contenuPoeme" value="<?= set_value('contenuPoeme')?>" id="contenuPoeme" rows="6" placeholder="Contenu du poème"></textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuPoeme')."</span>";?>
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