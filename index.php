
<body>
    <?php 
    include_once "./header.php";
    ?>


    <section class="container-sm">
      <div class ="d-flex align-items-center flex-column mb-3">
           <button id="togg1">Connexion !</button>
           <div id="d1">
           <form action="/traitement.php" method="post">
                <label for="Pseudo1" class="d-flex align-items-center flex-column mb-3">Entrer un pseudo</label>
                  <input type="text" class="form-control" id="pseudo">
                 <input type="submit" value="Envoyer">
            </form>
</div>
    </section>

     















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script> 
let togg1 = document.getElementById("togg1");

let d1 = document.getElementById("d1");
togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})

</script>



</body>
</html>