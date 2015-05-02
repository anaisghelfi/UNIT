<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-language" content="fr" />
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<title>UNIT</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JQUERY -->
    <script src="static/js/jquery-1.11.1.js" /></script>
    <!-- JQUERY UI -->
    <link href="static/js/jquery-ui-1.11.2/jquery-ui.css" rel="stylesheet" />
    <script src="static/js/jquery-ui-1.11.2/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <link href="static/css/bootstrap.css" rel="stylesheet" />
    <script src="static/js/bootstrap.min.js" /></script> 
    <!-- UNIT STYLE -->
    <link href="static/css/unit.css" rel="stylesheet" />
    <!-- KAUSHAN FONT -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!-- SCRIPT UNIT -->
    <script src="static/js/unit.js" defer></script>
    <head>
      <body>


      <?php 
        require('controllers/nav_header.php');
      ?>
      <div id="wrap">
      <?php
        echo $content_for_layout;
      ?>
      </div>
      <?php
        require('views/footer.php');
      ?>

      </div> <!-- /container -->


      </body>
      </html>