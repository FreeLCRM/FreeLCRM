<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 13/06/2018
 * Time: 00:34
 */

class Projet
{
    private $id;
    private $descriptionProjet;
    private $deadline;
    private $price;
    private $priceHour;
    private $nbHours;
    private $dateStart;
    private $dateEnd;
    private $state;
    private $idClient;

    private $bdd;

    function __construct($id)
    {
        $this->bdd = Bdd::getPdo();

        $reqProjet = $this->bdd->prepare('SELECT * FROM projet JOIN client on client.id = projet.idClient WHERE client.id = ?');
        $reqProjet->execute([$id]);
        $data = $reqProjet->fetch();

        $this->id = $id;
        $this->descriptionProjet = $data['descriptionProjet'];
        $this->deadline = $data['deadline'];
        $this->price = $data['price'];
        $this->priceHour = $data['priceHour'];
        $this->nbHours = $data['nbHours'];
        $this->dateStart = $data['dateStart'];
        $this->dateEnd = $data['dateEnd'];
        $this->state = $data['state'];
        $this->idClient = $data['idClient'];
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