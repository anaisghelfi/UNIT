
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <div class='col-md-12'>
                <div id='fichefr' class='col-md-6'>
                  <h1 style="margin-bottom:40px"  class='text-center'>Fiche française</h1>
                     <form method='POST' action='ajouter_fiche'>
                    <div class="form-group">                     
                        <input type="text" name='terme' id='terme' placeholder="Terme" class="form-control">
                    </div>                     
                    <select name='categorie_grammaticale' id='categorie_grammaticale' class="form-control">
                      <optgroup label="Catégorie grammatical">
                        <option value="n.">n.</option>
                        <option value="adj.">adj</option>
                        <option value="v.">v.</option>
                        <option value="p.">p.</option>
                      </optgroup>
                    </select>   </br>           
                    <select name='genre' id='genre' class="form-control">
                      <optgroup label="Genre">
                        <option value="m.">m.</option>
                        <option value="f.">f.</option>
                      </optgroup>
                    </select>   </br>    
                    <select onchange='getSousDomaine("fr")' name='domaine' id='domaine_iddomaine' class="form-control">
                      <optgroup id='domaine-search-fr' label="Domaine">
                      </optgroup>
                    </select>   
                    </br> 
                    <select name='sous_domaine' id='sousdomaine_idsousdomaine' class="form-control">
                      <optgroup id='sousdomaine-fr' label="Sous-domaine">
                      </optgroup>
                    </select>   
                    </br> 
                    <div class="form-group">                     
                        <input type="text" name='equivalent' id='equivalent' placeholder="Equivalent" class="form-control">
                    </div> 
                    <div class="form-group">
                      <textarea type="text" name='definition' id='definition' placeholder="Definition" class="form-control"></textarea>
                    </div>                      
                    <div class="form-group">
                      <textarea type="text" name='auteur_source_def' id='auteur_source_def' placeholder="Auteur source def" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='titre_source_def' id='titre_source_def' placeholder="Titre source def" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                
                        <textarea type="text" name='support_source_def' id='support_source_def' placeholder="Support source def" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='lien_source_def' id='lien_source_def' placeholder="Lien source def" class="form-control"></textarea>
                    </div>    
                    <div class="form-group">                     
                        <textarea type="text" name='contexte' id='contexte' placeholder="Contexte" class="form-control"></textarea>
                    </div> 
                    <div class="form-group">
                      <textarea type="text" name='auteur_source_contexte' id='auteur_source_contexte' placeholder="Auteur source contexte" class="form-control"></textarea>
                    </div>                      
                    <div class="form-group">
                      <textarea type="text" name='titre_source_contexte' id='titre_source_contexte' placeholder="Titre source contexte" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='support_source_contexte' id='support_source_contexte' placeholder="Support source def" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                
                        <textarea type="text" name='lien_source_contexte' id='lien_source_contexte' placeholder="Lien source contexte" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='note_technique' id='note_technique' placeholder="Note technique" class="form-control"></textarea>
                    </div>  

                    <div class="form-group">
                      <textarea type="text" name='auteur_source_note_technique' id='auteur_source_note_technique' placeholder="Auteur source note technique" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='titre_source_note_technique' id='titre_source_note_technique' placeholder="Titre source note technique" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                
                        <textarea type="text" name='support_source_note_technique' id='support_source_note_technique' placeholder="Support source note technique" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='lien_source_note_technique' id='lien_source_note_technique' placeholder="Lien source note technique" class="form-control"></textarea>
                    </div>    
                    <div class="form-group">                     
                        <textarea type="text" name='note_linguistique' id='note_linguistique' placeholder="Note linguistique" class="form-control"></textarea>
                    </div> 
                    <div class="form-group">
                      <textarea type="text" name='collocation_avec_un_nom' id='collocation_avec_un_nom' placeholder="Collocation avec un nom" class="form-control"></textarea>
                    </div>                      
                    <div class="form-group">
                      <textarea type="text" name='collocation_avec_un_verbe' id='collocation_avec_un_verbe' placeholder="Collocation avec un verbe" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='collocation_avec_un_adjectif' id='collocation_avec_un_adjectif' placeholder="Collocation avec un adjectif" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='variantes' id='variantes' placeholder="Variantes" class="form-control"></textarea>
                    </div>  

                    <div class="form-group">                
                        <textarea type="text" name='familles_derivationnelles' id='familles_derivationnelles' placeholder="Famille derivationnelles" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='concurrents' id='concurrents' placeholder="Concurrents" class="form-control"></textarea>
                    </div>  
                    <div class="form-group">                
                        <textarea type="text" name='hyperonyme' id='hyperonyme' placeholder="Hyperonyme" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='hyponyme' id='hyponyme' placeholder="Hyponyme" class="form-control"></textarea>
                    </div>  
                    <div class="form-group">                
                        <textarea type="text" name='meronyme_parties' id='meronyme_parties' placeholder="Meronyme (parties)" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='holonyme_tout' id='holonyme_tout' placeholder="Holonyme (tout)" class="form-control"></textarea>
                    </div>                      

                    <div class='text-right'><input name='buttonfr' value='Soumettre la fiche' onclick='return ficheverif()' type='submit' class='btn btn-success'></input>    
                    </div> 
                    </form>        
                  </div>    
                <div id='fichefr' class='col-md-6'>
                  <h1 style="margin-bottom:40px"  class='text-center'>Fiche anglaise</h1>
                     <form method='POST' action='ajouter_fiche'>
                    <div class="form-group">                     
                        <input type="text" name='term' id='term' placeholder="Term" class="form-control">
                    </div>                     
                    <select name='part_of_speech' id='part_of_speech' class="form-control">
                      <optgroup label="Part of speech">
                        <option value="n.">n.</option>
                        <option value="adj.">adj</option>
                        <option value="v.">v.</option>
                        <option value="p.">p.</option>
                      </optgroup>
                    </select>   </br>           
                    <select name='genre' id='genre' class="form-control">
                      <optgroup label="Gender">
                        <option value="m.">m.</option>
                        <option value="f.">f.</option>
                      </optgroup>
                    </select>   </br>    
                    <select onchange='getSousDomaine("en")' name='domaineen' id='domaine_iddomaineen' class="form-control">
                      <optgroup id='domaine-search-en' label="Domaine">
                      </optgroup>
                    </select>   
                    </br> 
                    <select name='sous_domaineen' id='sousdomaine_idsousdomaineen' class="form-control">
                      <optgroup id='sousdomaine-en' label="Sous-domaine">
                      </optgroup>
                    </select>   
                    </br> 
                    <div class="form-group">                     
                        <input type="text" name='translation' id='translation' placeholder="Translation" class="form-control">
                    </div> 
                    <div class="form-group">
                      <textarea type="text" name='definition' id='definition' placeholder="Definition" class="form-control"></textarea>
                    </div>                      
                    <div class="form-group">
                      <textarea type="text" name='author_source_def' id='author_source_def' placeholder="Author source def" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='title_source_def' id='title_source_def' placeholder="Title source def" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                
                        <textarea type="text" name='material_source_def' id='material_source_def' placeholder="Material source def" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='link_source_def' id='link_source_def' placeholder="Link source def" class="form-control"></textarea>
                    </div>    
                    <div class="form-group">                     
                        <textarea type="text" name='context' id='context' placeholder="Context" class="form-control"></textarea>
                    </div> 
                    <div class="form-group">
                      <textarea type="text" name='author_source_context' id='author_source_context' placeholder="Author source contexte" class="form-control"></textarea>
                    </div>                      
                    <div class="form-group">
                      <textarea type="text" name='title_source_context' id='title_source_context' placeholder="Title source contexte" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='material_source_context' id='material_source_context' placeholder="Material source def" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                
                        <textarea type="text" name='link_source_context' id='link_source_context' placeholder="Link source contexte" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='technical_note' id='technical_note' placeholder="Technical note" class="form-control"></textarea>
                    </div>  

                    <div class="form-group">
                      <textarea type="text" name='author_source_technical_note' id='author_source_technical_note' placeholder="Author source technical note" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='title_source_technical_note' id='title_source_technical_note' placeholder="Title source technical note" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                
                        <textarea type="text" name='material_source_technical_note' id='material_source_note_technique' placeholder="Material source technical note" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                
                        <textarea type="text" name='link_source_technical_note' id='link_source_note_technique' placeholder="Link source technical note" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">                     
                        <textarea type="text" name='linguistic_note' id='linguistic_note' placeholder="Technical note" class="form-control"></textarea>
                    </div> 
                    <div class="form-group">
                      <textarea type="text" name='Noun_collocation' id='Noun_collocation' placeholder="Noun collocation" class="form-control"></textarea>
                    </div>                      
                    <div class="form-group">
                      <textarea type="text" name='Verb_collocation' id='Verb_collocation' placeholder="Verb collocation" class="form-control"></textarea>
                    </div>   
                    <div class="form-group">
                      <textarea type="text" name='Adjective_collocation' id='Adjective_collocation' placeholder="Adjective_collocation" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='alternatives' id='alternatives' placeholder="Alternatives" class="form-control"></textarea>
                    </div>  

                    <div class="form-group">                
                        <textarea type="text" name='derivational_terms' id='derivational_terms' placeholder="Derivational terms derivationnelles" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='competing_terms' id='competing_terms' placeholder="Competing terms" class="form-control"></textarea>
                    </div>  
                    <div class="form-group">                
                        <textarea type="text" name='hyperonym' id='hyperonym' placeholder="Hyperonym" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='hyponym' id='hyponym' placeholder="Hyponym" class="form-control"></textarea>
                    </div>  
                    <div class="form-group">                
                        <textarea type="text" name='meronym_parties' id='meronym_parties' placeholder="Meronym (parties)" class="form-control"></textarea>
                    </div>                 
                    <div class="form-group">
                      <textarea type="text" name='holonym_whole' id='holonym_whole' placeholder="Holonym (wholde)" class="form-control"></textarea>
                    </div>                      

                    <div class='text-right'><input name='buttonen' value='Submit fich' type='submit' class='btn btn-success'></input>    
                    </div> 
                    </form>        
                  </div>                   
              </div>


          </div>


