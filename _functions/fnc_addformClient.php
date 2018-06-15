<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 14/06/2018
 * Time: 01:37
 */

$host = 'localhost:33';
$user = 'root';
$password = 'root';
$dbname = 'freelcrm_db';

$dsn = 'mysql:host='. $host .';dbname='. $dbname .';charset=utf8';

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$mail = $_POST['mail'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$img = $_POST['img'];
$mobile = $_POST['mobile'];
$company = $_POST['company'];
$descriptionClient = $_POST['descriptionClient'];
$note = $_POST['note'];

$stmt = $pdo->prepare('INSERT INTO client(	mail,
                                                        firstname,
                                                        lastname,
                                                        img,
                                                        mobile,
                                                        company,
                                                        descriptionClient,
                                                        note) VALUE (
                                                        :mail, 
                                                        :firstname, 
                                                        :lastname, 
                                                        :img,
                                                        :mobile,
                                                        :company,
                                                        :descriptionClient,
                                                        :note)');

//var_dump($stmt);

$stmt->execute(['mail' => $mail,
    'firstname' => $firstname,
    'lastname' => $lastname,
    'img' => $img,
    'mobile' => $mobile,
    'company' => $company,
    'descriptionClient' => $descriptionClient,
    'note' => $note]);

$currentPage =  'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//var_dump($currentPage);
header('Location: ../index.php');