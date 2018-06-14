<?php

/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 15/05/2017
 * Time: 11:24
 */

class Bdd
{
    private static $pdoconnect = null;

    /**
     * @return Bdd|null|PDO
     */
    public static function getPdo()
    {
        if (is_null(self::$pdoconnect))
        {//todo ajouter projetId
            //todo regler nom bdd
            try
            {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION; // ATTR_ERRMODE = rapport d'erreur
                // ERMMODE_EXCEPTION sa va nous donner les exception
                self::$pdoconnect = new PDO('mysql:dbname=phperlimpinpin;host=localhost:33','root','root', $pdo_options);
                self::$pdoconnect->exec("SET NAMES UTF8");
            }
            catch(PDOException $exception)
            {
                die('Erreur :'.$exception->getMessage());
            }
        }
        return self::$pdoconnect;
    }
}



