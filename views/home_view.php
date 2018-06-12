<!DOCTYPE html>
<html lang="fr">
<body>
<?php include_once 'views/includes/head.php' ?>
<?php include_once 'views/includes/header.php' ?>

<div id="connexion-section">
    <div class="title">
        <h1>.freelcrm</h1>
    </div>
    <div class="connexion-block">
        <div class="input-connexion">
            <form action="#">

                <label for="fname">Mail</label><br>
                <input class="input-" type="text" name="fname" placeholder="john@gmail.com"><br>

                <label for="lname">Mot de passe</label><br>
                <input type="password" name="lname"><br>

                <button type="submit">Connexion</button>
            </form>
        </div>
    </div>
</div>


<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

