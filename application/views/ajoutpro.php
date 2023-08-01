
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
            <div class="formulaire px-5 pb-5">
                <h2 class="border border-1 border-#dee2e6 p-3 bg-light mb-3 p-2 w-100">Ajout des Proverbes dans l'application</h2>
            <form action="<?= base_url().'Proverbes/validation'?>" enctype="multipart/form-data" method='POST'>
                <fieldset>
                    <div class="mb-3">
                        <label for="titrePro" class="form-label">Titre du proverbe</label>
                        <input type="text" id="titrePro"  name="titrePro" value="<?= set_value('titrePro')?>" class="form-control" placeholder="titre du proverbe">
                        <?php echo "<span class='text-danger'>".form_error('titrePro')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="auteurPro" class="form-label">Auteur du proverbe</label>
                        <input type="text" id="auteurPro"  name="auteurPro" value="<?= set_value('auteurPro')?>" class="form-control" placeholder="Auteur du proverbe">
                        <?php echo "<span class='text-danger'>".form_error('auteurPro')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuPro" class="form-label">Contenu du proverbe</label>
                        <textarea class="form-control" id="contenuPro"  name="contenuPro" value="<?= set_value('contenuPro')?>" rows="6" placeholder="Contenu du proverbe"></textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuPro')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant le proverbe</label>
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