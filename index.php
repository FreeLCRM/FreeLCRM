<?php

session_start();

//require_once "_functions/connect.php";

//var_dump ($db);

//definition of the current page



echo '<a href="deconnexion.php">deco</a>';

$output = '';
$action = $_GET['a'] ?? $_POST['a'] ?? '';
// on simplifie les routes en supprimant les leading et trailing /
$action = ltrim(rtrim($action, "/"), "/");
switch ($action) {
    case 'home':
        require_once 'controllers/home_controller.php';
        $output = home();
        break;
    default:
        header("Location: ./?a=404");
        exit;
}


//        header('Content-Type: application/json');
echo $output;


