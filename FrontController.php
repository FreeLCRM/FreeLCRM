<?php

class FrontController
{
    public static function appStart()
    {
        var_dump("okk");
        $output = '';
            $action = $_GET['a'] ?? $_POST['a'] ?? '';
            // on simplifie les routes en supprimant les leading et trailing /
            $action = ltrim(rtrim($action, "/"), "/");
            switch ($action) {
                case 'home':
                    $controller = new homeController();
                    $output = $controller->home();
                    break;
                default:
                    header("Location: ./?a=404");
                    exit;
            }


//        header('Content-Type: application/json');
        echo $output;
    }
}