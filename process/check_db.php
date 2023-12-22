<?php

require_once('/laragon/www/PHP-PDO/Vanilla-TP-Quizz/process/connect_db.php');


$request = $database->query("SELECT * FROM user JOIN scores on user.id= scores.id_user");
        
$joueursAvecScores = $request->fetchALL();


?>