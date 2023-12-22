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
    <title>page 2</title>
</head>
<body>
    <br>
    <br>
    <br>
<div class="container">
    <div class="player-list">
        <h1 class ="text-center mb-5">Salut "pseudo"</h1>
      <h2 class="text-center mb-4">Liste des joueurs récents</h2>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Joueur 1
          <span class="badge badge-primary badge-pill text-dark">7</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Joueur 2
          <span class="badge badge-primary badge-pill text-dark">5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Joueur 3
          <span class="badge badge-primary badge-pill text-dark">10</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Joueur 4
          <span class="badge badge-primary badge-pill text-dark">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Joueur 5
          <span class="badge badge-primary badge-pill text-dark">6</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Joueur 6
          <span class="badge badge-primary badge-pill text-dark">0</span>
        </li>
      </ul>
    </div>
 
  </div>   
  <br>
  <br>
  <br> 
  <div class ="d-flex justify-content-center align-items-center">
        <a href="./page3.php" class="btn btn-primary">Jouée au quizz</a>
  </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>