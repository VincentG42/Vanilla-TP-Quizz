<?php
require_once('/laragon/www/PHP-PDO/Vanilla-TP-Quizz/process/connect_db.php');
session_start();

var_dump($_SESSION);
$pseudo = $_SESSION['pseudo'];
$score =  $_SESSION['score'];

// recup id user grace au pseudo
$request = $database->query("SELECT id FROM user  WHERE pseudo='$pseudo'");
        
$idPlayer = $request->fetch();


var_dump($idPlayer);


// ecriture du score dans table score
$requete = $database->prepare("INSERT INTO scores (score, id_user) 
                                VALUES (:score,:id_user)");
                                

$result = $requete->execute(['score' => $score, 
                            'id_user' => $idPlayer['id'] ]);


header("Location: ../page4.php");    
?>