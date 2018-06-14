<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 14/06/2018
 * Time: 03:02
 */
//todo changer tous les nom de la base de donnée et voir si on peut pas faire qu'un seul appel
$host = 'localhost:33';
$user = 'root';
$password = 'root';
$dbname = 'teletubbies';

$dsn = 'mysql:host='. $host .';dbname='. $dbname .';charset=utf8';

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$id = $_GET['id'];

$stmt = $pdo->prepare('DELETE FROM client WHERE id = :id');
$stmt->execute(['id' => $id]);

$currentPage =  'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//var_dump($currentPage);
header('Location: ' . $_SERVER['HTTP_REFERER']);