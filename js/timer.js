const maDiv = document.getElementById('BTNreponse');
const secondsSpan = document.getElementById('seconds');

function bloquerDiv() {
  div_reponse.style.pointerEvents = 'none';
  div_reponse.style.opacity = '0.5'; 
}
function updateTimer(seconds) {
  secondsSpan.textContent = seconds;
}


let secondsLeft = 10;
updateTimer(secondsLeft);

const countdown = setInterval(() => {
  secondsLeft--;
  updateTimer(secondsLeft);

  if (secondsLeft === 0) {
    bloquerDiv();
    clearInterval(countdown);
    nextQuestionButton.classList.remove('hidden_button')
  }
}, 1000);


setTimeout(bloquerDiv, 10000);
