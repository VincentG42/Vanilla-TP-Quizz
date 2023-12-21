

let divReponse = document.querySelector("#div_reponse");
let carte_reponse = document.querySelectorAll(".carte_reponse");

console.log(divReponse);
console.log(carte_reponse);


function reponseactivee(){
    divReponse.addEventListener('clic', ()=>{
        divReponse.classList.add('pointernone')

        

    })
}