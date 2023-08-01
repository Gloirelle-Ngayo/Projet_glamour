
       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3" style="z-index: 100"> 
          
              <?php 
                if ($this->session->flashdata('statut')) {
                  echo '<p class="alert alert-danger" role="alert">'.$this->session->flashdata('statut').'</p>';
                } else {
                  echo '<h2 class="border border-1 border-#dee2e6 p-3 bg-light">Gestion et Suppression des Administrateurs</h2>';
                }
              ?>
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
                    padding-left : 128px;
                }
              </style>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($afficheAdmin as $row): ?>
                    <tr>
                        <td><?= $row['nom'] ?></td>
                        <td> <?= $row['prenom'] ?> </td>
                        <td> <?= $row['Adresse'] ?> </td>
                        <td><img style="height:50px; width:50px;" src="<?= base_url().'images/'. $row['image']?>" alt="une image"></td>
                        <td> <a href="<?= base_url().'AdminOld/delete/'.$row['id']?>" class='btn btn-danger p-1 text-decoration-none'>Supprimer</a></td>
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