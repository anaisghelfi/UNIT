<?php

require("config/database.php");

try {
    $bdd = new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));
} catch (PDOException $e) {
    echo "Erreur ! ";
    die();
}

?>
