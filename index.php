<?php

session_start();

require_once "_functions/connect.php";

//var_dump ($db);

//definition of the current page

if(!isset($_SESSION["pseudo"])) {
    header("Location: connexion.php");
    die();
}

echo '<a href="deconnexion.php">deco</a>';




if (isset($_GET['page']) AND !empty($_GET['page'])){
    $page = trim(strtolower($_GET['page'])); //if HOME uppercase need lo towercase + delete blank space
}else{
    $page = 'home';
}

//include_once '_functions/functions.php';
//include_once '_classes/Client.php';
//include_once '_classes/Projet.php';
//$var = Projet::getAllProjet();

//prettyDump($var);
//exit;


//scandir = scan tt les fichers dans un dossier
$allPages = scandir('controllers/');

if (in_array($page.'_controller.php',$allPages)){
    //incusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
} else {
    echo 'Erreur 404';
}

