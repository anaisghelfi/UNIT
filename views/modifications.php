
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 style="margin-bottom:40px"  class='text-center'>Modifications en attente de validation</h1>
             <table class='table table-striped'>
                <caption>En attente</caption>
                <thead>
                  <tr>
                    <th>Terme</th>
                    <th>Langue</th>
                    <th>Modifié par </th>
                    <th>Le</th>
                    <th>Champ modifié</th>
                    <th>Ancienne valeur</th>
                    <th>Nouvelle valeur</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($modif as $value) { ?>
                    <tr name='<?php echo $value['idmodifications'] ?>'>
                      <td><?php  echo $value['idterme'] ?></td>
                      <td><?php  echo $value['langue'] ?></td>
                      <td><?php  echo $value['id_usermodif'] ?></td>
                      <td><?php  echo $value['date_modif'] ?></td>
                      <td><?php  echo $value['nom_champs'] ?></td>
                      <td><?php  echo $value['old_text'] ?></td>
                      <td><?php  echo $value['new_text'] ?></td>
                      <td><div class='text-right'><button style='margin-bottom:5px' name='<?php echo $value['idmodifications'] ?>' onclick='acceptModif(this, "<?php echo $value['idmodifications'] ?>" )' type='button' class='btn btn-success'>Accepter</button></br>
                      <button name='<?php echo $value['idmodifications'] ?>' onclick='refuseModif(this, "<?php echo $value['idmodifications'] ?>" )' type='button' class='btn btn-danger'>Refuser</button></div></td>
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
      var idusermodif = $(children[2]).text().trim();
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
          $.ajax({
              url : 'ajax_modifications', // La ressource ciblée
              type : 'POST', // Le type de la requête HTTP.
              dataType : 'json',
              async : false, 
              data : 'type=getusername&id='+idusermodif+'',
              success : (function (data) {
                console.log(data);
                $(children[2]).empty();
                  //$(children[2]).html(data[0].terme);
              })
            })  
      }
</script>


<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
