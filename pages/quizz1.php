<?php

include_once('../process/generate_quizz_v2.php')
// session_start();

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
    


<div><?= '<div> '.$question['question'].'</div>'?></div>
<div id= "div_reponse" class="">
    <?php
    foreach($answsers as $answser){?>
        <div class="carte_reponse <?= 'isgood'.$answser['good_answer']?> .greenborder">
            <form action="" class="answer_form" id="answer_form">
                <input type="hidden" name="goodanswer"  id="goodanswer" value="<?= $answser['good_answer']?>">
                <button class="submitresponse" type="submit"><?= $answser['content']?></button>
            </form>
        </div>

    <?php } ?>
</div>
    


<script src="../js/div_reponse.js"></script>
</body>
</html>