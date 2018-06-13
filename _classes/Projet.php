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

        $reqProjet = $this->bdd->prepare('SELECT * FROM projet JOIN client on client.id = projet.idClient WHERE client.id = ?');
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
    static function getAllProjet(){
        $stmt = Bdd::getPdo();

        $reqProjet = $stmt->prepare('SELECT * FROM projet JOIN client on client.id = projet.idClient');
        $reqProjet->execute([]);
        return $reqProjet->fetchALl();
    }
}