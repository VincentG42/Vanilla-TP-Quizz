<?php

require_once('./connect_db.php');
session_start();
$_SESSION['score']=0;
$_SESSION['question_nb']=0;

?>
<form action="./generate_quizz.php" method="post">
    <input type="hidden" name="question_nb" value="<?= $_SESSION['question_nb']=1?>">
    <input type="hidden" name="score" value="<?= $_SESSION['score']?>">
    <button type="submit">start</button>


</form>
