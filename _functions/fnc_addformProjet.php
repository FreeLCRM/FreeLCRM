<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 14/06/2018
 * Time: 01:11
 */

$host = 'localhost:33';
$user = 'root';
$password = 'root';
$dbname = 'phperlimpinpin';

$dsn = 'mysql:host='. $host .';dbname='. $dbname .';charset=utf8';

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$idClient = intval ($_GET['id']);
$descriptionProjet = $_POST['descriptionProjet'];
$deadline = $_POST['deadline'];
$price = $_POST['price'];
$priceHour = $_POST['priceHour'];
$nbHours = $_POST['nbHours'];
$dateStart = $_POST['dateStart'];
$dateEnd = $_POST['dateEnd'];
$state = $_POST['state'];

$stmt = $pdo->prepare('INSERT INTO projet(	idClient,
                                                        descriptionProjet,
                                                        deadline,
                                                        price,
                                                        priceHour,
                                                        nbHours,
                                                        dateStart,
                                                        dateEnd,
                                                        state) VALUE (
                                                        :idClient, 
                                                        :descriptionProjet, 
                                                        :deadline, 
                                                        :price,
                                                        :priceHour,
                                                        :nbHours,
                                                        :dateStart,
                                                        :dateEnd,
                                                        :state)');


$stmt->execute(['idClient' => $idClient,
    'descriptionProjet' => $descriptionProjet,
    'deadline' => $deadline,
    'price' => $price,
    'priceHour' => $priceHour,
    'nbHours' => $nbHours,
    'dateStart' => $dateStart,
    'dateEnd' => $dateEnd,
    'state' => $state ]);

$currentPage =  'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//var_dump($currentPage);
header('Location: ../index.php');