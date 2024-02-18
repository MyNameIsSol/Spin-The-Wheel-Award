<?php include 'head.php' ?>

    <!-- <div class="home-spin">
      <span class="timess"><svg width="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>close</title><path fill="#fff" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg></span>
      <div class="contai">
        <div class="spinBtn"></div>
        <div class="wheel">
            <div class="number" style="--i:1;--clr:#2b2997;"><span>0.25</span> </div>
            <div class="number" style="--i:2;--clr:#413faa;"><span>0.3</span> </div>
            <div class="number" style="--i:3;--clr:#2f2d9b;"><span>0.1</span> </div>
            <div class="number" style="--i:4;--clr:#413faa;"><span>0.14</span> </div>
            <div class="number" style="--i:5;--clr:#2b2997;"><span>0.18</span> </div>
            <div class="number" style="--i:6;--clr:#413faa;"><span>0.22</span> </div>
            <div class="number" style="--i:7;--clr:#2b2997;"><span>0.26</span> </div>
            <div class="number" style="--i:8;--clr:#413faa;"><span>0.3</span> </div>
        </div>
    </div>
    </div> -->


    <div class="myspin">
    <!-- <span class="timess"><svg width="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>close</title><path fill="#fff" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg></span> -->
        <div class="mainbox" id="mainbox">
          <div class="box" id="box">
               <div class="box1">
               <span class="font span1 spinspan"><h5>0.14</h5></span>
                <span class="font span2 spinspan"><h5>$0.25</h5></span>
                <span class="font span3 spinspan"><h5>$0.3</h5></span>
                <span class="font span4 spinspan"><h5>$0.1</h5></span>
                <span class="font span5 spinspan" ><h5>$0.18</h5></span>
               </div>
               <div class="box2">
                <span class="font span1 spinspan"><h5>$0.14</h5></span>
                <span class="font span2 spinspan"><h5>$0.22</h5></span>
                <span class="font span3 spinspan"><h5>$0.3</h5></span>
                <span class="font span4 spinspan"><h5>$0.1</h5></span>
                <span class="font span5 spinspan"><h5>$0.26</h5></span>
               </div>
          </div>
          <button class="spin">SPIN</button>
        </div>
        </div>

    <!-- -------------------------------------------------------------- -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- Page wrapper  -->
    <!-- -------------------------------------------------------------- -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->


      <!-- <div class="page-breadcrumb border-bottom">
        <div class="row">
          <div class="
                col-lg-3 col-md-4 col-xs-12
                justify-content-start
                d-flex
                align-items-center
              ">
            <h5 class="font-weight-medium text-uppercase mb-0">
              Product Details
            </h5>
          </div>
          <div class="
                col-lg-9 col-md-8 col-xs-12
                d-flex
                justify-content-start justify-content-md-end
                align-self-center
              ">
            <nav aria-label="breadcrumb" class="mt-2">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Product Details
                </li>
              </ol>
            </nav>
            <button class="btn btn-danger text-white ms-3 d-none d-md-block">
              Buy Ample Admin
            </button>
          </div>
        </div>
      </div> -->
   
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- -------------------------------------------------------------- -->
      <!-- Container fluid  -->
      <!-- -------------------------------------------------------------- -->
      <div class="container-fluid page-content m-0" style="padding: 0 5px;">
        <!-- -------------------------------------------------------------- -->
        <!-- Start Page Content -->
        <!-- -------------------------------------------------------------- -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-12 m-0 p-0">
          <?php
          $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if(strpos($url, 'paid') == true){
              echo "<p class='alert alert-success'>You have sucessfully made a deposit, Please wait for confirmation.</p>";
              echo "<script>$('.alert-success').fadeOut(7000)</script>";
          }
         
          ?>
            <div class="card" >
              <div class="card-body p-4" >
                <h3 class="card-title" style="font-size: 30px;"> Spin</h3>
                <h6 class="card-subtitle" style="font-weight: 600;">The amount you earn and the number of spins depends
                  on your rank</h6>
                <div class="row">
                
                  <div class="col-lg-9 col-md-9 col-sm-6">
                    <h2 class="mt-2" style="font-weight:600">
                      <small class="mb-2"><svg width="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                          <title>wallet-bifold-outline</title>
                          <path fill="#364A63"
                            d="M15.5 15.5C16.33 15.5 17 14.83 17 14C17 13.17 16.33 12.5 15.5 12.5C14.67 12.5 14 13.17 14 14C14 14.83 14.67 15.5 15.5 15.5M7 3H17C18.11 3 19 3.9 19 5V7C20.11 7 21 7.9 21 9V19C21 20.11 20.11 21 19 21H7C4.79 21 3 19.21 3 17V7C3 4.79 4.79 3 7 3M17 7V5H7C5.9 5 5 5.9 5 7V7.54C5.59 7.2 6.27 7 7 7H17M5 17C5 18.11 5.9 19 7 19H19V9H7C5.9 9 5 9.9 5 11V17Z" />
                        </svg></small> <small style="color: #364A63;">Account Balance: <?= !empty($currency) ? $currency : '$' ?><?= !empty($walletbal) ? $walletbal : '0' ?></small><br>
                      <small><?= !empty($usd_to_loc) ? $usd_to_loc : ''?> <?= isset($country_currency) ? $country_currency : ''?></small>
                    </h2>

                    <p style="margin-top: 15px; font-size: 14px;">
                      Time to next refresh: <small id="countdown">00:00:00</small>
                    </p>
                   
                  <div class="" style="margin: 40px 0; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                    <div style="display: flex;">
                      <spa  style="align-self: center; padding: 8px 11px; margin: 0; border-radius: 3px; font-size: 15px; font-weight: 600; background-color: #816BFF; color: #fff;">ST</spa>
                      <div style="margin-left: 17px;">
                        <p style="margin: 0; font-size: 15px; font-weight: 700; padding: 0;" class="text-success">Starter</p>
                        <small><svg width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                          <title>wallet-bifold-outline</title>
                          <path fill="#364A63"
                            d="M15.5 15.5C16.33 15.5 17 14.83 17 14C17 13.17 16.33 12.5 15.5 12.5C14.67 12.5 14 13.17 14 14C14 14.83 14.67 15.5 15.5 15.5M7 3H17C18.11 3 19 3.9 19 5V7C20.11 7 21 7.9 21 9V19C21 20.11 20.11 21 19 21H7C4.79 21 3 19.21 3 17V7C3 4.79 4.79 3 7 3M17 7V5H7C5.9 5 5 5.9 5 7V7.54C5.59 7.2 6.27 7 7 7H17M5 17C5 18.11 5.9 19 7 19H19V9H7C5.9 9 5 9.9 5 11V17Z" />
                        </svg><strong style="font-weight: 800; color: #000;font-size:14px;"><?= !empty($spin) ? $spin : "0" ?></strong style="font-size:15px"> remaining spin</small>
                      </div>
                    </div>
                   
                    <ul class="list-group list-group-flush ps-0 mt-3">
                      <li class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                          " style="font-size: 12px; color: #364A63;">
                        <i class="me-2"><svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>seal-variant</title><path fill="#364A63" d="M17.71 6.15C17.46 5.38 16.79 5.21 16.45 4.77C16.14 4.31 16.18 3.62 15.53 3.15S14.23 2.92 13.7 2.77 12.81 2 12 2 10.82 2.58 10.3 2.77 9.13 2.67 8.47 3.15 7.86 4.31 7.55 4.77C7.21 5.21 6.55 5.38 6.29 6.15S6.5 7.45 6.5 8 6 9.08 6.29 9.85 7.21 10.79 7.55 11.23C7.86 11.69 7.82 12.38 8.47 12.85S9.77 13.08 10.3 13.23 11.19 14 12 14 13.18 13.42 13.7 13.23 14.87 13.33 15.53 12.85 16.14 11.69 16.45 11.23C16.79 10.79 17.45 10.62 17.71 9.85S17.5 8.55 17.5 8 18 6.92 17.71 6.15M12 12A4 4 0 1 1 16 8A4 4 0 0 1 12 12M14 8A2 2 0 1 1 12 6A2 2 0 0 1 14 8M13.71 15.56L13.08 19.16L12.35 23.29L9.74 20.8L6.44 22.25L7.77 14.75A4 4 0 0 0 9.66 15.17A4.15 4.15 0 0 0 11 15.85A3.32 3.32 0 0 0 12 16A3.5 3.5 0 0 0 13.71 15.56M17.92 18.78L15.34 17.86L15.85 14.92A3.2 3.2 0 0 0 16.7 14.47L16.82 14.37Z" /></svg></i>
                        Each spin earnings range : <strong style="font-weight: 700;">$0.1- $0.3</strong> 
                      </li>
                      <li class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                          " style="font-size: 12px; color: #364A63;">
                        <i class="me-2"><svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>seal-variant</title><path fill="#364A63" d="M17.71 6.15C17.46 5.38 16.79 5.21 16.45 4.77C16.14 4.31 16.18 3.62 15.53 3.15S14.23 2.92 13.7 2.77 12.81 2 12 2 10.82 2.58 10.3 2.77 9.13 2.67 8.47 3.15 7.86 4.31 7.55 4.77C7.21 5.21 6.55 5.38 6.29 6.15S6.5 7.45 6.5 8 6 9.08 6.29 9.85 7.21 10.79 7.55 11.23C7.86 11.69 7.82 12.38 8.47 12.85S9.77 13.08 10.3 13.23 11.19 14 12 14 13.18 13.42 13.7 13.23 14.87 13.33 15.53 12.85 16.14 11.69 16.45 11.23C16.79 10.79 17.45 10.62 17.71 9.85S17.5 8.55 17.5 8 18 6.92 17.71 6.15M12 12A4 4 0 1 1 16 8A4 4 0 0 1 12 12M14 8A2 2 0 1 1 12 6A2 2 0 0 1 14 8M13.71 15.56L13.08 19.16L12.35 23.29L9.74 20.8L6.44 22.25L7.77 14.75A4 4 0 0 0 9.66 15.17A4.15 4.15 0 0 0 11 15.85A3.32 3.32 0 0 0 12 16A3.5 3.5 0 0 0 13.71 15.56M17.92 18.78L15.34 17.86L15.85 14.92A3.2 3.2 0 0 0 16.7 14.47L16.82 14.37Z" /></svg></i>
                        Number of spins per day : <strong style="font-weight: 700;"> 1</strong> 
                      </li>
                      <li class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                          " style="font-size: 12px; color: #364A63;">
                        <i class="me-2"><svg width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>seal-variant</title><path fill="#364A63" d="M17.71 6.15C17.46 5.38 16.79 5.21 16.45 4.77C16.14 4.31 16.18 3.62 15.53 3.15S14.23 2.92 13.7 2.77 12.81 2 12 2 10.82 2.58 10.3 2.77 9.13 2.67 8.47 3.15 7.86 4.31 7.55 4.77C7.21 5.21 6.55 5.38 6.29 6.15S6.5 7.45 6.5 8 6 9.08 6.29 9.85 7.21 10.79 7.55 11.23C7.86 11.69 7.82 12.38 8.47 12.85S9.77 13.08 10.3 13.23 11.19 14 12 14 13.18 13.42 13.7 13.23 14.87 13.33 15.53 12.85 16.14 11.69 16.45 11.23C16.79 10.79 17.45 10.62 17.71 9.85S17.5 8.55 17.5 8 18 6.92 17.71 6.15M12 12A4 4 0 1 1 16 8A4 4 0 0 1 12 12M14 8A2 2 0 1 1 12 6A2 2 0 0 1 14 8M13.71 15.56L13.08 19.16L12.35 23.29L9.74 20.8L6.44 22.25L7.77 14.75A4 4 0 0 0 9.66 15.17A4.15 4.15 0 0 0 11 15.85A3.32 3.32 0 0 0 12 16A3.5 3.5 0 0 0 13.71 15.56M17.92 18.78L15.34 17.86L15.85 14.92A3.2 3.2 0 0 0 16.7 14.47L16.82 14.37Z" /></svg></i>
                        Successfully invited users, refresh the number of spins for the day <br> (Limited to the first 10 users invited) 
                      </li>
                    </ul>
                    <div class="spinbut" style="margin-top: 10px;">
                    <input type="hidden" id="username" name="username" value="<?= isset($username) ? $username : ""?> ">
                    <input type="hidden" id="spinval" name="spinval" value="<?= isset($spin) ? $spin : ""?> ">
                      <button id="spinbut" style="outline: none; border: 1px solid black; padding: 3px 13px; border-radius: 3px;"> 
                        <!-- <i class="fa-duotone fa-loader"></i> -->
                        <img id="img1" src="../../assets/images/spin/loader.png" width="14" alt="spin"> 
                        <small style="font-size: 12px; font-weight: 700; margin-left: 2px;">Spin</small> </button>
                    </div>
                  </div>
                  </div>

                  <div class="spinads col-md-12">
                    <img src="../../assets/images/spin/ads-tran.jpg" width="100%" alt="" >
                </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End PAge Content -->
        <!-- -------------------------------------------------------------- -->
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- End Container fluid  -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- footer -->
      <!-- -------------------------------------------------------------- -->
      <footer class="footer text-center">
        © 2022 All Rights Reserved prideemergencyfund
      </footer>
      <!-- -------------------------------------------------------------- -->
      <!-- End footer -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Page wrapper  -->
    <!-- -------------------------------------------------------------- -->
  </div>
  <!-- -------------------------------------------------------------- -->
  <!-- End Wrapper -->
  <!-- -------------------------------------------------------------- -->
  <!-- -------------------------------------------------------------- -->
  <!-- customizer Panel -->
  <!-- -------------------------------------------------------------- -->

  <div class="chat-windows"></div>
  <!-- -------------------------------------------------------------- -->
  <!-- All Jquery -->
  <!-- -------------------------------------------------------------- -->
  <!-- <script src="../../dist/libs/jquery/dist/jquery.min.js"></script> -->


  <!-- Bootstrap tether Core JavaScript -->
  <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- apps -->
  <!-- <script src="../../dist/js/app.min.js"></script> -->
  <script src="app.min.js"></script>
  <!-- <script src="../../dist/js/app.init.sidebar.js"></script> -->
  <script src="app.init.sidebar.js"></script>
  <!-- <script src="../../dist/js/app-style-switcher.js"></script> -->
  <script src="app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../../dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js"></script>
  <script src="../../dist/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!--Wave Effects -->
  <script src="../../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../../dist/js/feather.min.js"></script>
  <script src="../../dist/js/custom.min.js"></script>

  <!-- BEGIN THEME GLOBAL STYLE -->
  <script src="../../plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="../../plugins/sweetalerts/custom-sweetalert.js"></script>


  <script>
    $("document").ready(function(){ 
        $("#spinbut").mouseenter(function(){    
            $(this).find("#img1").attr('src','../../assets/images/spin/loaderr.png');    
        });     
        $("#spinbut").mouseleave(function(){       
            $(this).find("#img1").attr('src','../../assets/images/spin/loader.png');      
        }); 
    });
