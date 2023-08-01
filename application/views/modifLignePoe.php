
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
    <form action="<?= base_url().'Poemes/updateIdentite/'.$affiche['id'] ?>" enctype="multipart/form-data" method='POST' class="container">
            <fieldset>
                    <div class="mb-3">
                        <label for="titrePoeme" class="form-label">Titre du poeme</label>
                        <input type="text" id="titrePoeme" name="titrePoeme" value="<?= $affiche['Titre']?>" class="form-control" placeholder="titre de la motivation">
                        <?= "<span class='text-danger'>".form_error('titrePoeme')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuPoeme" class="form-label">Contenu du poeme</label>
                        <textarea class="form-control" id="contenuPoeme" name="contenuPoeme" rows="6" placeholder="Contenu de la motivation"> <?= $affiche['Contenu']?> </textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuPoeme')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant le poeme</label>
                        <input type="file" id="image" name="image" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-25 float-end">Modifier</button>
            </fieldset>
    </form>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/aos.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>