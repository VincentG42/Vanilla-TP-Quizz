<?php 
require_once('./connect_db.php'); 
session_start();



if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {

        $pseudo = $_POST['pseudo'];
        $request = $database->query("SELECT id FROM user WHERE pseudo = '$pseudo' ");
        $pseudoexist = $request->fetch();


      if ($pseudoexist) {
        
      } else {
       $request = $database->prepare("INSERT INTO user (pseudo) VALUES (:pseudo)");
       $resultat = $request->execute([
           'pseudo' => $_POST['pseudo'],
        ]);

      }
         $_SESSION['pseudo']= $pseudo;

      header("Location: ../page2.php");      
    }
    

?>