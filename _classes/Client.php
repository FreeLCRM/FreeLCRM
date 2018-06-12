<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 13/06/2018
 * Time: 00:34
 */

class Client
{
    public $id;
    public $mail;
    public $firstname;
    public $lastname;
    public $company;
    public $img;

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
    }

    /**
     * envoie de tt les clients
     * @return array
     */
    public function getAllClients(){
         $this->bdd = Bdd::getPdo();

         $reqClients = $this->bdd->prepare('SELECT * FROM client');
         $reqClients->execute([]);
        return $reqClients->fetchAll();
    }
}