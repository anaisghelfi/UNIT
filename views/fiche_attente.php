
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 style="margin-bottom:40px"  class='text-center'>Fiches en attente de validation</h1>
             <table class='table table-striped'>
                <caption>En attente</caption>
                <thead>
                  <tr>
                    <th>Terme</th>
                    <th>Langue</th>
                    <th>Modifié par </th>
                    <th>Le</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <th colspan="7">Fiche française</th>
                  </tr>                  
                  <?php foreach ($ficheattentefr as $value) { ?>
                    <tr name='<?php echo $value['idfichefr'] ?>'>
                      <td><a href='fiche-<?php echo $value['idfichefr'] ?>'><?php  echo $value['terme'] ?></a></td>
                      <td><?php  echo 'fr' ?></td>
                      <td><?php  echo $value['iduser_ajout'] ?></td>
                      <td><?php  echo $value['date_ajout'] ?></td>
                      <td><div class='text-right'><button style='margin-bottom:5px' name='<?php echo $value['idfichefr'] ?>' onclick='acceptFiche(this, "<?php echo $value['idfichefr'] ?>","fr" )' type='button' class='btn btn-success'>Accepter</button></br>
                      <button name='<?php echo $value['idfichefr'] ?>' onclick='refuseFiche(this, "<?php echo $value['idfichefr'] ?>","fr" )' type='button' class='btn btn-danger'>Refuser</button></div></td>
                    </tr>
                  <?php }?> 
                  <tr>
                      <th colspan="7">Fiche anglaise</th>
                  </tr>                  
                  <?php foreach ($ficheattenteen as $value) { ?>
                    <tr name='<?php echo $value['idficheen'] ?>'>
                      <td><a href='fiche-<?php echo $value['idficheen'] ?>'><?php  echo $value['term'] ?></a></td>
                      <td><?php  echo 'en' ?></td>
                      <td><?php  echo $value['iduser_ajout'] ?></td>
                      <td><?php  echo $value['date_ajout'] ?></td>
                      <td><div class='text-right'><button style='margin-bottom:5px' name='<?php echo $value['idficheen'] ?>' onclick='acceptFiche(this, "<?php echo $value['idficheen'] ?>","en" )' type='button' class='btn btn-success'>Accepter</button></br>
                      <button name='<?php echo $value['idficheen'] ?>' onclick='refuseFiche(this, "<?php echo $value['idficheen'] ?>","en" )' type='button' class='btn btn-danger'>Refuser</button></div></td>
                    </tr>
                  <?php }?>                 </tbody>
              </table>

          </div>




<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