<script>
getDomaine('fr');
getDomaine('en');



function getDomaine (lang) {
        $.ajax({
            url : 'ajax_home', // La ressource ciblée
            type : 'POST', // Le type de la requête HTTP.
            dataType : 'json',
            data : 'type=getdomaine&lang='+lang+'',
            success : (function (data) {
              if(lang =='fr') {
                $("#domaine-search-fr").empty();
              }
              else if (lang == 'en') {
                $("#domaine-search-en").empty();
              }
              $.each(data, function(item,value) {
                console.log(value);
                if(lang == 'fr') {
                  var newval = (value.titrefrancais).replace(" ","_");
                  $("#domaine-search-fr").append('<option value='+newval+'>'+value.titrefrancais+'</option>');
                  if (item == 0) {
                    getSousDomaine("fr");
                  }
                  console.log(value.titrefrancais);
                }
                else if (lang=='en') {
                  var newval = (value.titreanglais).replace(" ","_");
                  $("#domaine-search-en").append('<option value='+newval+'>'+value.titreanglais+'</option>');
                  if (item == 0) {
                    getSousDomaine("en");
                  }
                }
              })
              console.log(data);
            })
          })
}

function getSousDomaine (lang) {

  if (lang == 'fr') {
    var domaine = ($("#domaine_iddomaine").val()).replace("_"," ");
  }
  else if (lang == 'en') {
    var domaine = ($("#domaine_iddomaineen").val()).replace("_"," ");
  }
        $.ajax({
            url : 'ajax_home', // La ressource ciblée
            type : 'POST', // Le type de la requête HTTP.
            dataType : 'json',
            async : false, 
            data : 'type=getsousdomaine&lang='+lang+'&domaine='+domaine+'',
            success : (function (data) {
              if (lang == 'fr') {
                $("#sousdomaine-fr").empty();
              }
              else if (lang == 'en') {
                $("#sousdomaine-en").empty();
              }              
              $.each(data, function(item,value) {
                if(value[0]!==null) {
                  console.log(value);
                  if(lang == 'fr') {
                    var newval = (value.titrefrancais).replace(" ","_");
                    $("#sousdomaine-fr").append('<option value='+newval+'>'+value.titrefrancais+'</option>');
                    console.log(value.titrefrancais);
                  }
                  else if (lang=='en') {
                    var newval = (value.titreanglais).replace(" ","_");
                    $("#sousdomaine-en").append('<option value='+newval+'>'+value.titreanglais+'</option>');
                  }
                }
              })
              console.log(data);
            })
          })
}

</script>

<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
