<?php

require_once('./connect_db.php');
session_start();
var_dump($_SESSION['score']);

// $request = $database->query("SELECT * FROM questions"
// );
        
// $questions = $request->fetchAll();



// foreach($questions as $question){
    
//     $idquestion= $question['id'];
//     // var_dump($idquestion);
//     $request = $database->query("SELECT * FROM answers WHERE id_questions ='$idquestion'");
        
//     $answsers = $request->fetchAll();
//     // var_dump($answsers);
    
//     echo'<div> '.$question['question'].'</div>';
//     foreach($answsers as $answser){echo $answser['content'].' /';}
// }

echo 'hello';
echo '<p> Votre score:'.$_SESSION['score']. '/10</p>';

$request = $database->query("SELECT * FROM `questions` WHERE id= 5;");
        
$question3 = $request->fetch();

$request = $database->query("SELECT * FROM `answers` WHERE id_questions= 5;");
        
$answsersbis = $request->fetchAll();
array_rand($answsersbis);
echo'<div> '.$question3['question'].'</div>';

foreach($answsersbis as $answserbis){?>
    
    <form action="" method="post">
     <input type="hidden" name="goodanswer" value="<?= $answserbis['good_answer']?>">
        <button type="submit"><?= $answserbis['content']?></button>
    </form>
   

<?php } ?>


<div>
<?php  var_dump($_POST['goodanswer'])?>
<?= $_POST['goodanswer']?>
<?php $_SESSION['score']= $_SESSION['score']+ $_POST['goodanswer'];
var_dump($_SESSION['score']);
echo '<p> Votre score:'.$_SESSION['score']. '/10</p>';
?>




</form>

</div>