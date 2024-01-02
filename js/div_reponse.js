

let divReponse = document.querySelector("#BTNQuiz");
let reponses = document.querySelectorAll(".submitresponse");
let qcm= document.querySelectorAll("#answer_form");
let check= document.querySelector('.checkbutton')
let nextQuestionButton =document.querySelector('#next_question_button');
let scoreQuestion = document.querySelector('#score_question');
let quizzEndButton=document.querySelector('#quizz_end')

let count= document.querySelector('#questionNb');

console.log(count.value);

check.addEventListener('click',()=>{

    if(count.value <= 10){

        
        nextQuestionButton.classList.remove('hidden_button')
        
        reponses.forEach(reponse =>{
            
            if (reponse.checked === true){
                // console.log(reponse.value)
                scoreQuestion.value = reponse.value
                // console.log(scoreQuestion.value);
            }
            
            reponse.classList.add('pointernone')
            
        })
    }else{
        quizzEndButton.classList.remove('hidden_button')

    }


    })



