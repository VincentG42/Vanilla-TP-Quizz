

let divReponse = document.querySelector("#div_reponse");
let cartes_reponse = document.querySelectorAll(".carte_reponse");
// let submitresponses = document.querySelectorAll(".submitresponse");



    cartes_reponse.forEach(carte => {
        
        carte.addEventListener('submit', ()=>{
            // divReponse.classList.add("bgblue")
            divReponse.classList.add("pointernone")
            carte.classList.add ("redborder")
            carte.classList.add ("greenborder")
            
            // event.preventDefault();
    });
        
    });

  
    
    $('.answer_form').on('submit', function(){
        $.ajax({
            type:'post',
            url:'./generate_quizz.php',
            data: $('#answer_form').serialize(),
         
            success : function(response){
                response
            },
            error: function(){
                alert('error')
            }
        })
        // event.preventDefault();
    })
