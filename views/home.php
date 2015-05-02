<?php ob_start();?>


        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <div class="container">
            <div class='row'>
              <div class='col-md-2'>
              </div>
              <div style='padding-left:0' class='col-md-8'>
                <h1 class='search-title'>Recherche de fiches terminologiques</h1>
              </div>
              <div class='col-md-2'>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
              </div>
              <div id='search-container' class='col-md-8'>
                <form method='POST' action='recherche'>
                <div style='padding:1px' class="col-md-3">
                  <select name='type' id='searchCriteria' onchange='checkSearchValue()' class="form-control">
                    <optgroup label="Rechercher dans">
                      <option value="terme">Terme</option>
                      <option value="domaine">Domaine</option>
                    </optgroup>
                  </select>           
                </div>
                <div style='padding:1px' class="col-md-2">
                  <select name='langue'  onchange='ajaxDomaine()' id='langue' class="form-control">
                    <optgroup label="Langue">
                      <option value="fr">Français</option>
                      <option value="en">Anglais</option>
                    </optgroup>
                  </select>           
                </div>                                
                <div style='padding:1px' class="col-md-4">
                  <div id='term-search' class="form-group">
                    <input type="text" name='terme' id='termsearch' placeholder="Entrer un terme" class="form-control">
                  </div> 
                  <select style='display:none' name='domaine' id='domaine-search' class="form-control">
                    <optgroup id='domaines' label="Domaines">
                    </optgroup>
                  </select>                                
                </div>   
                <div class="col-md-3">
                  <button class="btn btn-primary" onclick='return verification();' role="button">Rechercher &raquo;</button>       
                </div>   
              </form>  
              </div>      
              <div class="col-md-2">
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <h2>Le concept</h2>
                    Lingu@IT est un dictionnnaire multilingue qui, outre la définition du mot recherché, fournit de nombreuses informations terminologiques.
                    Celles ci sont nécessaires à la bonne utilisation de ce terme et à la compréhension globale du domaine auquel il appartient. 
                    Si par hasard, le terme que vous recherchez n'est pas répertorié, vous pouvez proposer un ajout et ainsi contribuer à l'enrichissement de cette base. 
                    Vous pouvez également proposer des modifications sur les fiches déjà existantes qui seront examinées par les terminologues du site.
              <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
            </div>
            <div class="col-md-4">
              <h2>La communauté</h2>
              <p>Rejoignez la communauté en vous inscrivant sur le site. Ceci vous permettra de proposer/éditer des fiches terminologiques. </p>
              <p><a class="btn btn-primary" href="inscription" role="button">S'inscrire &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Devenir terminologue</h2>
              <p>Pour devenir terminologue envoyer un mail à l'adresse : contact@unit.fr en joignant les justificatifs de votre expertise.Votre demande sera traitée par l'administrateur. Ce statut vous permet de modérer l'ensemble des fiches du site.</p>
              <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
            </div>
          </div>

          <hr>


<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
