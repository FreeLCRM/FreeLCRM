<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 13/06/2018
 * Time: 00:34
 */

class Client
{

    /**
     * envoie de tt les clients
     * @return array
     */
    static function getAllClients(){
        $stmt = Bdd::getPdo();

         $reqClients = $stmt->prepare('SELECT  id, idUser, mail, firstname, lastname, img, mobile, company, descriptionClient, note FROM client');
         $reqClients->execute([]);
        return $reqClients->fetchAll();
    }
}