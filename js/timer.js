
const maDiv = document.getElementById('BTNreponse');
const secondsSpan = document.getElementById('seconds');

function bloquerDiv() {
  BTNreponse.style.pointerEvents = 'none';
  BTNreponse.style.opacity = '0.5'; 
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
  }
}, 1000);


setTimeout(bloquerDiv, 10000); 
