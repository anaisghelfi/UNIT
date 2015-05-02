
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 style="margin-bottom:40px"  class='text-center'>Toutes les fiches</h1>
             <table class='table table-striped'>
                <caption>Toutes les fiches</caption>
                <thead>
                  <tr>
                    <th>Terme</th>
                    <th>Langue</th>
                    <th>Ajoutée par </th>
                    <th>Le</th>
                    <th>Statut</th>
                    <th>Acceptée/refusée par</th>
                    <th>Le</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <th colspan="7">Fiche française</th>
                </tr>                   
                <?php foreach ($fichefr as $value) { 
                    if($value['statut'] == '1') { $class='rgb(181, 255, 181)'; $statut='acceptée';}
                    else if ($value['statut'] == '0') { $class='rgb(194, 220, 255)';$statut='en attente'; }
                    else if ($value['statut'] == '2') { $class='#FFCCCC'; $statut='refusée';}
                    ?>
                    <tr style='background-color:<?php echo $class ?>' name='<?php echo $value['idfichefr'] ?>'>
                      <td><a href='fiche-<?php echo $value['idfichefr'] ?>'><?php  echo $value['terme'] ?></a></td>
                      <td><?php  echo 'fr' ?></td>
                      <td><?php  echo $value['iduser_ajout'] ?></td>
                      <td><?php  echo $value['date_ajout'] ?></td>
                      <td><?php  echo $statut ?></td>
                      <td><?php  echo $value['iduser_valid'] ?></td>
                      <td><?php  echo $value['date_valid'] ?></td>
                    </tr>
                  <?php }?> 
                  <tr>
                      <th colspan="7">Fiche anglaise</th>
                  </tr>                    
                  <?php foreach ($ficheen as $value) { 
                    if($value['statut'] == '1') { $class='rgb(181, 255, 181)'; $statut='acceptée';}
                    else if ($value['statut'] == '0') { $class='rgb(194, 220, 255)';$statut='en attente'; }
                    else if ($value['statut'] == '2') { $class='#FFCCCC'; $statut='refusée';}
                    ?>
                    <tr style='background-color:<?php echo $class ?>' name='<?php echo $value['idficheen'] ?>'>
                      <td><a href='ficheen-<?php echo $value['idficheen'] ?>'><?php  echo $value['term'] ?></a></td>
                      <td><?php  echo 'en' ?></td>
                      <td><?php  echo $value['iduser_ajout'] ?></td>
                      <td><?php  echo $value['date_ajout'] ?></td>
                      <td><?php  echo $statut ?></td>
                      <td><?php  echo $value['iduser_valid'] ?></td>
                      <td><?php  echo $value['date_valid'] ?></td>
                    </tr>
                  <?php }?>                 </tbody>
              </table>

          </div>



<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
