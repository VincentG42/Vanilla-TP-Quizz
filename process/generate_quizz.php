<?php
include_once('../process/generate_quizz_v2.php')
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
    

<div> <?= '<p> Votre score:'.$_SESSION['score']. '/10</p>';?></div>
<div><?= 'Question numero '.$_SESSION['question_nb'].'/10'?></div>
<div><?= '<div> '.$question3['question'].'</div>';?></div>
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

<div>

<?php  
if (isset($_POST['goodanswer'])){
    var_dump($_POST['goodanswer']);
    $_SESSION['score']= $_SESSION['score']+ $_POST['goodanswer'];
}
?>
<form action="./test.php" method="post">
    <input type="hidden" name="question_nb" value="<?= $_SESSION['question_nb']+1?>">
    <input type="hidden" name="sessiontonextpage" value="<?= $_SESSION['score']?>">
    <input type="hidden" name="questionNb" value="<?= $_SESSION['question_nb']?>">
    <button type="submit">question suivante</button>
</form>

    <script src="https://code.jquery.com/jquery-3.7.1.js" 
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
                crossorigin="anonymous">
    </script>
    <script src="../js/div_reponse.js"></script>

</div>

</body>
</html>