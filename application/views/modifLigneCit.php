
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
    <section class="container">
        <form action="<?= base_url().'Citations/updateIdentite/'.$affiche['id']?>" enctype="multipart/form-data" method='POST' class="container">
            <fieldset>
                    <div class="mb-3">
                        <label for="titreCit" class="form-label">Titre de la citation</label>
                        <input type="text" id="titreCit" name="titreCit" value="<?= $affiche['Titre'] ?>" class="form-control" placeholder="titre de la citation">
                        <?= "<span class='text-danger'>".form_error('titreCit')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="contenuCit" class="form-label">Contenu de la citation</label>
                        <textarea class="form-control" id="contenuCit" name="contenuCit" rows="6" placeholder="Contenu de la citation"> <?php echo $affiche['Contenu']?> </textarea>
                        <?php echo "<span class='text-danger'>".form_error('contenuCit')."</span>";?>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo illustrant la citation</label>
                        <input type="file" id="image" name="image" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-25 float-end">Modifier</button>
            </fieldset>
        </form>
        </main>
    </section>
    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js'?>"></script>
    <script src=" <?= base_url().'assets/js/aos.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>