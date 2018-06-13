<?php
session_start();

require_once "_functions/connexion.php";


if(isset($_POST) && count($_POST) > 0)
{

    if (isset($_POST['connexion_bouton']) && isset($_POST['mail']) && isset($_POST['pass']))
    {

        $connexion = new Connexion($_POST['mail'], $_POST['pass']);
        $verif = $connexion->verif();

        if ($verif == true)
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
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
<header>
    <h1>Connexion</h1>
</header>

<main>
    <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
    <form action="" method="post">
        <table>
            <tr>
                <td>Adresse Mail</td>
                <td><input type="text"  placeholder="Adresse Mail" name="mail" class="input_text" required></td>

            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" placeholder="Mot de passe" name="pass" class="input_text" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="input_text submit" name="connexion_bouton" value="Se Connecter" ></td>
            </tr>
        </table>
        <span><a href="inscription.php">M'inscrire</a></span>
    </form>
</main>
</body>
</html>



