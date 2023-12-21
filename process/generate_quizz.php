<?php

require_once('./connect_db.php');
session_start();



echo '<p> Votre score:'.$_SESSION['score']. '/10</p>';

$request = $database->query("SELECT * FROM `questions` WHERE id= 3;");
        
$question3 = $request->fetch();

$request = $database->query("SELECT * FROM `answers` WHERE id_questions= 3;");
        
$answsers = $request->fetchAll();
// var_dump($answsers); essai randomisation order reponses
// $answersrandom = array_rand($answers, 3);
// var_dump($answersrandom);
echo'<div> '.$question3['question'].'</div>';
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
    


<div id= "div_reponse">
    <?php
    foreach($answsers as $answser){?>
        <div class="carte_reponse">
            <form action="" method="post">
            <input type="hidden" name="goodanswer" value="<?= $answser['good_answer']?>">
                <button type="submit"><?= $answser['content']?></button>
            </form>
        </div>

    <?php } ?>
</div>

<div>
<?php  
if (isset($_POST['goodanswer'])){
    var_dump($_POST['goodanswer']);
    $_POST['goodanswer'];
    $_SESSION['score']= $_SESSION['score']+ $_POST['goodanswer'];
    $_SESSION['question_nb']= $_SESSION['nb_question']+ 1;
}
?>

<form action="./test.php" method="post">
    <input type="hidden" name="sessiontonextpage" value="<?= $_SESSION['score']?>">
    <input type="hidden" name="questionNb" value="<?= $_SESSION['question_nb']?>">
    <button type="submit">test</button>

<script src="../js/div_reponse.js"></script>
</div>

</body>
</html>