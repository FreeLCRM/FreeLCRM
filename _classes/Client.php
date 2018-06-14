<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 13/06/2018
 * Time: 00:34
 */

class Client
{
    private $id;
    private $mail;
    private $firstname;
    private $lastname;
    private $img;
    private $mobile;
    private $company;
    private $descriptionClient;
    private $note;

    private $bdd;

    function __construct($id)
    {
        $this->bdd = Bdd::getPdo();

        $reqClients = $this->bdd->prepare('SELECT * FROM client WHERE id = ?');
        $reqClients->execute([$id]);
        $data = $reqClients->fetch();

        $this->id = $id;
        $this->mail = $data['mail'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->img = $data['img'];
        $this->mobile = $data['mobile'];
        $this->company = $data['company'];
        $this->descriptionClient = $data['descriptionClient'];
        $this->note = $data['note'];
    }

    /**
     * envoie de tt les clients
     * @return array
     */
    static function getAllClients(){
        $stmt = Bdd::getPdo();

         $reqClients = $stmt->prepare('SELECT * FROM client');
         $reqClients->execute([]);
        return $reqClients->fetchAll();
    }
}