<?php

?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php include_once 'views/includes/head.php' ?>
<?php include_once 'views/includes/header.php' ?>

<h1>LIST</h1>
<?php
    if (empty($allProjet)){ ?>
        <p>il n'y a pas de projet pour ce client</p>
    <?php }else{
        foreach ($allProjet as $projet): ?>
            <div>
                <p><?= $projet['descriptionProjet'] ?></p>
                <p><?= date_format(date_create($projet['deadline']),"d/m/Y") ?></p>
                <p><?=  $projet['price'] ?></p>
                <p><?=  $projet['priceHour'] ?></p>
                <p><?=  $projet['nbHour'] ?></p>
                <p><?=  date_format(date_create($projet['dateStart']),"d/m/Y") ?></p>
                <p><?=  date_format(date_create($projet['dateEnd']),"d/m/Y") ?></p>
                <p><?=  $projet['state'] ?></p>

                <a href=<?= "_functions/fnc_deleteProjet.php?id=".$projet['idP'] ?>>delete</a>
            </div><br>
        <?php endforeach;
     } ?>

<?php include_once 'views/includes/addformProjet.php' ?>
<?php include_once 'views/includes/footer.php' ?>

</body>
</html>

