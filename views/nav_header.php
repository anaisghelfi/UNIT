        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="home">UNIT</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <?php
                    if(empty($_SESSION['userid'])){
              ?> 
              <form method='POST' action='home' class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" name='mail' id='mail' placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                  <input id='password' name='password' type="password" placeholder="Password" class="form-control">
                </div>
                <button onclick='verifconnexion()' type="submit" class="btn btn-success">Se connecter</button>
              </form>
              <?php } ?>

              <?php
                    if(!empty($_SESSION['userid'])){
              ?> 

              <ul class="nav navbar-nav">

              <?php if(($_SESSION['type']) == '2' || ($_SESSION['type']) == '3') {?>

              
                <li class="dropdown">
                  <a class="dropdown-toggle" style='color: #fff' data-toggle="dropdown" role="button" aria-expanded="false">Modifications<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    <li><a style="word-wrap: break-word; white-space: normal;" href="modifications">Modifications en attente</a></li>
                    <li><a style="word-wrap: break-word; white-space: normal;"  href="historique_modifications">Toutes les modifications</a></li>
                  </ul>

                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" style='color: #fff' data-toggle="dropdown" role="button" aria-expanded="false">Utilisateurs<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    <li><a style="word-wrap: break-word; white-space: normal;" href="utilisateurs">Tous les utilisateurs</a></li>
                  </ul>
                                  
                </li>              
              

              <?php } ?>

                <li class="dropdown">
                  <a class="dropdown-toggle" style='color: #fff' data-toggle="dropdown" role="button" aria-expanded="false">Fiche<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    <li><a style="word-wrap: break-word; white-space: normal;" href="ajouter_fiche">Ajouter une fiche</a></li>
      
                  <?php if(($_SESSION['type']) == '2' || ($_SESSION['type']) == '3') { ?>
                    <li><a style="word-wrap: break-word; white-space: normal;" href="fiche_attente">Fiche en attente</a></li>
                    <li><a style="word-wrap: break-word; white-space: normal;" href="toutes_les_fiches">Toutes les fiches</a></li>
                  <?php } ?> 
                  </ul>              
                </li> 
            </ul>
              <div class='navbar-form navbar-right'><button class='btn btn-danger'><a style='color:white; text-decoration:none' href='deconnexion'>Déconnexion</a></button></div>
              <?php 
                }
              ?>

            </div><!--/.navbar-collapse -->
          </div>
        </nav>

<?php
  if(!empty($_SESSION['flash'])){
 ?>
<?php 
  $flash = $_SESSION['flash']['message'];
  $message = $_SESSION['flash']['type'];
  unset($_SESSION['flash']);
?>

<div role="alert" id='alert' class="alert alert-<?php echo $message;?>">
<a class='close'>x</a><?php echo $flash;}?></div>
        