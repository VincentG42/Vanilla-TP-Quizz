<?php

require_once('/laragon/www/PHP-PDO/Vanilla-TP-Quizz/process/connect_db.php');
// session_start();





$request = $database->query("SELECT * FROM questions WHERE RAND() ORDER BY RAND() LIMIT 1;");
        
$question = $request->fetch();

$idQuestion =$question['id'];

// var_dump($idQuestion);

$request = $database->query("SELECT * FROM `answers` WHERE id_questions= '$idQuestion' AND RAND() ORDER BY RAND() LIMIT 4");
        
$answsers = $request->fetchAll();

// foreach($answsers as $answser){
//     var_dump($answser);
// }

?>


