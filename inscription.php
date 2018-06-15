<?php
session_start();  //Démarre une nouvelle session ou reprend une session existante
require_once "_functions/connect.php";
require_once "_functions/inscription.php";

if (isset($_POST['pseudo']) && isset($_POST['pass']) && isset($_POST['confirme_pass']) && isset($_POST['email'])) {
    //on initialise la class
    $inscription = new Inscription($_POST['pseudo'], $_POST['pass'], $_POST['confirme_pass'], $_POST['email']);
    $verif       = $inscription->verif();

    if($verif == "Votre compte viens d être créé") {
        if($inscription->enregistrement()) {

            if($inscription->session()) {
                header("Location: index.php");
                die();
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>inscription</title>
</head>
<body>
<?php include_once 'views/includes/head.php' ?>
<?php /*include_once 'views/includes/header.php' */?>

<div id="connexion-section">
    <div class="title">
        <h1>.freelcrm</h1>
    </div>
    <div class="connexion-block" style="height: 580px;">
        <div class="input-inscription">
            <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
            <form action="" method="post" class="form-grid">
                <h1>Inscription</h1>
                <label class="label-css-input" for="pseudo">Pseudo</label>
                <input class="input-css-text" type="text" name="pseudo" placeholder="Pseudo"><br>

                <label class="label-css-input" for="email">E-Mail*</label>
                <input class="input-css-text" type="email" name="email" placeholder="exemple@mail.com"><br>

                <label class="label-css-input" for="pass">Mot de passe*</label>
                <input class="input-css-text" type="password" name="pass"><br>

                <label class="label-css-input" for="confirme_pass">Confirmer mot de passe*</label>
                <input class="input-css-text" type="password" name="confirme_pass"><br>

                <input class="checkbox-custom" id="checkbox-custom" type="checkbox" value="">
                <label for="checkbox-custom">J’accepte les conditions générales</label>

                <button class="btn-css-input-signup" type="submit">Inscription</button>
            </form>

            <div class="bottom-form-inscription">
                <a href="connexion.php">Déjà membre ? Connectez-vous !</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>