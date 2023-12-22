<?php

require_once('./connect_db.php');
session_start();
$_SESSION['score']=0;
$_SESSION['question_nb']=0;
$_SESSION['iduser'];

?>
<form action="../pages/quizz1.php" method="post">
    <input type="hidden" name="question_nb" value="<?= $_SESSION['question_nb']=1?>">
    <input type="hidden" name="score" value="<?= $_SESSION['score']?>">
    <button type="submit">Lancer le quizz</button>


</form>
