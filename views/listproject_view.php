<?php
//include_once 'controllers/listproject_controller.php';
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'phperlimpinpin';

$dsn = 'mysql:host='. $host .';dbname='. $dbname;

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$stmt = $pdo->query('SELECT * FROM projet JOIN client on client.id = projet.idClient WHERE client.id = 1');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['descriptionProjet'].'<br>';
}

//$sql = "SELECT * FROM client WHERE id = $_GET['id']";


?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php include_once 'views/includes/head.php' ?>
<?php include_once 'views/includes/header.php' ?>

<h1>LIST</h1>
 <?php echo $_GET['id']; ?>



<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

