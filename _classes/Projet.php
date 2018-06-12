<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 13/06/2018
 * Time: 00:34
 */

class Projet
{
    public $id;
    public $description;
    public $deadline;
    public $price;
    public $priceHour;
    public $nbHours;
    public $dateStart;
    public $dateEnd;
    public $state;
    public $idClient;

    private $bdd;

    function __construct($id)
    {
        $this->bdd = Bdd::getPdo();

        $reqProjet = $this->bdd->prepare('SELECT a.*, au.mail, au.firstname FROM projet a INNER  JOIN client au ON au.id = a.client_id WHERE a.id = ?');
        $reqProjet->execute([$id]);
        $data = $reqProjet->fetch();

        $this->id = $id;
        $this->description = $data['description'];
        $this->deadline = $data['deadline'];
        $this->price = $data['price'];
        $this->priceHour = $data['priceHour'];
        $this->nbHours = $data['nbHours'];
        $this->dateStart = $data['dateStart'];
        $this->dateEnd = $data['dateEnd'];
        $this->state = $data['state'];
        //$this->idClient = $data['idClient'];
    }

    /**
     * envoie de tt les projets
     * @return array
     */
    public function getAllProjet(){
        $this->bdd = Bdd::getPdo();

        $reqProjet = $this->bdd->prepare('SELECT a.*, au.mail, au.firstname FROM projet a INNER  JOIN client au ON au.id = a.client_id ');
        $reqProjet->execute([]);
        $data = $reqProjet->fetchALl();
    }
}