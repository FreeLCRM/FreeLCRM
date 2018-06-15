<?php
session_start();

require_once "_functions/connexion.php";


if(isset($_POST) && count($_POST) > 0)
{

    if (isset($_POST['connexion_bouton']) && isset($_POST['pseudo']) && isset($_POST['pass']))
    {

        $connexion = new Connexion($_POST['pseudo'], $_POST['pass']);
        $verif = $connexion->verif();

        if ($verif == "ok")
        {
            if($connexion->session())
            {
                header("Location: index.php");
                exit();
            }
        }
    }
    else
    {
        echo "Il y à une erreur lors de la connexion";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
</head>
<body>
<?php include_once 'views/includes/head.php' ?>
<?php /*include_once 'views/includes/header.php' */?>

<div id="connexion-section">
    <div class="title">
        <h1>.freelcrm</h1>
    </div>
    <div class="connexion-block" >
        <div class="input-connexion">
            <h1>Connexion</h1>
            <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
            <form action="" method="post">

                <label class="label-css-input" for="pseudo">Pseudo</label>
                <input class="input-css-text" type="text" name="pseudo" placeholder="Pseudo"><br>

                <label class="label-css-input" for="pass">Mot de passe</label>
                <input class="input-css-text" type="password" name="pass"><br>

                <!-- <a class="input-css-text-link" href="#">Mot de passe oublié ?</a>-->
                <input type="submit" name="connexion_bouton" class="btn-css-input" value="Se connecter">
                <!--<button class="btn-css-input" type="submit">Connexion</button>-->
            </form>

            <div class="bottom-form">
                <a href="inscription.php">Nouveau ? Inscrivez-vous !</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>



