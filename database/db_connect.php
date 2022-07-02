<?php
    //Database information
    $host = "localhost"; //Link of your database
    $useDB = "hardsys"; //Name of your database
    $user = "root"; //Username of your database account
    $password = "root"; //Password of your database account
    try{
        $db = new PDO("mysql:host=$host;dbname=$useDB", $user, $password); //the link
        $connect = true;
        $db->exec("SET NAMES utf8");
    } catch(PDOexception $e){
        $connect = false;
        die("<p style='color: red;'>Erreur de liaison a votre bdd <span style='text-transform: uppercase; font-weight: bold;'>".$e->getMessage()."</span></p>");
    }
?>