<?php
/**
 * Created by PhpStorm.
 * User: Pc-Sam
 * Date: 14/06/2018
 * Time: 00:57
 */
?>

<div>
    <form method="post" action="_functions/fnc_addformClient.php">
        <p>
            <label for="mail">Addresse mail du client</label>
            <input type="email" name="mail" id="mail">
        </p>
        <p>
            <label for="firstname">Prénom du client</label>
            <input type="text" name="firstname" id="firstname">
        </p>
        <p>
            <label for="lastname">Nom de famille du client</label>
            <input type="text" name="lastname" id="lastname">
        </p>
        <p>
            <label for="img">Logo du client (lien)</label>
            <input type="text" name="img" id="img">
        </p>
        <p>
            <label for="mobile">Tel du client</label>
            <input type="tel" name="mobile" id="mobile">
        </p>
        <p>
            <label for="company">Nom de l'entreprise</label>
            <input type="text" name="company" id="company">
        </p>
        <p>
            <label for="descriptionClient">Description</label>
            <input type="text" name="descriptionClient" id="descriptionClient">
        </p>
        <p>
            <label for="note">Note sur le client</label>
            <input type="text" name="note" id="note">
        </p>
        <input type="submit" value="Submit">
    </form>
</div>