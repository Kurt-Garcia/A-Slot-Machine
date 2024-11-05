// Immediately invoked function expression
// to not pollute the global scope
(function() {
  const wheel = document.querySelector('.wheel');
  const startButton = document.querySelector('.button');
  const stopButton = document.querySelector('.stop_btn');
  let deg = 0;




  startButton.addEventListener('click', function () {
    this.style.display = "none";
    stopButton.style.display = "block";
    // Disable button during spin
    //startButton.style.pointerEvents = 'none';
    // Calculate a new rotation between 5000 and 10 000
    deg = Math.floor(19000 + Math.random() * 8000);
    // Set the transition on the wheel
    wheel.style.transition = 'all 60s ease-out';
    // Rotate the wheel
    wheel.style.transform = `rotate(${deg}deg)`;
    // Apply the blur
    //wheel.classList.add('blur');

     if (showTimer===true) {
    timerWrapper.classList.remove('visible');
  }
  });

  wheel.addEventListener('transitionend', () => {
    // Remove blur
    //wheel.classList.remove('blur');
    // Enable button when spin is over
    startButton.style.pointerEvents = 'auto';
    // Need to set transition to none as we want to rotate instantly
    wheel.style.transition = 'none';
    // Calculate degree on a 360 degree basis to get the "natural" real rotation
    // Important because we want to start the next spin from that one
    // Use modulus to get the rest value from 360
    const actualDeg = deg % 360;
    // Set the real rotation instantly without animation
    wheel.style.transform = `rotate(${actualDeg}deg)`;
  });

   stopButton.addEventListener('click', function () {
 this.style.display = "none";
 startButton.style.display = "block";

    // Disable button during spin
    //startButton.style.pointerEvents = 'none';
    // Calculate a new rotation between 5000 and 10 000
    deg = Math.floor(1 + Math.random() * 1);
    // Set the transition on the wheel
    wheel.style.transition = 'all 2s ease-out';
    // Rotate the wheel
    wheel.style.transform = `rotate(${deg}deg)`;
    // Apply the blur
    //wheel.classList.add('blur');

     if (showTimer===true) {
    timerWrapper.classList.add('visible');
  }
  });

})();
