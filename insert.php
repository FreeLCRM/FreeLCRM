<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 13/06/2018
 * Time: 23:19
 */

/*try{
        $pdo = new PDO("mysql:host=localhost:33;dbname=teletubbies", "root", "root");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("ERROR: Could not connect. " . $e->getMessage());
    }

    // Attempt insert query execution
    try{
        // create prepared statement
        $sql = "INSERT INTO projet (descriptionProjet, price, priceHour ) VALUES (:descriptionProjet, :price, :priceHour)";
        $stmt = $pdo->prepare($sql);

        // bind parameters to statement
        $stmt->bindParam(':projetDescription', $_REQUEST['descriptionProjet']);
        $stmt->bindParam(':price', $_REQUEST['price']);
        $stmt->bindParam(':priceHour', $_REQUEST['priceHour']);

        // execute the prepared statement
        $stmt->execute();
        echo "Records inserted successfully.";
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    // Close connection
    unset($pdo);*/

/*$host = 'localhost:33';
$user = 'root';
$password = 'root';
$dbname = 'teletubbies';

$dsn = 'mysql:host='. $host .';dbname='. $dbname .';charset=utf8';

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$value1 = "test de push";
$value2 = 32;
$value3 = 2;

$stmt = $pdo->prepare('INSERT INTO projet(descriptionProjet,price,priceHour) VALUE (:descriptionProjet, :price, :priceHour)');

$stmt->bindParam(':projetDescription', $_REQUEST['descriptionProjet']);
$stmt->bindParam(':price', $_REQUEST['price']);
$stmt->bindParam(':priceHour', $_REQUEST['priceHour']);

$stmt->execute();*/

//var_dump($tests);

?>