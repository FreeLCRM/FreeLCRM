<?php
    $host = 'localhost:33';
    $user = 'root';
    $password = 'root';
    $dbname = 'teletubbies';

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

    //header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "listproject?id=1");
?>

<div>
    <form method="post">
        <p>
            <label for="descriptionProjet">description du projet</label>
            <input type="text" name="descriptionProjet" id="descriptionProjet">
        </p>
        <p>
            <label for="deadline">Deadline</label>
            <input type="date" name="deadline" id="deadline">
        </p>
        <p>
            <label for="price">Prix total</label>
            <input type="number" name="price" id="price">
        </p>
        <p>
            <label for="priceHour">prix de l'heure</label>
            <input type="number" name="priceHour" id="priceHour">
        </p>
        <p>
            <label for="nbHours">Nombres d'heures</label>
            <input type="number" name="nbHours" id="nbHours">
        </p>
        <p>
            <label for="dateStart">Date de départ</label>
            <input type="date" name="dateStart" id="dateStart">
        </p>
        <p>
            <label for="dateEnd">Date de fin</label>
            <input type="date" name="dateEnd" id="dateEnd">
        </p>
        <p>
            <label for="state">état</label>
            <input type="text" name="state" id="state">
            <!--<select name="state" id="state">
                <option>choisir un état d'avencement</option>
                <option value="in_progress">en cours</option>
                <option value="done">fini</option>
            </select>-->
        </p>
        <input type="submit" value="Submit">
    </form>
</div>