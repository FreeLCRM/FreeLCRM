<?php

//session

session_start();
//session active tant que l'utilisateur n'a pas fermé la page
//init_set('session.cookie_lifetime', false);

//error
//a suppr en lors du deployement 
error_reporting(E_ALL);
ini_set('display_errors', true);


//paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'],0,-9));
define("PATH", substr($_SERVER['PHP_SELF'], 0,-9));

// DataBase info

define("DATABASE_HOST", "localhost:33");
define("DATABASE_NAME", "teletubbies");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "root");
