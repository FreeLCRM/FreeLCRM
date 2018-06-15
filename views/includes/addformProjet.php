<?php
    $currentid = intval ($_GET['id']);
    //echo $currentid;
?>
<!DOCTYPE html>
<html lang="en">
<body>
<link rel="stylesheet" href="/assets/styles/css/app.css">

<div class="container-fluid">
    <div class="back-container">
        <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="back-container__link">
            <svg width="8px" height="19px" viewBox="0 0 13 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>back</title>
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="ajouter" transform="translate(-196.000000, -74.000000)" fill="#7D7575" fill-rule="nonzero">
                        <g id="Group-14" transform="translate(180.000000, 50.000000)">
                            <g id="Group-13" transform="translate(16.000000, 24.000000)">
                                <g id="back">
                                    <path d="M1.70531225,11.9786611 L12.7784348,1.15857741 C13.0507668,0.892468619 13.0507668,0.465690377 12.7784348,0.19958159 C12.5061028,-0.0665271967 12.0693439,-0.0665271967 11.7970119,0.19958159 L0.230608696,11.5016736 C-0.0417233202,11.7677824 -0.0417233202,12.1945607 0.230608696,12.4606695 L11.7970119,23.7577406 C11.9306087,23.8882845 12.1104506,23.9585774 12.2851542,23.9585774 C12.4598577,23.9585774 12.6396996,23.8933054 12.7732964,23.7577406 C13.0456285,23.4916318 13.0456285,23.0648536 12.7732964,22.7987448 L1.70531225,11.9786611 Z"
                                          id="Shape"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
            <span>Retour</span>
        </a>
    </div>
    <div class="customer-container">
        <div class="customer-container-inner">
            <div class="customer-header">
                <h1 class="customer-header__title">Nouveau client</h1>
                <div class="customer-header__group">
                    <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn-css-input-secondary" type="submit">Annuler</a>
                    <!--<button class="btn-css-input-primary" type="submit">Enregistrer</button>-->
                </div>
            </div>
            <div class="customer-content">
                <form method="post" action=<?= "../../_functions/fnc_addformProjet.php?id=".$currentid?>>
                    <div class="customer-form-inner">
                        <div class="form-group">
                            <p>
                                <label class="label-css-input-customer" for="deadline">Deadline</label>
                                <input class="input-css-text-customer" type="date" name="deadline" id="deadline">
                            </p>
                            <p>
                                <label class="label-css-input-customer" for="price">Prix total</label>
                                <input class="input-css-text-customer" type="number" name="price" id="price">
                            </p>
                            <p>
                                <label class="label-css-input-customer" for="priceHour">prix de l'heure</label>
                                <input class="input-css-text-customer" type="number" name="priceHour" id="priceHour">
                            </p>
                            <p>
                                <label class="label-css-input-customer" for="nbHours">Nombres d'heures</label>
                                <input class="input-css-text-customer" type="number" name="nbHours" id="nbHours">
                            </p>
                            <p>
                                <label class="label-css-input-customer" for="dateStart">Date de départ</label>
                                <input class="input-css-text-customer" type="date" name="dateStart" id="dateStart">
                            </p>
                            <p>
                                <label class="label-css-input-customer" for="dateEnd">Date de fin</label>
                                <input class="input-css-text-customer" type="date" name="dateEnd" id="dateEnd">
                            </p>
                            <p>
                                <label class="label-css-input-customer" for="state">état</label>
                                <!--<input type="text" name="state" id="state">-->
                                <select class="label-css-input-customer" name="state" id="state">
                                    <option>choisir un état d'avencement</option>
                                    <option value="en cours">en cours</option>
                                    <option value="fini">fini</option>
                                </select>
                            </p>
                        </div>
                        <div class="form-group">
                            <label class="label-css-input-customer" for="descriptionProjet">description du projet</label>
                            <textarea class="area-css-text-customer" name="descriptionProjet" id="descriptionProjet"></textarea>
                        </div>
                    </div>
                    <input style="margin-top: 10px" class="btn-css-input-primary" type="submit" value="Enregistrer">
                </form>
            </div>
        </div>
    </div>
</div>
