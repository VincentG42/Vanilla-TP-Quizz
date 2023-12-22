<?php 
require_once('./process/connect_db.php');
session_start();

?>
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
   
    include_once "./header.php";
    ?>

      <div class ="  d-flex align-items-center flex-column mb-3  ">

    <div class ="  d-flex align-items-center flex-column mb-3  ">


    <section class="container-sm">
      <div class ="d-flex align-items-center flex-column mb-3">

           <button id="togg1">Connexion !</button>
           <div id="d1" >
           <form action="./process/traitement.php" method="post">
                <label for="Pseudo1" class="d-flex align-items-center flex-column mb-3 ">Entrer un pseudo</label>
                  <input type="text" class="form-control" id="pseudo" name = "pseudo">
                 <input type="submit" value="Envoyer">
            </form>
</div>
    </section>

    <div class="container">
    <div class="table-container">
      <h2 class="text-center mb-4">Classement des Scores</h2>
      <br>
      <br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Pseudo</th>
            <th scope="col">Score</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Joueur 1</td>
            <td id="joueur1AScore">10/10</td>
          </tr>
          <tr>
            <td>Joueur 2</td>
            <td id="joueur2Score">9/10</td>
          </tr>
          <tr>
            <td>Joueur 3</td>
            <td id="joueur3BScore">8/10</td>
          </tr>
        </tbody>
      </table>
     
    </div>
  </div>

    
    





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script> 
let togg1 = document.getElementById("togg1");

let d1 = document.getElementById("d1");
togg1.addEventListener("click", () => { 
    d1.style.display = "block";
})

</script>



</body>
</html>

