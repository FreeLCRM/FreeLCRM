<?php
session_start();  //Démarre une nouvelle session ou reprend une session existante
require_once "_functions/connect.php";
require_once "_functions/inscription.php";

if (isset($_POST['pass']) && isset($_POST['confirm_pass']) && isset($_POST['mail'])) {
    //on initialise la class
    $inscription = new Inscription($_POST['pass'], $_POST['confirm_pass'], $_POST['mail']);
    $verif       = $inscription->verif();

    if($verif == true) {
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
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
<header>
    <h1>Inscription</h1>
</header>

<main>
    <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
    <form action="" method="post">
        <table>
            <tr>
                <td>Mail</td>
                <td><input type="email" placeholder="E-mail" name="mail" class="input_text" required></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" placeholder="Mot de passe" name="pass" class="input_text" required></td>
            </tr>
            <tr>
                <td>Confirmation du mot de passe</td>
                <td><input type="password" placeholder="Confirmation du mot de passe" name="confirm_pass" class="input_text" required></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit"  name="inscription_bouton" class="input_text submit" value="Inscription"></td>
            </tr>
        </table>
        <span><a href="connexion.php">J'ai déjà un compte</a></span>

    </form>

</main>
</body>
</html>