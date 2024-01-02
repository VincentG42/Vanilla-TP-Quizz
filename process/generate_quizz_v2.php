<?php

require_once('/laragon/www/PHP-PDO/Vanilla-TP-Quizz/process/connect_db.php');

$questionsDejaPosees=array();




$request = $database->query("SELECT * FROM questions WHERE RAND() ORDER BY RAND() LIMIT 1;");
        
$question = $request->fetch();

$idQuestion =$question['id'];

array_push($questionsDejaPosees, $idQuestion);

// var_dump($idQuestion);
// var_dump($questionsDejaPosees);

$request = $database->query("SELECT * FROM `answers` WHERE id_questions= '$idQuestion' AND RAND() ORDER BY RAND() LIMIT 4");
        
$answsers = $request->fetchAll();

?>


