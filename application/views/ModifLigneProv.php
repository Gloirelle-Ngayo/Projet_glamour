
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
    <section class="container">
        <form action="<?= base_url().'Proverbes/updateIdentite/'.$affiche['id']?>" enctype="multipart/form-data" method='POST' class="container">
            <fieldset>
                    <div class="mb-3">
                        <label for="titrePro" class="form-label">Titre du proverbe</label>
                        <input type="text" id="titrePro" name="titrePro" value="<?= $affiche['Titre'] ?>" class="form-control" placeholder="titre du proverbe">
                        <?= "<span class='text-danger'>".form_error('titrePro')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuPro" class="form-label">Contenu du proverbe</label>
                        <textarea class="form-control" id="contenuPro" name="contenuPro" rows="6" placeholder="Contenu du proverbe"> <?php echo $affiche['Contenu']?> </textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuPro')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant le proverbe</label>
                        <input type="file" id="image" name="image" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-25 float-end">Modifier</button>
            </fieldset>
        </form>
        </main>
    </section>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/aos.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>