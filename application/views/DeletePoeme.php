
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
          <div>
            <h3 class='border border-1 border-#dee2e6 p-3 bg-light'>Suppression des Poèmes</h3>
          </div>
            <div class="table-responsive">
            <table class="table">
              <style>
                table{
                    border-collapse: collapse;
                    border: 1px solid #dee2e6;
                }
                table,tr,th,td{
                    border: 1px solid #dee2e6;
                    padding : 10px;
                }
              </style>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Contenu</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($affiche as $row): ?>
                    <tr>
                        <td><?= $row['Titre'] ?></td>
                        <td> <?= $row['Auteur'] ?> </td>
                        <td> <?= $row['Contenu'] ?> </td>
                        <td><img style="height:50px; width:50px;" src="<?= base_url().'images/'. $row['Image']?>" alt="une image"></td>
                        <td> <a href="<?= base_url().'poemes/delete/'.$row['id']?>" class='btn btn-danger p-1 text-decoration-none'>Supprimer</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
            </main> 
    </section>

    <script src=" <?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/dashboard.js' ?>"></script>
    <script src=" <?= base_url().'assets/js/script.js' ?>"></script>
</body>
</html>