</script>


<script>
const timeoutDuration = 24 * 60 * 60 * 1000; // 24 hours in milliseconds
const countdownElement = document.getElementById('countdown');

let startTime = parseInt(localStorage.getItem('countdownStartTime'), 10) || new Date().getTime();

const timerId = setInterval(() => {
  const remainingTime = timeoutDuration - (new Date().getTime() - startTime);
  if (remainingTime <= 0) {

    var username = document.querySelector("#username").value;
    var form1 = document.createElement("form");
    var input1 = document.createElement("input");
   
    // where you want to post the data 
    form1.action = "../configs/updatespin.php";
    form1.method = "post";

    // add your fields here 
    input1.name = "username";
    input1.value = username;

    // then append 
    form1.appendChild(input1);

    document.body.appendChild(form1);
    form1.submit();
    
    console.log('Countdown timer has expired!');
    startTime = new Date().getTime();
    localStorage.setItem('countdownStartTime', startTime);
    remainingTime = timeoutDuration;
  }
  let hours = Math.floor(remainingTime / (60 * 60 * 1000));
  let minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
  let seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);
  hours = String(hours).padStart(2, '0');
  minutes = String(minutes).padStart(2, '0');
  seconds = String(seconds).padStart(2, '0');
  countdownElement.textContent = `${hours}:${minutes}:${seconds}`;
}, 1000);


  let timess = document.querySelector('.timess');
  let spins = document.querySelector('.spin');
  let myspin = document.querySelector('.myspin');

