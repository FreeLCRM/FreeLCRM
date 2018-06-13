<?php
//include_once 'controllers/listproject_controller.php';
//include_once 'controllers/home_controller.php';

/*$host = 'localhost:33';
$user = 'root';
$password = 'root';
$dbname = 'teletubbies';

$dsn = 'mysql:host='. $host .';dbname='. $dbname .';charset=utf8';

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//TODO se connecter a la bdd via la classe
$id = intval ($_GET['id']);

$stmt = $pdo->prepare('SELECT * FROM projet JOIN client on client.id = projet.idClient WHERE client.id = ?');
$stmt->execute([$id]);
$tests = $stmt->fetchAll();
//var_dump($tests);*/

?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php include_once 'views/includes/head.php' ?>
<?php include_once 'views/includes/header.php' ?>

<h1>LIST</h1>
<?php
    //var_dump($allProjet);
    if (empty($allProjet)){ ?>
        <p>il n'y a pas de projet pour ce client</p>
    <?php }else{
        foreach ($allProjet as $projet): ?>
            <div>
                <p><?= $projet['descriptionProjet'] ?></p>  
                <p><?=  $projet['price'] ?></p>
                <p><?=  $projet['state'] ?></p>
            </div><br>
        <?php endforeach;
     } ?>

<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

