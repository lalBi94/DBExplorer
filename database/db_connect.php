<?php
    require("config.php");
    //Database information
    $host = $hostname; //Link of your database
    $useDB = $database; //Name of your database
    $user = $db_user; //Username of your database account
    $password = $db_password; //Password of your database account
    try{
        $db = new PDO("mysql:host=$host;dbname=$useDB", $user, $password); //the link
        $connect = true;
        $db->exec("SET NAMES utf8");
    } catch(PDOexception $e){
        $connect = false;
        die("<p style='color: red;'>Erreur de liaison a votre bdd <span style='text-transform: uppercase; font-weight: bold;'>".$e->getMessage()."</span></p>");
    }
?>