
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 style="margin-bottom:40px"  class='text-center'>Liste de tous les utilisateurs</h1>
             <table class='table table-striped'>
                <caption>Tous les utilisateurs</caption>
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Mail</th>
                    <th>Statut</th>
                    <th>Université</th>
                    <th>Profil</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                   <?php foreach ($utilisateurs as $value) { ?>
                    <?php if($value['type'] == '1') {
                        $type = 'etudiant/professeur';
                      }
                      else if ($value['type'] == '2') {
                        $type = 'terminologue';
                      }
                      else if ($value['type'] == '3') {
                        $type = 'administrateur';
                      }
                    ?>
                    <tr name='<?php echo $value['iduser'] ?>'>
                      <td><?php echo $value['nom'] ?></td>
                      <td><?php echo $value['prenom'] ?></td>
                      <td><?php echo $value['email'] ?></td>
                      <td><?php echo $value['status'] ?></td>
                      <td><?php echo $value['universite'] ?></td>
                      <td><?php echo $type ?></td>
                      <td><div class='text-right'>
                    <?php if($type == 'administrateur' || $type == 'terminologue') {?>
                     <button style='margin-bottom:5px' name='<?php echo $value['iduser'] ?>' onclick='changeStatus("etudiant", "<?php echo $value['iduser'] ?>" )' type='button' class='btn btn-success btn-xs'>Passer étudiant/professeur</button>
                    <?php }?>
                    <?php if($type == 'administrateur' || $type == 'etudiant/professeur') {?> 
                     <button style='margin-bottom:5px' name='<?php echo $value['iduser'] ?>' onclick='changeStatus("terminologue", "<?php echo $value['iduser'] ?>" )' type='button' class='btn btn-info btn-xs'>Passer terminologue</button>
                     <?php }?>
                    <?php if($type == 'terminologue' || $type == 'etudiant/professeur') {?> 
                     <button style='margin-bottom:5px' name='<?php echo $value['iduser'] ?>' onclick='changeStatus("administrateur", "<?php echo $value['iduser'] ?>" )' type='button' class='btn btn-danger btn-xs'>Passer administrateur</button>
                     <?php }?>                    
                   </div></td>                    
                    </tr>
                  <?php }?>
                </tbody>
              </table> 

          </div>



<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
