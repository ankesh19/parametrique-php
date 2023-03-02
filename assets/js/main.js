function menuShow(){
 $("#menucont").fadeIn();
}

function menuHide(){
 $("#menucont").fadeOut();
}

countanimation();
function countanimation(){
    let valueDisplays = document.querySelectorAll("#num");
    let interval = 4000;

    valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
    startValue += 1;
    if(endValue==60){
      valueDisplay.textContent= startValue+",000+";
     }else{
     valueDisplay.textContent= startValue+"+";
     }
    if (startValue == endValue) {
      clearInterval(counter);
      }
    }, duration);
      });
}