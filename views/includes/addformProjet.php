<?php
    $currentid = intval ($_GET['id']);
    echo $currentid;
?>
<div>
    <form method="post" action=<?= "../../_functions/fnc_addformProjet.php?id=".$currentid?>>
        <p>
            <label for="descriptionProjet">description du projet</label>
            <input type="text" name="descriptionProjet" id="descriptionProjet">
        </p>
        <p>
            <label for="deadline">Deadline</label>
            <input type="date" name="deadline" id="deadline">
        </p>
        <p>
            <label for="price">Prix total</label>
            <input type="number" name="price" id="price">
        </p>
        <p>
            <label for="priceHour">prix de l'heure</label>
            <input type="number" name="priceHour" id="priceHour">
        </p>
        <p>
            <label for="nbHours">Nombres d'heures</label>
            <input type="number" name="nbHours" id="nbHours">
        </p>
        <p>
            <label for="dateStart">Date de départ</label>
            <input type="date" name="dateStart" id="dateStart">
        </p>
        <p>
            <label for="dateEnd">Date de fin</label>
            <input type="date" name="dateEnd" id="dateEnd">
        </p>
        <p>
            <label for="state">état</label>
            <!--<input type="text" name="state" id="state">-->
            <select name="state" id="state">
                <option>choisir un état d'avencement</option>
                <option value="en cours">en cours</option>
                <option value="fini">fini</option>
            </select>
        </p>
        <input type="submit" value="Submit">
    </form>
</div>