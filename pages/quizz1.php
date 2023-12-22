<?php

include_once('../process/generate_quizz_v2.php');
session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reponse.css">
</head>
<body>
    

<div><?php echo isset($_SESSION['pseudo'])? $_SESSION['pseudo'] : '???' ?></div>

<div> 
    <h2>Votre score est de <?php echo $_SESSION['score'].'/'.$_SESSION['question_nb'] ?> </h2>
</div>

<div> <?=  'Quesion N°'.$_SESSION['question_nb'].' /10'?></div>
<div><?= '<div> '.$question['question'].'</div>'?></div>
<div id= "div_reponse" class="">
    
        <form  name="qcm" class="answer_form" id="answer_form">
            <?php
            foreach($answsers as $answser){?>
                <div>
                    <input class="submitresponse" type="radio" name="choix" value=<?= $answser['good_answer']?>><?= $answser['content']?></input>
                    <?php } ?>
                </div>
                <INPUT type="button" class="checkbutton" name="bouton" value="Vérifier">
            </form>
</div>
<div>
    <form action="./process/bouton_suivant.php"  id="next_question_form"method="post">
        <input type="hidden" name="scorequestion"  id=score_question>
        <input type="hidden" name="questionNb" value="<?= $_SESSION['question_nb']= $_SESSION['question_nb'] +1?>">

        <button id="next_question_button" class ="hidden_button" name="next_question">Question suivante</button>
    </form>
   
</div>
    
<input type="hidden" name="nombrequestion" id="nombrequestion" value=<?= $_SESSION['question_nb']?>>

<script src="../js/div_reponse.js"></script>
</body>
</html>