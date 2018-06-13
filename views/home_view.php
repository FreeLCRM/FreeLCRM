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

                <label class="label-css-input" for="mail">E-mail</label>
                <input class="input-css-text" type="text" name="mail" placeholder="exemple@mail.com"><br>

                <label class="label-css-input" for="password">Mot de passe</label>
                <input class="input-css-text" type="password" name="password"><br>

                <a class="input-css-text-link" href="#">Mot de passe oublié ?</a>
                <button class="btn-css-input" type="submit">Connexion</button>
            </form>

            <div class="bottom-form">
                <a href="#" onclick="MemberSignUp()" >Nouveau ? Inscrivez-vous !</a>
            </div>
        </div>

        <div class="input-inscription" id="js-show" style="display: none">
            <h1>Inscription</h1>
            <form action="#" class="form-grid">
                <label class="label-css-input" for="mail">E-Mail*</label>
                <input class="input-css-text" type="text" name="mail" placeholder="exemple@mail.com"><br>

                <label class="label-css-input" for="password-inscription">Mot de passe*</label>
                <input class="input-css-text" type="password" name="password-inscription"><br>

                <label class="label-css-input" for="password-inscription-confirmer">Confirmer mot de passe*</label>
                <input class="input-css-text" type="password" name="password-inscription-confirmer"><br>

                <input class="checkbox-custom" id="checkbox-custom" type="checkbox" value="">
                <label for="checkbox-custom">J’accepte les conditions générales</label>

                <button class="btn-css-input-signup" type="submit">Inscription</button>
            </form>

            <div class="bottom-form-inscription">
                <a href="#" onclick="MemberConnect()" >Déjà membre ? Connectez-vous !</a>
            </div>
        </div>
    </div>
</div>


<?php include_once 'views/includes/footer.php' ?>
</body>
</html>