// spin button 2
let spinBut = document.querySelector('.spinbut');
var spinval = document.querySelector("#spinval").value;
    
spinBut.onclick = function(){
  if(spinval >= 1){
  myspin.style.display = "flex";
  }else{
    swal('Sorry!','Not enough spin available today! Successfully invited users, refresh the number of spins for the day. Tip: Invite 15 friends to automatically upgrade to level 1 experience users, with higher turntable rewards, and the ability to withdraw cash immediately.','info')
  }
}

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

  if(AC.includes(results[0])) selectItem = "0.3";
  if(Camera.includes(results[0])) selectItem = "0.1";
  if(Zonk.includes(results[0])) selectItem = "0.14";
  if(PS.includes(results[0])) selectItem = "0.18";
  if(Headset.includes(results[0])) selectItem = "0.22";
  if(Drone.includes(results[0])) selectItem = "0.26";
  if(ROG.includes(results[0])) selectItem = "0.25";
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
      title: "Hurray! You Won!",
      text: "You earned $" + selectItem + "",
      type: "success",
      showCancelButton: false,
      confirmButtonColor: "#dd6b55",
      confiemButtonText: "Claim",
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
    form1.action = "../configs/updatebal.php";
    form1.method = "post";

    // add your fields here 
    input1.name = "walbal";
    input1.value = selectItem;

    input2.name = "username";
    input2.value = username;

    // then append 
    form1.appendChild(input1);
    form1.appendChild(input2);

    document.body.appendChild(form1);
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

  remainingTime = 0;
  // timess.onclick = function(){
  //   myspin.style.display = "none";
  // }
</script>

</body>

</html>