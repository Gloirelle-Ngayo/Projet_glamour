
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
            <div class="formulaire px-5 pb-5">
                <h2 class="border border-1 border-#dee2e6 p-3 bg-light mb-3 p-2 w-100">Ajout des citations dans l'application</h2>
            <form action="<?= base_url().'Citations/validation'?>" enctype="multipart/form-data" method='POST'>
                <fieldset>
                    <div class="mb-3">
                        <label for="titreCit" class="form-label">Titre de la citation</label>
                        <input type="text" id="titreCit" name="titreCit" value="<?= set_value('titreCit')?>" class="form-control" placeholder="titre de la citation">
                        <?php echo "<span class='text-danger'>".form_error('titreCit')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="auteurCit" class="form-label">Auteur de la citation</label>
                        <input type="text" id="auteurCit" name="auteurCit" value="<?= set_value('auteurCit')?>" class="form-control" placeholder="Auteur de la citation">
                        <?php echo "<span class='text-danger'>".form_error('auteurCit')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuCit" class="form-label">Contenu de la citation</label>
                        <textarea class="form-control" id="contenuCit" name="contenuCit" value="<?= set_value('contenuCit')?>" rows="6" placeholder="Contenu de la citation"></textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuCit')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant la citation</label>
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