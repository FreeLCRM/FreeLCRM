<!DOCTYPE html>
<html lang="fr">
<body>
<?php include_once 'views/includes/head.php' ?>
<?php include_once 'views/includes/header.php' ?>

<div id="connexion-section">
    <div class="title">
        <h1>.freelcrm</h1>
    </div>
    <div class="connexion-block" >
        <div class="input-connexion" id="js-hide">
            <h1>Connexion</h1>
            <form action="#">

                <label class="label-css-input" for="fname">Mail</label>
                <input class="input-css-text" type="text" name="fname" placeholder="exemple@gmail.com"><br>

                <label class="label-css-input" for="lname">Mot de passe</label>
                <input class="input-css-text" type="password" name="lname"><br>

                <a class="input-css-text-link" href="#">Mot de passe oublié ?</a>
                <button class="btn-css-input" type="submit">Connexion</button>
            </form>

            <div class="bottom-form">
                <a href="#" onclick="myFunction()" >Nouveau ? Inscrivez-vous !</a>
            </div>
        </div>

        <div class="input-connexion" id="js-show" style="display: none">
            <h1>Inscription</h1>
            <form action="#">
                <label class="label-css-input" for="fname">Mail</label>
                <input class="input-css-text" type="text" name="fname" placeholder="exemple@gmail.com"><br>

                <label class="label-css-input" for="lname">Mot de passe</label>
                <input class="input-css-text" type="password" name="lname"><br>

                <label class="label-css-input" for="lname">Confirmer mot de passe</label>
                <input class="input-css-text" type="password" name="lname"><br>

                <button class="btn-css-input-signup" type="submit">Inscription</button>
            </form>

            <div class="bottom-form">
                <a href="#" onclick="Show()" >Déjà membre ? Connectez-vous !</a>
            </div>
        </div>
    </div>
</div>


<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

