
<?php ob_start();?>



        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <div class='col-md-12'>
                <div class='col-md-3'>
                </div>
                <div class='col-md-6'>
                  <h1 style="margin-bottom:40px"  class='text-center'>Inscription</h1>
                    <form method='POST' action='inscription'>
                    <select name='type' id='type' class="form-control">
                      <optgroup label="Vous êtes">
                        <option value="etudiant">Etudiant</option>
                        <option value="professeur">Professeur</option>
                      </optgroup>
                    </select>   </br>                   
                    <div class="form-group">
                        <label class="sr-only" id='emailLabel' for="nom">Renseignez votre email</label>
                        <label class="sr-only" id='emailExist' for="nom">Cet email est déjà utilisé</label>                      
                        <input type="text" name='email' id='email' placeholder="Renseignez votre email" class="form-control">
                    </div> 
                    <div class="form-group">
                      <input type="text" name='nom' id='nom' placeholder="Nom" class="form-control">
                    </div>                      
                    <div class="form-group">
                      <input type="text" name='prenom' id='prenom' placeholder="Prénom" class="form-control">
                    </div>   
                    <div class="form-group">
                      <input type="text" name='universite' id='universite' placeholder="Université/école" class="form-control">
                    </div>   
                    <div class="form-group">
                        <label class="sr-only" id="mdpLabel" for="mdp">Renseignez un mot de passe</label>
                        <label class="sr-only" id="mdpShort" for="mdp">Le mot de passe doit faire 5 caractères au minimum</label>                      
                        <input type="password" name='mdp' id='mdp' placeholder="Entrer un mot de passe" class="form-control">
                    </div>                 
                    <div class="form-group">
                        <label class="sr-only" id='secondPasswordLabel' for="password">Les mots de passes doivent être identiques</label>
                      <input type="password" name='mdpconfirm' id='mdpconfirm' placeholder="Confirmez votre mot de passe" class="form-control">
                    </div>    
                    <div class='text-right'><button onclick='return verifinscription()' type='submit' class='btn btn-success'>S'inscrire</button>    
                    </div> 
                    </form>           
                  </div>              
                    <div class='col-md-3'>
                </div>             
              </div>


          </div>



<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
