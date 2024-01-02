<?php
include_once("./header.php");

require_once('./process/connect_db.php');

include_once('./process/generate_quizz_v2.php');

session_start()
?>



<div id="BTNQuiz" class="container">
  <div class="row text-center">
    <h2><?php echo isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : '???' ?></h2>
    <h2>Votre score est de <?php echo $_SESSION['score'] . '/' . $_SESSION['question_nb'] ?> </h2>
  </div>

  <div id="timer" class="text-center fs-2">Temps restant : <span id="seconds">10</span> secondes</div>

  <div id="div_reponse" class="container w-50 p-4 m-5">
    <div id="BTNreponse">
      <div class="text-center"> <?= 'Quesion N°' . $_SESSION['question_nb'] . ' /10' ?></div>
      <div class="text-center mb-3"><?= '<div> ' . $question['question'] . '</div>' ?></div>
    </div>

    <form name="qcm" class="answer_form d-flex flex-column align-items-center" id="answer_form">
      <?php foreach ($answsers as $answser) { ?>
        <div class="col-8 py-2">
          <input class="submitresponse form-check-input mx-2" type="radio" name="choix" value=<?= $answser['good_answer'] ?>><?= $answser['content'] ?></input>
        </div>
        <?php } ?>
        <input type="button" class="checkbutton btn-light my-2" name="bouton" value="Vérifier">
    </form>
  </div>

  <div class="d-flex justify-content-center align-items-center">

    <div>
      <form action="./process/bouton_suivant.php" id="next_question_form" method="post">
        <input type="hidden" name="scorequestion" id=score_question>
        <input type="hidden" name="questionNb" id="questionNb" value="<?= $_SESSION['question_nb'] = $_SESSION['question_nb'] + 1 ?>">

        <button id="next_question_button" class="hidden_button btn-light" name="next_question">Question suivante</button>
      </form>
      <form action="./process/gestion_session.php">
    <button id="quizz_end" class ="hidden_button btn-light" name="quizz_end">Fin du quizz</button>

    </form>

    </div>

  </div>


</div>


<script src="./js/timer.js"></script>
<script src="./js/div_reponse.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
  </body> 
  </html>
