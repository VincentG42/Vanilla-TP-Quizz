

let divReponse = document.querySelector("#div_reponse");
let reponses = document.querySelectorAll(".submitresponse");
let qcm= document.querySelectorAll("#answer_form");
let check= document.querySelector('.checkbutton')
let nextQuestionButton =document.querySelector('#next_question_button');
let scoreQuestion = document.querySelector('#score_question');
// let numberOfQuestions = document.querySelector('#nombrequestion');
let quizzEndButton = document.querySelector('#nombrequestion');
let nextbutton =document.querySelector('#next_question_button');

check.addEventListener('click',()=>{
    
        nextQuestionButton.classList.remove('hidden_button')
    
    reponses.forEach(reponse =>{

        if (reponse.checked === true){
            // console.log(reponse.value)
            scoreQuestion.value = reponse.value
            // console.log(scoreQuestion.value);
        }
        
        reponse.classList.add('pointernone')

    })
})



let count = 0;

nextbutton.addEventListener('click', function() {
    count =count+1;
  
    if (count === 10) {
      
      this.disabled = true; // Désactive le bouton après 10 clics
      nextQuestionButton.classList.remove('hidden_button')

    
    }
  });