
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 class='text-center'><?php echo $infos['term']; ?>
              <button onclick="" type="button" class="btn btn-danger btn-xs">Delete this fich</button>
             </h1>
             <table class='table table-striped'>
                <caption>Fiche terminologique</caption>
                <thead>
                  <tr>
                    <th>Part</th>
                    <th>Value</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Part of speech</td>
                    <td id="part_of_speech"><?php echo $infos['part_of_speech'];?></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td id="genre"><?php echo $infos['genre'];?></td>
                    <td></td>                    
                  </tr>  
                  <tr>
                    <td>Domain</td>
                    <td><?php echo $infos['domaine_iddomaine'];?></td>          
                    <td></td>     
                  </tr>    
                  <tr>
                    <td>Subdomain</td>
                    <td><?php echo $infos['sousdomaine_idsousdomaine'];?></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Translation</td>
                    <td><?php echo $infos['translation'];?></td>
                    <td></td>
                  </tr>   
                  <tr>
                    <td>Definition</td>
                    <td id="definition"><?php echo $infos['definition'];?></td>
                    <td onclick='edit(this,"definition")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                    
                  </tr>  
                  <tr>
                    <td>Author source def</td>
                    <td id="author_source_def"><?php echo $infos['author_source_def'];?></td>
                    <td onclick='edit(this,"author_source_def")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                       
                  </tr>
                  <tr>
                    <td>Title source def</td>
                    <td id="title_source_def"><?php echo $infos['title_source_def'];?></td>
                    <td onclick='edit(this,"title_source_def")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>  
                  </tr>    
                  <tr>
                    <td>Material source def</td>
                    <td id="material_source_def"><?php echo $infos['material_source_def'];?></td>
                    <td onclick='edit(this,"material_source_def")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                   
                  </tr>      
                  <tr>
                    <td>Link source def</td>
                    <td id="link_source_def"><?php echo $infos['link_source_def'];?></td>
                    <td onclick='edit(this,"link_source_def")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                       
                  </tr>  
                  <tr>
                    <td>Context</td>
                    <td id="context"><?php echo $infos['context'];?></td>
                    <td onclick='edit(this,"context")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      
                  </tr>      
                  <tr>
                    <td>Author source contexte</td>
                    <td id="author_source_context"><?php echo $infos['author_source_context'];?></td>
                    <td onclick='edit(this,"author_source_context")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                          
                  </tr>
                  <tr>
                    <td>Title source contexte</td>
                    <td id="title_source_context"><?php echo $infos['title_source_context'];?></td>
                    <td onclick='edit(this,"title_source_context")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                            
                  </tr>    
                  <tr>
                    <td>Material source contexte</td>
                    <td id="material_source_context"><?php echo $infos['material_source_context'];?></td>
                    <td onclick='edit(this,"material_source_context")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      
                  </tr>      
                  <tr>
                    <td>Link source contexte</td>
                    <td id="link_source_context"><?php echo $infos['link_source_context'];?></td>
                    <td onclick='edit(this,"link_source_context")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>     
                  </tr>  
                  <tr>
                    <td>Technical note</td>
                    <td id="technical_note"><?php echo $infos['technical_note'];?></td>
                    <td onclick='edit(this,"technical_note")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                       
                  </tr>      
                  <tr>
                    <td>Author source technical note</td>
                    <td id="author_source_technical_note"><?php echo $infos['author_source_technical_note'];?></td>
                    <td onclick='edit(this,"author_source_technical_note")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                                
                  </tr>
                  <tr>
                    <td>Title source technical note</td>
                    <td id="title_source_technical_note"><?php echo $infos['title_source_technical_note'];?></td>
                    <td onclick='edit(this,"title_source_technical_note")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                   
                  </tr>    
                  <tr>
                    <td>Material source technical note</td>
                    <td id="material_source_technical_note"><?php echo $infos['material_source_technical_note'];?></td>
                    <td onclick='edit(this,"material_source_technical_note")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                          
                  </tr>      
                  <tr>
                    <td>Link source technical note</td>
                    <td id="link_source_technical_note"><?php echo $infos['link_source_technical_note'];?></td>
                    <td onclick='edit(this,"link_source_technical_note")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                     
                  </tr>               
                  <tr>
                    <td>Linguistic note</td>
                    <td id="linguistic_note"><?php echo $infos['linguistic_note'];?></td>
                    <td onclick='edit(this,"linguistic_note")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                    
                  </tr>         
                  <tr>
                    <td>Noun collocation</td>
                    <td id="Noun_collocation"><?php echo $infos['Noun_collocation'];?></td>
                    <td onclick='edit(this,"Noun_collocation")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                         
                  </tr> 
                  <tr>
                    <td>Adjective collocation</td>
                    <td id="Adjective_collocation"><?php echo $infos['Adjective_collocation'];?></td>
                    <td onclick='edit(this,"Adjective_collocation")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                    
                  </tr>
                  <tr>
                    <td>Verb collocation</td>
                    <td id="Verb_collocation"><?php echo $infos['Verb_collocation'];?></td>
                    <td onclick='edit(this,"Verb_collocation")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                        
                  </tr>    
                  <tr>
                    <td>Alternatives</td>
                    <td id='alternatives'><?php echo $infos['alternatives'];?></td>
                    <td onclick='edit(this,"alternatives")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                    
                  </tr>
                  <tr>
                    <td>Derivational terms</td>
                    <td id='derivational_terms'><?php echo $infos['derivational_terms'];?></td>
                    <td onclick='edit(this,"derivational_terms")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                     
                  </tr>   
                  <tr>
                    <td>Competing terms</td>
                    <td id='competing_terms'><?php echo $infos['competing_terms'];?></td>
                    <td onclick='edit(this,"competing_terms")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                    
                  </tr>     
                  <tr>
                    <td>Hyperonym</td>
                    <td id='hyperonym'><?php echo $infos['hyperonym'];?></td>
                    <td onclick='edit(this,"hyperonym")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                    
                  </tr>   
                  <tr>
                    <td>Hyponym</td>
                    <td id='hyponym'><?php echo $infos['hyponym'];?></td>
                    <td onclick='edit(this,"hyponym")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>    
                  </tr>   
                  <tr>
                    <td>Meronym (parties)</td>
                    <td id='meronym_parties'><?php echo $infos['meronym_parties'];?></td>
                    <td onclick='edit(this,"meronym_parties")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                   
                  </tr>     
                  <tr>
                    <td>Holonym (whole)</td>
                    <td id='holonym_whole'><?php echo $infos['holonym_whole'];?></td>
                    <td onclick='edit(this,"holonym_whole")'><button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button></td>                      
                  </tr>
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
