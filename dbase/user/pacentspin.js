
  function timer(){
const timeoutDuration = 3 * 60 * 60 * 1000; // 24 hours in milliseconds
const countdownElement = document.getElementById('pacent_countdown');

let startTime = parseInt(localStorage.getItem('countdownStartTime'), 10) || new Date().getTime();

const timerId = setInterval(() => {
  const remainingTime = timeoutDuration - (new Date().getTime() - startTime);
  if (remainingTime <= 0) {

    var username = document.querySelector("#username").value;
    var form1 = document.createElement("form");
    var input1 = document.createElement("input");
   
    // where you want to post the data 
    form1.action = "../configs/updatelev2.php";
    form1.method = "post";

    // add your fields here 
    input1.name = "username";
    input1.value = username;

    // then append 
    form1.appendChild(input1);

    document.body.appendChild(form1);
    form1.submit();
    
    console.log('Countdown timer has expired!');
    // remainingTime = 0;
    // startTime = new Date().getTime();
    // localStorage.setItem('countdownStartTime', startTime);
    // remainingTime = timeoutDuration;
  }
  let hours = Math.floor(remainingTime / (60 * 60 * 1000));
  let minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
  let seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);
  hours = String(hours).padStart(2, '0');
  minutes = String(minutes).padStart(2, '0');
  seconds = String(seconds).padStart(2, '0');
  countdownElement.textContent = `${hours}:${minutes}:${seconds}`;
  console.log(textContent = `${hours}:${minutes}:${seconds}`);
}, 1000);
  }

  let timess = document.querySelector('.timess');
  let spins = document.querySelector('.spin');
  let myspin = document.querySelector('.myspin');

// spin button 2
// let spinBut = document.querySelector('.spinbut');
var spinpacent = document.querySelector("#spinpacent").value;
    
// spinBut.onclick = function(){
  if(spinpacent < 1){
  myspin.style.display = "flex";
  }
  // else{
  //   swal('Sorry!','Not enough spin available today! Successfully invited users, refresh the number of spins for the day. Tip: Invite 15 friends to automatically upgrade to level 1 experience users, with higher turntable rewards, and the ability to withdraw cash immediately.','info')
  // }
// }

  function shuffle(array){
    var currentIndex = array.length,
    randomIndex;

    while(0 !== currentIndex){
      randomIndex = Math.floor(Math.random()*currentIndex);
      currentIndex--;
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex],
        array[currentIndex],
      ];
    }
    return array;
  }

  spins.onclick = function(){
    const box = document.querySelector('.box');
    const element = document.querySelector('.mainbox');
    let selectItem = "";

    let AC = shuffle([1890, 2250, 2610]);
    let Camera = shuffle([1850, 2210, 2570]);
    let Zonk = shuffle([1770, 2130, 2490]);
    let PS = shuffle([1810, 2130, 2490]);
    let Headset = shuffle([1750, 2110, 2350]);
    let Drone = shuffle([1630, 1990, 2350]);
    let ROG = shuffle([1570, 1930, 2290]);
    // let TV = shuffle([1850, 1990, 2250]);
    // let speaker = shuffle([300, 500, 700]);
    // let ipad = shuffle([700, 900, 1100]);

  let results = shuffle([
    AC[0],
    Camera[0],
    Zonk[0],
    PS[0],
    Headset[0],
    Drone[0],
    ROG[0],
    // TV[0],
    // speaker[0],
    // ipad[0],
  ]);

  if(AC.includes(results[0])) selectItem = "15";
  if(Camera.includes(results[0])) selectItem = "35";
  if(Zonk.includes(results[0])) selectItem = "50";
  if(PS.includes(results[0])) selectItem = "25";
  if(Headset.includes(results[0])) selectItem = "30";
  if(Drone.includes(results[0])) selectItem = "20";
  if(ROG.includes(results[0])) selectItem = "40";
  // if(TV.includes(results[0])) selectItem = "$0.21";
  // if(speaker.includes(results[0])) selectItem = "$0.2";
  // if(ipad.includes(results[0])) selectItem = "$0.5";

  box.style.setProperty("transition", "all ease 5s");
  box.style.transform = "rotate("+ results[0] +"deg)";
  element.classList.remove("animate");
  setTimeout(function(){
    element.classList.add("animate");
  }, 5000);

  setTimeout(function(){
    // swal("Hurray! You Won", "You earned $" + selectItem + "", "success")
    swal({
      title: "Congratulations!",
      text: "You won " + selectItem + " % discount. You can upgrade your membership level at " + selectItem + "% of the original price within 3 hours, please use it as soon as posible.",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#dd6b55",
      confiemButtonText: "Upgrade",
      closeOnConfirm: false
    });
  },6500)

  setTimeout(function(){
    if(selectItem !== ""){
    var username = document.querySelector("#username").value;
    var form1 = document.createElement("form");
    var input1 = document.createElement("input");
    var input2 = document.createElement("input");
   
    // where you want to post the data 
    form1.action = "../configs/updatelev.php";
    form1.method = "post";

    // add your fields here 
    input1.name = "spinpacent";
    input1.value = selectItem;

    input2.name = "username";
    input2.value = username;

    // then append 
    form1.appendChild(input1);
    form1.appendChild(input2);

    document.body.appendChild(form1);
    // timer();
    form1.submit();

    }
  },7000)
  
  setTimeout(function(){
    box.style.setProperty("transition", "initial")
    box.style.transform = "rotate(90deg)";
  },7500);

  setTimeout(function(){
      myspin.style.display = "none";
    },8500);
  }

  timess.onclick = function(){
    myspin.style.display = "none";
  }
