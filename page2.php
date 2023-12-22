<?php 
include_once ("./header.php");
include_once("./process/check_db.php");

require_once('./process/connect_db.php');

session_start();
$_SESSION['score']=0;
$_SESSION['question_nb']=1;
if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
  $_SESSION['pseudo'] =$_POST['pseudo'];
}
?>

<div class="container">
    <div class="player-list">
        <h1 class ="text-center mb-5">Salut <?= $_SESSION['pseudo']?></h1>
      <h2 class="text-center mb-4">Liste des joueurs récents</h2>
      <ul class="list-group">
        <?php foreach($joueursAvecScores as $joueur){?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?=  $joueur['pseudo']?> Score : <?=  $joueur['score']?>
          <span class="badge badge-primary badge-pill text-dark"></span>
        </li>
        <?php } ?>
        
      </ul>
    </div>
 
  </div>   
  <br>
  <br>
  <br> 
  <div class ="d-flex justify-content-center align-items-center">
        <a href="./page3.php" class="btn btn-primary">Lancer le quizz</a>
  </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>