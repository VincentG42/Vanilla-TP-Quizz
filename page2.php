<?php
include_once("./header.php");
include_once("./process/check_db.php");

require_once('./process/connect_db.php');
session_start();
$_SESSION['score'] = 0;
$_SESSION['question_nb'] = 1;

if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
  $_SESSION['pseudo'] = $_POST['pseudo'];
}
?>

<div class="container">
  <div class="d-flex align-items-center justify-content-center p-2">
    <div class="player_list my-2 p-2">
      <h2 class="text-center mb-5">Salut <?= $_SESSION['pseudo'] ?></h2>
      <h3 class="text-center mb-4">Liste des joueurs récents</h3>
      <ul class="list-group">
        <?php foreach ($joueursAvecScores as $joueur) { ?>
          <li class="row align-items-center">
            <div class="col-6 text-center"><?= $joueur['pseudo'] ?></div>
            <div class="col-6">Score : <?= $joueur['score'] ?></div>
            <hr>
          </li>
        <?php } ?>

      </ul>
    </div>
  </div>

</div>

<div class="d-flex justify-content-center align-items-center">
  <a href="./page3.php" class="btn btn-light">Lancer le quizz</a>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>