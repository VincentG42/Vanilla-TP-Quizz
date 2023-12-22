<?php 
include_once "./header.php";

require_once('./process/connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>page 4</title>
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-success text-center" role="alert">
      <h4 class="alert-heading">Félicitations "Joueur" !</h4>
    </div>
    <div class="alert alert-success text-center" role="alert">
      <h4 class="alert-heading">votre score : ?/10</h4>
    </div>
    <div class="container">
    <div class="player-list">
      <h2 class="text-center mb-4">Liste des joueurs récents</h2>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center"> 
            Joueur 1 <span class="badge badge-primary badge-pill text-dark">6/10</span>
         </li>
        <li class="list-group-item d-flex justify-content-between align-items-center"> 
            Joueur 2 <span class="badge badge-primary badge-pill text-dark">7/10</span>
          </li>
        <li class="list-group-item d-flex justify-content-between align-items-center"> 
            Joueur 3 <span class="badge badge-primary badge-pill text-dark">2/10</span>
         </li>
         <li class="list-group-item d-flex justify-content-between align-items-center"> 
            Joueur 4 <span class="badge badge-primary badge-pill text-dark">9/10</span>
         </li>
             
      </ul>
        </div>
        
        <div class ="d-flex justify-content-center align-items-center">
        <a href="./page2.php" class="btn btn-primary">rejoué?</a>
  </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>