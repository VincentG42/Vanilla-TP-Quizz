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
    <title>page 3</title>
</head>
<body>


<div id="BTNQuiz" class="container">

    <div class="">

      <div class="col-md-6">

        <div class="text-center vertical-buttons">

          <button type="button" class="btn btn-primary mb-5">Bouton 1</button>
          <button type="button" class="btn btn-secondary mb-5">Bouton 2</button>

        </div>

      </div>

      <div class="col-md-6">

        <div class="text-center horizontal-buttons">

          <button type="button" class="btn btn-success mr-5">Bouton 3</button>
          <button type="button" class="btn btn-danger">Bouton 4</button>

        </div>

      </div>

    </div>

     <div class ="d-flex justify-content-center align-items-center">

        <a href="./page4.php" class="btn btn-dark"> résultat !</a>

     </div>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></>
</body>
</html>