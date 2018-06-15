<?php
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php include_once 'views/includes/head.php' ?>
<?php /*include_once 'views/includes/header.php' */?>

<?php include_once 'views/includes/sidebar.php'?>

<div id="utilisateur-section">
    <!--header-->
    <h1>Mes clients</h1>
    <a href="views/includes/addformClient.php" class="btn-ajouter">
        <svg width="18px" height="13px" viewBox="0 0 18 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Ajouter un client</title>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="accueil-first" transform="translate(-1071.000000, -192.000000)" fill="#FFFFFF">
                    <g id="create-event-button" transform="translate(1017.000000, 175.000000)">
                        <g id="Group-7" transform="translate(54.000000, 15.000000)">
                            <path d="M11.4509804,10.1347305 C12.261442,10.1347305 13.150322,10.2514958 14.1176471,10.4850299 C15.2156918,10.7574864 16.1045718,11.1207562 16.7843137,11.5748503 C17.5947753,12.1067891 18,12.7035895 18,13.3652695 L18,15 L4.90196078,15 L4.90196078,13.3652695 C4.90196078,12.7035895 5.30718549,12.1067891 6.11764706,11.5748503 C6.79738902,11.1207562 7.68626902,10.7574864 8.78431373,10.4850299 C9.75163882,10.2514958 10.6405188,10.1347305 11.4509804,10.1347305 Z M4.09803922,6.86526946 L6.54901961,6.86526946 L6.54901961,8.5 L4.09803922,8.5 L4.09803922,10.9326347 L2.45098039,10.9326347 L2.45098039,8.5 L0,8.5 L0,6.86526946 L2.45098039,6.86526946 L2.45098039,4.43263473 L4.09803922,4.43263473 L4.09803922,6.86526946 Z M11.4509804,8.5 C10.8627422,8.5 10.3202639,8.35404338 9.82352941,8.06212575 C9.3267949,7.77020812 8.93137402,7.37774698 8.6372549,6.88473054 C8.34313578,6.3917141 8.19607843,5.85329633 8.19607843,5.26946108 C8.19607843,4.68562582 8.34313578,4.14072109 8.6372549,3.63473054 C8.93137402,3.12873999 9.3267949,2.72979188 9.82352941,2.43787425 C10.3202639,2.14595662 10.8627422,2 11.4509804,2 C12.0392186,2 12.5816969,2.14595662 13.0784314,2.43787425 C13.5751659,2.72979188 13.9705868,3.12873999 14.2647059,3.63473054 C14.558825,4.14072109 14.7058824,4.68562582 14.7058824,5.26946108 C14.7058824,5.85329633 14.558825,6.3917141 14.2647059,6.88473054 C13.9705868,7.37774698 13.5751659,7.77020812 13.0784314,8.06212575 C12.5816969,8.35404338 12.0392186,8.5 11.4509804,8.5 Z" id="person_add---material"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        Ajouter un client
    </a>
    <ul class="status-client" >
        <li><a href="#">Tous</a></li>
        <li><a href="#" style="color:#ccc;">À venir</a></li>
        <li><a href="#"style="color:#ccc;">En cours</a></li>
        <li><a href="#"style="color:#ccc;">Terminé</a></li>
    </ul>

    <div class="listClientContainer" id="display">
        <?php
            if (empty($allClient)) {
                ?>
                <div class="container-home" style="width: 500px;">
                <p>
                <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="accueil-first" transform="translate(-617.000000, -329.000000)" fill="#5E77FF">
                <g id="drag-and-drop-area" transform="translate(180.000000, 260.000000)">
                <g id="Group-6" transform="translate(437.000000, 69.000000)">
                <g id="sessions-icon">
                <path d="M15.4853779,16 C15.2823194,16 15.1002217,15.8619174 15.0578633,15.6611471 C15.0098279,15.4319978 15.1617943,15.2083548 15.3980409,15.1617626 C17.3744773,14.7691167 18.3727393,13.7500165 19.0321337,13.0053872 C18.5688109,12.2798184 17.5242603,11.1023045 16.0530684,10.6105442 C14.3565471,10.0438126 13.9923518,9.82779388 13.9923518,8.82012998 C13.9923518,8.63206661 14.1198638,8.4668758 14.305455,8.41393003 C14.5823133,8.33472316 14.9277311,8.33260533 15.3277346,8.3304875 C15.923373,8.32709897 16.6644275,8.32286331 16.9067877,8.00984791 C17.1120296,7.74384836 17.0260027,7.55366716 16.5976147,6.91704721 C16.4928103,6.76117487 16.3823289,6.59598406 16.2762145,6.41893341 C15.4504431,5.03810772 15.3884338,4.42690175 15.3163808,3.71912269 L15.3024069,3.58019299 C15.1224926,1.88550477 14.1901701,0.966366199 12.5316404,0.84819124 C11.0818461,0.951117818 10.183585,1.67160386 9.86174815,2.98931819 C9.80628915,3.21719679 9.57047923,3.35739719 9.33597937,3.30360428 C9.10147952,3.24981138 8.9560634,3.02150922 9.01195909,2.79405419 C9.42244301,1.11292009 10.6621918,0.120504573 12.5023825,0.000635349244 C12.5215966,-0.000211783081 12.5412475,-0.000211783081 12.5608983,0.000635349244 C14.6648467,0.138294352 15.946954,1.37807251 16.1709734,3.49336192 L16.1858207,3.63610372 C16.2526335,4.29559624 16.3011055,4.77210817 17.0316796,5.99367298 C17.129497,6.15759309 17.232118,6.30965334 17.3290621,6.4540894 C17.7373626,7.06105971 18.2002487,7.74893116 17.605047,8.51770374 C17.1028592,9.16745423 16.121628,9.1729606 15.3329748,9.17761982 C15.1945457,9.17846696 15.0543698,9.17889052 14.9277311,9.18397332 C15.0434527,9.36144754 15.3775167,9.48936452 16.3373504,9.8100041 C18.245664,10.4470476 19.5068103,12.0261023 19.9513557,12.8588333 C20.0325791,13.0117407 20.0107448,13.1976863 19.8958967,13.3281446 L19.8295205,13.403963 C19.1382481,14.1926432 17.9810328,15.513746 15.5735883,15.9911051 C15.5438937,15.997035 15.5141991,16 15.4853779,16" id="Fill-6"></path>
                <path d="M8,18 C3.5809846,18 0.478327941,17.3870301 0.348279104,17.3607012 C0.137555904,17.3187395 -0.00924498654,17.1401966 0.000453570797,16.9390273 C0.170619168,13.608009 2.39335217,12.5741879 4.05092379,12.0858689 C5.28704901,11.7217895 5.95404525,11.124041 5.9606579,11.1178702 C6.13435024,10.9590739 6.41296334,10.9615423 6.58356979,11.1236296 C6.75329454,11.2853056 6.75241285,11.5444808 6.57960219,11.7036884 C6.54742062,11.7337198 5.76845013,12.4425434 4.31631159,12.8703881 C2.76806916,13.3266187 1.16957057,14.133353 0.909032056,16.6234918 C1.86213574,16.7843449 4.54687274,17.1772216 8,17.1772216 C11.4531273,17.1772216 14.1378643,16.7843449 15.0909679,16.6234918 C14.8299886,14.133353 13.2319308,13.3266187 11.6836884,12.8707995 C10.231109,12.4425434 9.45257938,11.7337198 9.41995696,11.7036884 C9.2471463,11.5440694 9.24582377,11.2832486 9.41687106,11.1215727 C9.5874775,10.9607195 9.8660906,10.9594853 10.0393421,11.1178702 C10.0574167,11.1343257 10.7230904,11.7246692 11.9490762,12.0862803 C13.606207,12.5741879 15.8293808,13.6075976 15.9995464,16.9390273 C16.009245,17.1401966 15.8624441,17.3187395 15.6517209,17.3607012 C15.5216721,17.3870301 12.4185746,18 8,18" id="Fill-3"></path>
                <path d="M5.20821346,9.02193675 C5.21965151,9.02876531 5.23196941,9.03602066 5.24428731,9.043276 C5.41101888,9.14399727 5.55575421,9.23106141 5.60986499,9.41372541 C5.78099581,9.99159233 6.94063813,12.1464299 8.50017227,12.1464299 C10.0597064,12.1464299 11.2189088,9.99159233 11.3904796,9.41329862 C11.4445903,9.23106141 11.5888857,9.14399727 11.7560572,9.043276 C11.7683751,9.03602066 11.7802531,9.02876531 11.7916912,9.02193675 C12.2087401,8.27762366 12.1242745,7.97375272 12.0868808,7.89650463 C12.044648,7.80858691 11.9579828,7.7804191 11.957103,7.7804191 C11.73978,7.74158167 11.5858063,7.55208911 11.5976842,7.33784303 C11.5981242,7.32888054 11.6421167,6.46976228 11.4274333,5.68362426 C11.4067568,5.61277794 10.8687285,3.85357006 8.50017227,3.85357006 C6.10830002,3.85357006 5.57687061,5.66697964 5.57203144,5.6853314 C5.35778796,6.46976228 5.40178046,7.32888054 5.40222038,7.33784303 C5.41409836,7.55208911 5.26012461,7.74158167 5.04280166,7.7804191 C5.03884233,7.78212624 4.95129725,7.80858691 4.90906445,7.90504033 C4.8747503,7.98356878 4.7990832,8.290854 5.20821346,9.02193675 M8.50017227,13 C6.38501285,13 5.10527101,10.56007 4.81184103,9.78758909 C4.80128283,9.78118732 4.7902847,9.77521233 4.78016643,9.76838377 C4.647749,9.68857496 4.55184535,9.63138577 4.48541667,9.51786095 C4.00457864,8.69203192 3.88007987,8.02454014 4.11587967,7.5354445 C4.22102175,7.31735735 4.3749955,7.17737186 4.51841105,7.08817379 C4.52061067,6.72668687 4.55228527,6.08693611 4.72209633,5.46511032 C4.9592159,4.61111348 6.05330939,3 8.50017227,3 C10.9470352,3 12.0411286,4.61111348 12.2773684,5.46340318 C12.4480593,6.08650933 12.4797339,6.72626008 12.4819335,7.08817379 C12.6249091,7.17737186 12.7788829,7.31735735 12.884025,7.5354445 C13.1198248,8.02454014 12.9957659,8.69203192 12.5144879,9.51743417 C12.4484992,9.63138577 12.3525955,9.68857496 12.2197382,9.76838377 C12.2096199,9.77521233 12.1990617,9.78118732 12.1885035,9.78758909 C11.8941937,10.5604968 10.6148918,13 8.50017227,13" id="Fill-1"></path>
                </g>
                </g>
                </g>
                </g>
                </g>
                </svg>
                    Aucun client existant dans votre liste
                </p>
                </div>
           <?php
            } elseif (isset($_POST['search'])) {
                //Getting value of "search" variable from "script.js".

                //Including Database configuration file.

                include "./../_functions/connect.php";

                //Search box value assigning to $Name variable.

                $name = $_POST['search'];

                var_dump($name);

                //Search query.

                $query = "SELECT lastname FROM client WHERE lastname LIKE '%$name%'";

                //Query execution

                //Fetching result from database.

                foreach ($pdoconnect->query($query) as $result) {
                    ?>

              <!-- Calling javascript function named as "fill" found in "script.js" file.

                   By passing fetched result as parameter. -->

           <a  href=<?= "/listproject?id=".$result['id'] ?>><div class="container-home-client">
           <table>
               <tr class="tr-accueil">
                   <th>Entreprise</th>
                   <th>Contact</th>
                   <!--<th>Projets</th>-->
                   <th>Téléphone</th>
                   <th>Supprimer</th>
               </tr>
               <tr class="tr-accueil-data">
                   <td><?= $result['company'] ?></td>
                   <td><?= $result['mail'] ?></td>
                   <td><?= $result['mobile'] ?></td>
                   <td><a href=<?= "_functions/fnc_deleteClient.php?id=".$result['id'] ?>>delete</a></td>
               </tr>
           </table>
       </div></a>

            <?php
                } ?>
           <?php
            } else {
                foreach ($allClient as $index => $client): ?>
                <a style="color: #000;" href=<?= "/listproject?id=".$client['id'] ?>><div class="container-home-client">
                <table>
                    <tr class="tr-accueil">
                        <th>Entreprise</th>
                        <th>Contact</th>
                        <!--<th>Projets</th>-->
                        <th>Téléphone</th>
                        <th>Supprimer</th>
                    </tr>
                    <tr class="tr-accueil-data">
                        <td><?= $client['company'] ?></td>
                        <td><?= $client['mail'] ?></td>
                        <td><?= $client['mobile'] ?></td>
                        <td><a href=<?= "_functions/fnc_deleteClient.php?id=".$client['id'] ?>>delete</a></td>
                    </tr>
                </table>
            </div></a>
        <?php endforeach;
            } ?>
    </div>

    <div class="pagination">
        <ul class="page">
            <li class="active">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
    </div>
</div>

<script type="text/javascript">

//Getting value from "ajax.php".

document.addEventListener("DOMContentLoaded", function(event) {

  document.querySelector("#search").addEventListener("keyup", function() {
    var name = document.querySelector('#search').value;
    if (name == "") {
      document.querySelector("#display").innerHTML = "";
    } else {

      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.querySelector("#display").innerHTML = this.responseText;
          document.querySelector("#display").style.display = "block";
        }
      };
      xhttp.open("POST", "views/home_view.php", true);
      xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhttp.send(encodeURI('search=' + name));
    }
  })

});


</script>

<?php /*include_once 'views/includes/addformClient.php' */?>
<?php include_once 'views/includes/footer.php' ?>
</body>
</html>
