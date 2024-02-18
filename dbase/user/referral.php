<?php include 'head.php' ?>

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
          <div class="col-lg-12 m-0 p-0 bg-white">
            <div class="card" >
              <div class="card-body p-4" >

                <div class="page-breadcrumb"  style="background-color: #fff !important; padding: 20px 20px 0;">
                    <div class="row">
                      <div class=" col-lg-12 col-md-12 col-xs-12 p-0" style="margin-bottom: 10px;">
                        <h3 class="card-title" style="font-size: 1.75rem; margin-bottom: 3px; font-weight: 700;">Invite Your Friends</h3>
                        <h6 class="card-subtitle mt-2" style="font-size: 16px;font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif; ">By reffering you get referral bonus of 10% from your referrals daily earning.</h6>
                      </div>
                     
                    </div>
                  </div>
           
                <div class="row">
                
                  <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="" style="margin: 20px 0 30px; padding: 20px 20px; align-items: center; border: 1px solid rgb(226, 224, 224); border-radius: 3px;">
                  <?php
                            $sql = "SELECT * FROM reftable WHERE referee='$username'";
                            $result = mysqli_query($dbconnec,$sql);
                                if(mysqli_num_rows($result) != false){
                                  $totalref = mysqli_num_rows($result);
                                }
                              ?>
                    <h1 style="font-size: 2rem;font-family: Nunito, sans-serif;color: #364a63;font-weight: 700;letter-spacing: -0.03em;">Number of your referrals: <?= isset($totalref)?$totalref:'0'?></h1>
                    <h6 style="font-size: 18px;font-family: Nunito, sans-serif;font-weight: 500;color: #364a63;">Send the referral link below to your friends, once they register as our member they will become your referrals</h6>
                     
                           <div class="ref-form mt-4">
                            <style>
                              #copy-suc{
                                display:none;
                              }
                            </style>
                            <form action="">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <button class="copy" onclick="copyref(event);" type="button">Copy</button>
                                    </div>
                                    <input type="text" id="copy-ref"  class="form-control" value="localhost\package\html\spinning\account_1\register.php?ref=<?php echo $username;?> " placeholder="" aria-label="" aria-describedby="basic-addon1">
                                    <div style="width:100%">
                                        <span id="copy-suc" class="alert alert-success"></span>
                                    </div>
                                   
                                  </div>
                            </form>
                            <div class="contacts" style="display: flex; justify-content: space-between; margin-top: 30px;">
                                <img style="width: 45px; height: 45px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/Answer_contact_1.png" alt="whatsapp">
                                <img style="width: 45px; height: 45px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/Answer_contact_3.png" alt="facebook">
                                <img style="width: 45px; height: 45px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/Answer_contact_2.png" alt="messenger">
                                <img style="width: 45px; height: 45px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/Answer_contact_4.png" alt="twitter">
                                <img style="width: 45px; height: 45px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/Answer_contact_5.png" alt="telegram">
                                <img style="width: 45px; height: 45px; vertical-align: middle; border-style: none;" src="../../assets/images/spin/line-chat.png" alt="line">
                            </div>
                            <div class="share" style="margin-top: 30px;">
                                <span style="font-family: Roboto, sans-serif, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;font-weight: 400;color: #526484;font-size: 16px; ">You can also click the button above to share with your friends👆👆👆</span>
                            </div>
                           </div>
                        </div>
                        <h3 style="margin-top: 25px; font-size: 1.75rem;font-family: Nunito, sans-serif;font-weight: 700;color: #364a63;">Your referrals</h3>
                        <!-- <div class="card">
                            <div class="card-body"> -->
                            <?php
                            $sql = "SELECT * FROM reftable WHERE referee='$username'";
                            $result = mysqli_query($dbconnec,$sql);
                                if(mysqli_num_rows($result) != false){
                                while($data = mysqli_fetch_assoc($result)){
                                    $usd= $data['username'];
                                    $email= $data['email'];
                                    $refbonus= $data['bonus'];
                                    $refstatus= $data['status'];
                                    $ref_date= $data['reg_date'];

                                    $sql = "SELECT * FROM users WHERE username='$usd'";
                                      $result = mysqli_query($dbconnec,$sql);
                                          if(mysqli_num_rows($result) != false){
                                          while($data = mysqli_fetch_assoc($result)){
                                            $profileimg= $data['profileimg'];
                                          }
                                        }
                              echo '<ul class="timeline timeline-left">
                                <li class="timeline-inverted timeline-item">
                                  <div class="timeline-badge success">';
                                  if(!isset($profileimg)){
                                    echo '<img src="../../assets/images/users/1.jpg" alt="img" class="img-fluid" />';
                                  }else{
                                    echo '<img src="../img/'.$profileimg.'" alt="img" class="img-fluid" />';
                                  }
                                  echo '</div>
                                  <div class="timeline-panel">
                                    <div class="timeline-heading">
                                      <h4 class="timeline-title">'.$usd.'</h4>
                                      <p> <small class="text-muted" ><i class="fa fa-clock-o"></i>'.$ref_date.'</small >
                                      </p>
                                    </div>
                                    <div class="timeline-body">
                                      <p> '.$email.' </p>
                                    </div>
                                  </div>
                                </li>
                                </ul>';
                                }
                              }
                                ?>
                            <!-- </div>
                        </div> -->
                    </div>

                    </div>
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
<script src="../../dist/js/jquery-3.4.1.min.js"></script>

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
function copyref(e){
      e.preventDefault();
    var copyTxt = document.getElementById("copy-ref");
    var alats = document.getElementById("copy-suc");
    copyTxt.select();
    document.execCommand("copy");
    alats.innerText = "Copied";
    alats.style.display = "inline-block";
    setTimeout(function() {
        alats.style.display = "none";
        }, 1000);
    }
</script>
</body>

</html>