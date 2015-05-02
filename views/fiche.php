
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 class='text-center'><?php echo $infos['terme']; ?>
              <button onclick="" type="button" class="btn btn-danger btn-xs">Supprimer la fiche</button>
             </h1>
             <table class='table table-striped'>
                <caption>Fiche terminologique</caption>
                <thead>
                  <tr>
                    <th>Catégorie</th>
                    <th>Valeur</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Catégorie grammaticale</td>
                    <td><?php echo $infos['categorie_grammaticale'];?></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Genre</td>
                    <td><?php echo $infos['genre'];?></td>
                    <td></td>
                  </tr>  
                  <tr>
                    <td>Domaine</td>
                    <td><?php echo $infos['domaine_iddomaine'];?></td>
                    <td></td>
                  </tr>    
                  <tr>
                    <td>Sous-domaine</td>
                    <td><?php echo $infos['sousdomaine_idsousdomaine'];?></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Equivalent</td>
                    <td><?php echo $infos['equivalent'];?></td>
                    <td></td>
                  </tr>   
                  <tr>
                    <td>Définition</td>
                    <td id='definition'><?php echo $infos['definition'];?></td>
                      <td onclick='edit(this,"definition")'><button type="button" class="btn btn-default">
                         <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </button></td>                   
                  </tr>  
                  <tr>
                    <td>Auteur source def</td>
                    <td id='auteur_source_def'><?php echo $infos['auteur_source_def'];?></td>
                    <td onclick='edit(this,"auteur_source_def")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                   
                  </tr>
                  <tr>
                    <td>Titre source def</td>
                    <td id='titre_source_def'><?php echo $infos['titre_source_def'];?></td>
                    <td onclick='edit(this,"titre_source_def")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                       
                  </tr>    
                  <tr>
                    <td>Support source def</td>
                    <td id='support_source_def'><?php echo $infos['support_source_def'];?></td>
                    <td onclick='edit(this,"support_source_def")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                    
                  </tr>      
                  <tr>
                    <td>Lien source def</td>
                    <td id='lien_source_def'><?php echo $infos['lien_source_def'];?></td>
                    <td onclick='edit(this,"lien_source_def")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td> 
                  </tr>  
                  <tr>
                    <td>Contexte</td>
                    <td id='contexte'><?php echo $infos['contexte'];?></td>
                    <td onclick='edit(this,"contexte")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                   
                  </tr>      
                  <tr>
                    <td>Auteur source contexte</td>
                    <td id='auteur_source_contexte'><?php echo $infos['auteur_source_contexte'];?></td>
                    <td onclick='edit(this,"auteur_source_contexte")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>
                  <tr>
                    <td>Titre source contexte</td>
                    <td id='titre_source_contexte'><?php echo $infos['titre_source_contexte'];?></td>
                    <td onclick='edit(this,"titre_source_contexte")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>    
                  <tr>
                    <td>Support source contexte</td>
                    <td id='support_source_contexte'><?php echo $infos['support_source_contexte'];?></td>
                    <td onclick='edit(this,"support_source_contexte")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>      
                  <tr>
                    <td>Lien source contexte</td>
                    <td id='lien_source_contexte'><?php echo $infos['lien_source_contexte'];?></td>
                    <td onclick='edit(this,"lien_source_contexte")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>  
                  <tr>
                    <td>Note technique</td>
                    <td id='titre_source_def'><?php echo $infos['note_technique'];?></td>
                    <td onclick='edit(this,"note_technique")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>      
                  <tr>
                    <td>Auteur source technique</td>
                    <td id='auteur_source_note_technique'><?php echo $infos['auteur_source_note_technique'];?></td>
                    <td onclick='edit(this,"auteur_source_note_technique")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>
                  <tr>
                    <td>Titre source technique</td>
                    <td id='titre_source_note_technique'><?php echo $infos['titre_source_note_technique'];?></td>
                    <td onclick='edit(this,"titre_source_note_technique")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>    
                  <tr>
                    <td>Support source technique</td>
                    <td id='titre_source_def'><?php echo $infos['support_source_note_technique'];?></td>
                      <td onclick='edit(this,"support_source_note_technique")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>    
                  </tr>      
                  <tr>
                    <td>Lien source technique</td>
                    <td id='lien_source_note_technique'><?php echo $infos['lien_source_note_technique'];?></td>
                    <td onclick='edit(this,"lien_source_note_technique")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>               
                  <tr>
                    <td>Note linguistique</td>
                    <td id='note_linguistique'><?php echo $infos['note_linguistique'];?></td>
                    <td onclick='edit(this,"note_linguistique")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>         
                  <tr>
                    <td>Collocation avec un nom</td>
                    <td id='collocation_avec_un_nom'><?php echo $infos['collocation_avec_un_nom'];?></td>
                    <td onclick='edit(this,"collocation_avec_un_nom")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr> 
                  <tr>
                    <td>Collocation avec un adjectif</td>
                    <td id='collocation_avec_un_adjectif'><?php echo $infos['collocation_avec_un_adjectif'];?></td>
                    <td onclick='edit(this,"collocation_avec_un_adjectif")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>
                  <tr>
                    <td>Collocation avec un verbe</td>
                    <td id='collocation_avec_un_verbe'><?php echo $infos['collocation_avec_un_verbe'];?></td>
                    <td onclick='edit(this,"collocation_avec_un_verbe")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>    
                  <tr>
                    <td>Variantes</td>
                    <td id='variantes'><?php echo $infos['variantes'];?></td>
                    <td onclick='edit(this,"variantes")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>
                  <tr>
                    <td>Familles dérivationnelles</td>
                    <td id='familles_derivationnelles'><?php echo $infos['familles_derivationnelles'];?></td>
                    <td onclick='edit(this,"familles_derivationnelles")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>   
                  <tr>
                    <td>Concurrents</td>
                    <td id='concurrents'><?php echo $infos['concurrents'];?></td>
                    <td onclick='edit(this,"concurrents")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>     
                  <tr>
                    <td>Hyperonyme</td>
                    <td id='hyperonyme'><?php echo $infos['hyperonyme'];?></td>
                    <td onclick='edit(this,"hyperonyme")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>   
                  <tr>
                    <td>Hyponyme</td>
                    <td id='hyponyme'><?php echo $infos['hyponyme'];?></td>
                    <td onclick='edit(this,"hyponyme")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>   
                  <tr>
                    <td>Meronyme (parties)</td>
                    <td id='meronymeparties'><?php echo $infos['meronymeparties'];?></td>
                    <td onclick='edit(this,"meronymeparties")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>     
                  <tr>
                    <td>Holonymes</td>
                    <td id='holonymetout'><?php echo $infos['holonymetout'];?></td>
                    <td onclick='edit(this,"holonymetout")'><button type="button" class="btn btn-default">
                       <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      </tr>
                </tbody>
              </table>

          </div>

<script>
var h1 = $("h1").text();
h1 = h1.trim();

var bodyText = $('table').html();
var newBody = bodyText.replace(h1,'<b>'+h1+'</b>');
$('table').html(newBody);
</script>

<?php if(empty($_SESSION['userid'])){ ?>
  <script>
    $('table button').remove();
  </script>
<?php } ?>

<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
