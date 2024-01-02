<?php
require_once('./process/connect_db.php');
session_start();

include_once "./header.php";

$request = $database->query("SELECT DISTINCT user.pseudo,scores.score FROM `scores` JOIN user on scores.id_user = user.id ORDER BY score DESC LIMIT 10;");

$meilleursScores = $request->fetchALL();

?>

<div class="  d-flex align-items-center flex-column mb-3  ">

  <div class="  d-flex align-items-center flex-column mb-3  ">


    <section class="container-sm">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <button id="togg1" class=" btn btn-light col-8">Connexion !</button>
        <div id="d1">
          <form action="./process/traitement.php" method="post" class="d-flex  flex-column align-items-center justify-content-center">
            <label for="Pseudo1" class="d-flex align-items-center flex-column my-3 ">Entrer un pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo">
            <input class=" btn btn-light col-8 my-2" type="submit" value="Envoyer">
          </form>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="table-container">
        <h2 class="text-center mb-4">Meilleurs Scores</h2>
        <br>
        <br>
        <table class="table table-danger table-striped tableau">
          <thead>
            <tr>
              <th scope="col">Pseudo</th>
              <th scope="col">Score</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($meilleursScores as $score) { ?>
              <tr>
                <td class="">
                  <?= $score['pseudo'] ?>
                </td>
                <td class="">
                  <?= $score['score'] ?>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>

      </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      let togg1 = document.getElementById("togg1");

      let d1 = document.getElementById("d1");
      togg1.addEventListener("click", () => {
        d1.style.display = "block";
      })
    </script>



    </body>

    </html>