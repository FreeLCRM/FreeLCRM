<?php
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php include_once 'views/includes/head.php' ?>
<?php include_once 'views/includes/header.php' ?>
    <h1>Home</h1>
    <img src="assets/images/image.jpg" alt="">
    <div>
        <?php
        foreach ($allClient as $index => $client): ?>
        <div>
            <a href=<?= "/listproject?id=".$client['id'] ?>><?=  $client['firstname'].' '.$client['lastname'] ?></a>
            <p><?= $client['mail'] ?></p>
            <p><?= $client['mobile'] ?></p>
            <img src="<?= $client['img'] ?>" alt="">
            <p><?= $client['company'] ?></p>
            <p><?= $client['descriptionClient'] ?></p>
            <p><?= $client['note'] ?></p>
        </div>
        <?php endforeach; ?>
    </div><br>


<?php include_once 'views/includes/addformClient.php' ?>
<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

