
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 style="margin-bottom:40px"  class='text-center'>Historique des modifications</h1>
             <table class='table table-striped'>
                <caption>Toutes les modifications</caption>
                <thead>
                  <tr>
                    <th>Terme</th>
                    <th>Langue</th>
                    <th>Modifié par </th>
                    <th>Le</th>
                    <th>Champ modifié</th>
                    <th>Ancienne valeur</th>
                    <th>Nouvelle valeur</th>
                    <th>Statut</th>
                    <th>Acceptée par</th>
                    <th>Le</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($allModif as $value) { 
                    if($value['statut'] == '1') { $class='rgb(181, 255, 181)'; $statut='acceptée';}
                    else if ($value['statut'] == '0') { $class='rgb(194, 220, 255)';$statut='en attente'; }
                    else if ($value['statut'] == '2') { $class='#FFCCCC'; $statut='refusée';}
                    ?>
                    <tr style='background-color:<?php echo $class ?>' name='<?php echo $value['idmodifications'] ?>'>
                      <td><?php  echo $value['idterme'] ?></td>
                      <td><?php  echo $value['langue'] ?></td>
                      <td><?php  echo $value['id_usermodif'] ?></td>
                      <td><?php  echo $value['date_modif'] ?></td>
                      <td><?php  echo $value['nom_champs'] ?></td>
                      <td><?php  echo $value['old_text'] ?></td>
                      <td><?php  echo $value['new_text'] ?></td>
                      <td><?php  echo $statut ?></td>
                      <td><?php  echo $value['id_useraccept'] ?></td>
                      <td><?php  echo $value['date_accept'] ?></td>
                    </tr>
                  <?php }?> 
                </tbody>
              </table>

          </div>

<script>
var tr = $('tr');
  for (var i=1; i<tr.length; i++) {
    var children = $(tr[i]).children('td');
    console.log(children);
    var lang = $(children[1]).text().trim();
      var idterme = $(children[0]).text().trim();
      console.log(idterme);
          $.ajax({
              url : 'ajax_modifications', // La ressource ciblée
              type : 'POST', // Le type de la requête HTTP.
              dataType : 'json',
              async : false, 
              data : 'type=getname&id='+idterme+'&lang='+lang+'',
              success : (function (data) {
                console.log(data[0].term);
                $(children[0]).empty();
                if (lang == 'en') {
                  $(children[0]).html('<a href="ficheen-'+idterme+'">'+data[0].term+'</a>');
                }
                else if (lang == 'fr') {
                  $(children[0]).html('<a href="fiche-'+idterme+'">'+data[0].terme+'</a>');
                }
                
              })
            })
  }
</script>


<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
