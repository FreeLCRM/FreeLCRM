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
            <a href=<?= "/listproject?id=".$client['id'] ?>><?=  $client['firstname'].' '.$client['lastname'] ?></a>
        <?php endforeach; ?>
    </div><br>

<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

