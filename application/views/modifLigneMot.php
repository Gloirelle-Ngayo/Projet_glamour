
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
    <section class="container">
        <form action="<?= base_url().'Motivations/updateIdentite/'.$affiche['id']?>" enctype="multipart/form-data" method='POST' class="container">
            <fieldset>
                    <div class="mb-3">
                        <label for="titreMotiv" class="form-label">Titre de la motivation</label>
                        <input type="text" id="titreMotiv" name="titreMotiv" value="<?= $affiche['Titre'] ?>" class="form-control" placeholder="titre de la motivation">
                        <?= "<span class='text-danger'>".form_error('titreMotiv')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuMotiv" class="form-label">Contenu de la motivation</label>
                        <textarea class="form-control" id="contenuMotiv" name="contenuMotiv" rows="6" placeholder="Contenu de la motivation"> <?php echo $affiche['Contenu']?> </textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuMotiv')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant la motivation</label>
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