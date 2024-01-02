<?php
include_once "./header.php";

require_once('./process/connect_db.php');
session_start();

$request = $database->query("SELECT scores.score, user.pseudo FROM `scores` JOIN user on scores.id_user = user.id ORDER BY scores.id DESC limit 5");

$joueursRecents = $request->fetchALL();


?>

<div class="container mt-5">
  <div class="row flex-column align-items-center">
    <div class="alert alert-success col-6" role="alert">
      <div class="alert-heading text-center">

        <?php if (isset($_SESSION['pseudo'])) {
          switch ($_SESSION['score']) {
            case 0:
              echo '<h4>Tu as oublié de repondre?</h4>';
              break;
            case 1:
              echo '<h4>La glissade</h4>';
              break;
            case 2:
              echo '<h4>La géographie, c est pas ton fort?!</h4>';
              break;
            case 3:
              echo '<h4>Ouch!</h4>';
              break;
            case 4:
              echo '<h4>Aie!!!</h4>';
              break;
            case 5:
              echo '<h4>Pas mal</h4>';
              break;
            case 6:
              echo '<h4>Encourageant</h4>';
              break;
            case 7:
              echo '<h4>Bravo</h4>';
              break;
            case 8:
              echo '<h4>Bravo</h4>';
              break;
            case 9:
              echo '<h4>Félicitations' . ($_SESSION['pseudo']) . '!</h4>';
              break;
            case 10:
              echo '<h4>Félicitations' . ($_SESSION['pseudo']) . '!</h4>';
              break;
          }
        };

        ?>
      </div>
    </div>
    <div class="alert alert-success text-center col-6" role="alert">
      <h4 class="alert-heading">Ton score :<?= $_SESSION['score'] ?>/10</h4>
    </div>
  </div>
  <div class="container">
    <div class="player-list d-flex flex-column align-items-center">
      <h2 class="text-center mb-4">Liste des joueurs récents</h2>
      <ul class="list-group col-4 player_list">
        <?php foreach ($joueursRecents as $joueur) { ?>
          <li class="list-group-item text-center">
            <?= $joueur['pseudo'] ?> Score : <?= $joueur['score'] ?>
          <?php } ?>
          </li>


      </ul>
    </div>

    <div class="d-flex justify-content-center align-items-center">
      <a href="./page2.php" class="btn btn-light mt-3 mx-2">Rejouer?</a>
      <a href="./index.php" class="btn btn-light mt-3 mx-2">Accueil</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  </html>