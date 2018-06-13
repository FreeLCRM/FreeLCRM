<?php

include_once '_classes/Client.php';
include_once '_classes/Projet.php';


function home(){
    var_dump(include 'views/home_view.php');
    $allClient =  Client::getAllClients();
    $allProjet =  Projet::getAllProjet();
    //return include 'views/home_view.php';
}
