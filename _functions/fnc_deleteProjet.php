<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 14/06/2018
 * Time: 02:51
 */

$host = 'localhost:33';
$user = 'root';
$password = 'root';
$dbname = 'teletubbies';

$dsn = 'mysql:host='. $host .';dbname='. $dbname .';charset=utf8';

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$idP = $_GET['id'];

$stmt = $pdo->prepare('DELETE FROM projet WHERE idP = :idP');
$stmt->execute(['idP' => $idP]);

$currentPage =  'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//var_dump($currentPage);
header('Location: ' . $_SERVER['HTTP_REFERER']);